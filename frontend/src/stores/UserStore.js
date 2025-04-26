import {defineStore} from 'pinia';
import {http} from '@utils/http';

export const useUserStore = defineStore('users', {
    state:()=>({
        user:[],
        token: null
    }),
    actions:{
        async authenticateUser(email, password){
            try{
                const response = await http.post('authenticate', {email, password});
                console.log('Válasz: ',response);
                return response;
                //this.token = response.data.data.token;
                //localStorage.setItem('token', this.token);
            }catch(err){
                console.log('Hiba történt a bejelentkezés során: ', err);
                throw err;
            }
        }
    }
})