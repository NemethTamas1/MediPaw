import { defineStore } from 'pinia';
import { http } from '@utils/http';

export const useUserStore = defineStore('users', {
    state: () => ({
        user: null,
        token: null
    }),
    actions: {
        // Bejelentkezés
        async authenticateDolgozo(email, password) {
            try {
                const response = await http.post('authenticate/dolgozo', { email, password });
                console.log('Válasz: ', response.data);

                this.token = response.data.token;
                this.user = response.data.user;

                // Token és UserID lementése
                sessionStorage.setItem('token', this.token);
                sessionStorage.setItem('userId', this.user.id);
                return response.data;
                //console.log(this.user)
            } catch (err) {
                console.log('Hiba történt a dolgozó bejelentkeztetése során: ', err);
                throw err;
            }
        },

        async authenticateGazdi(email, password) {
            try {
                const response = await http.post('authenticate/gazdi', { email, password });

                this.token = response.data.token;
                this.user = response.data.user;

                sessionStorage.setItem('token', this.token);
                sessionStorage.setItem('userId', this.user.id);

                return response.data;
            } catch (err) {
                throw err;
            }
        },

        // Egy felhasználó lekérése
        async getOneUser(id) {
            try {
                const response = await http.get(`/dolgozok/${id}`)
                this.user = response.data.data;
            } catch (err) {
                console.log('Nem lehetett lekérni a felhasználót: ', err);
                throw err;
            }
        },

        async GetRendeloDoctor(id) {
            const response = await http.get(`/rendelok/${id}`);

        },

        // Csekk, hogy be van-e jelentkezve a felhasználó
        async isLoggedIn() {
            return sessionStorage.getItem('token') !== null;
        },

        // Kijelentkezés
        logout() {
            this.token = null;
            this.user = null;

            sessionStorage.removeItem('token');
            sessionStorage.removeItem('userId');

            console.log('Token és userId törölve. Kijelentkezett a felhasználó.')
        },

        // Regisztráció
        async RegisterGuest(credentials) {
            const response = await http.post('/gazdik', credentials, {
                'Content-Type': 'application/json'
            });
            return response;
        }
    }
})