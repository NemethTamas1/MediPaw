import {defineStore} from 'pinia';
import {http} from '@utils/http';

export const useUserStore = defineStore('users', {
    state:()=>({
        user:[]
    }),
    actions:{
        //Még nincs kész. Mit kapok vissza?
        async authenticateUser(email, password){
            const response = await http.post('authenticate', {email, password});
            console.log(response);
        }
    }
})