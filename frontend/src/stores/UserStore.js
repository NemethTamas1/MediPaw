import { defineStore } from 'pinia';
import { http } from '@utils/http';

export const useUserStore = defineStore('users', {
    state: () => ({
        user: null,
        token: null
    }),
    actions: {
        // Bejelentkezés
        async authenticateUser(email, password) {
            try {
                const response = await http.post('authenticate', { email, password });
                console.log('Válasz: ', response.data);

                this.token = response.data.token;
                this.user = response.data.user;

                // Token és UserID lementése
                sessionStorage.setItem('token', this.token);
                sessionStorage.setItem('userId', this.user.id);
                sessionStorage.setItem('userRole', this.user.role);

                //console.log(this.user)
            } catch (err) {
                console.log('Hiba történt a bejelentkezés során: ', err);
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
        }
    }
})