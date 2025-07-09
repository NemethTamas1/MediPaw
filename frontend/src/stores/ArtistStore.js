import { defineStore } from "pinia";
import { http } from "@utils/http";

export const useArtistStore = defineStore("artists", {
    state:() => ({
        artists: []
    }),
    actions: {

        async getArtists() {
            const response = await http.get("/artists");
            artists.value = response.data.data;
        }
    }
})