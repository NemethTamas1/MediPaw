<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("allatok")->insert([
            [
                "gazdi_id"=>1,
                "oltva"=>true,
                "nev"=>"Bodri",
                "kor"=>3,
                "fajta"=>"Golden Retriever",
                "leiras"=>"Bodri 2025. március 2-án érkezett oltásra.
                A kutya jó általános állapotban volt, élénk, jókedvű. Testtömege 32,4 kg, testhőmérséklete normál tartományban (38,5°C).
                Az általános vizsgálat során nem tapasztaltunk rendellenességet. A fogazat és a szőrzet állapota megfelelő. Külső élősködő nem volt megfigyelhető.
                Elvégzett kezelés:
                Kombinált védőoltás beadása (DHPPi-L)
                Féreghajtás tablettával (Milbemax)
                Megjegyzés: A következő oltás esedékessége: 2026. március
                A gazdinak javasolt a rendszeres bolhairtás, valamint a fogkő megelőzése érdekében rágócsont biztosítása."
            ],
            [
                "gazdi_id"=>2,
                "oltva"=>false,
                "nev"=>"Cirmi",
                "kor"=>2,
                "fajta"=>"Sziámi",
                "leiras"=>"Cirmi 2025. február 17-én érkezett általános vizsgálatra, enyhe étvágytalanság és fokozott nyugtalanság miatt. A cica kissé soványabb a korának megfelelő testtömegnél (2,8 kg), de egyébként jó kondícióban van.
                            A hasi tapintás során enyhe érzékenység figyelhető meg, de komolyabb elváltozás nem tapasztalható. A testhőmérséklet enyhén emelkedett (39,1°C). A szőrzet fénytelen, enyhén hullik. A cica hajlamos a stresszre, gazdi szerint az elmúlt napokban új bútor került a lakásba, amitől megváltozott a viselkedése.
                            Elvégzett kezelés:
                            Általános állapotfelmérés
                            B-vitamin komplex injekció
                            Stresszoldó feromonos nyakörv felhelyezése (Feliway)
                            Megjegyzés: Táplálkozás javítására javasolt a Royal Canin Gastrointestinal nedvestáp. Kontrollvizsgálat javasolt 2 héten belül. Amennyiben az étvágy nem tér vissza, vérvizsgálatot végzünk."
            ]
        ]);
    }
}
