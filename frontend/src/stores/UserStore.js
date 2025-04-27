import {defineStore} from 'pinia';
import {http} from '@utils/http';

export const useUserStore = defineStore('users', {
    state:()=>({
        user: null,
        token: null
    }),
    actions:{
        // Bejelentkezés
        async authenticateUser(email, password){
            try{
                const response = await http.post('authenticate', {email, password});
                console.log('Válasz: ',response);

                this.token = response.data.data.token;
                this.user = response.data.data.user;

                // Token és UserID lementése
                sessionStorage.setItem('token', this.token);
                sessionStorage.setItem('userId', this.user.id);

                //console.log(this.user)
            }catch(err){
                console.log('Hiba történt a bejelentkezés során: ', err);
                throw err;
            }
        },

        // Egy felhasználó lekérése
        async getOneUser(id){
            try{
                const response = await http.get(`/dolgozok/${id}`)
                this.user = response.data.data;
            }catch(err){
                console.log('Nem lehetett lekérni a felhasználót: ', err);
                throw err;
            }
        },

        // Kijelentkezés
        logout(){
            this.token = null;
            this.user = null;

            sessionStorage.removeItem('token');
            sessionStorage.removeItem('userId');
            
            console.log('Token és userId törölve. Kijelentkezett a felhasználó.')
        }
    }
})