import { defineStore } from "pinia";
import {http} from '@utils/http';

export const useAllatStore = defineStore("allatok", {
    state:()=>({
        allatok:[],
        allat:[]
    }),
    actions:{
        async getAllats(){
            const response = await http.get("allatok")
            this.allatok = response.data.data
        }
    }
})