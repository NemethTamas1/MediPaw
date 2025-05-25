import {defineStore} from 'pinia';
import {http} from '@utils/http';

export const useOwnerStore = defineStore('gazdik', {
    state:()=>({
        owners:[]
    }),
    actions:{

        async postOwner(data){
            const response = await http.post('/owners', data);
            return response.data.data;
        }
    }
})