import {defineStore} from 'pinia';
import {http} from '@utils/http';

export const useGazdiStore = defineStore('gazdik', {
    state:()=>({
        gazdik:[]
    }),
    actions:{

        async postGazdi(data){
            const response = await http.post('/gazdik', data);
            return response.data.data;
        }
    }
})