import {defineStore} from 'pinia';
import {http} from '@utils/http';

export const useRendeloStore = defineStore('rendelo', {
    state:() => ({
        rendelok:[],
        rendelo:[]
    }),
    actions:{
        async getRendeloByUserId(id) {
            try{
                const response = await http.get(`/rendelok/${id}`)
                this.rendelo = response.data.data;
                return this.rendelo
            }catch(err){
                console.error('Hiba a rendelő lekérdezése közben: ', err)
            }
        }
    }
})