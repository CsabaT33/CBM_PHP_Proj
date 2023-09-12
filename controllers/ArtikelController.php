<?php
include_once "models/ArtikelModel.php";

class ArtikelController
{
    public function index()
    {
        include "views/artikel_menu.php";
    }

    public function index2()
    {
        include "views/artikel.php";
    }

    
    //Kategorien:

    public function ZeigeRAM()
    {
        include "views/artikel_ram.php";
    }
    public function ZeigeGRAKA()
    {
        include "views/artikel_graka.php";
    }
    public function ZeigePROZESSOR()
    {
        include "views/artikel_prozessor.php";
    }
    public function ZeigeMAIN()
    {
        include "views/artikel_main.php";
    }
    public function ZeigeCASE()
    {
        include "views/artikel_case.php";
    }
    public function ZeigePLATTE()
    {
        include "views/artikel_festplatte.php";
    }
    public function ZeigeNETZTEIL()
    {
        include "views/artikel_netzteil.php";
    }

        

    // SQL
    #insert
    public function InsertArtikel(){
        include "views/admin_artikel_insert_result.php";
    }
    public function ArtikelInsert(){
        include "views/admin_artikel_insert.php";
    }

    #update
    public function ArtikelUpdate(){
        include "views/admin_artikel_update.php";
    }

    public function UpdateTheArtikel(){
        include "views/admin_artikel_update_result.php";
    }
    
    #delete
    public function DeleteArtikelByID()
    {
        include "views/admin_artikel_delete.php";
    }

}
