<?php
include_once "models/KundenModel.php";
class KundenController
{

    public function index()
    {
        include "views/kunden.php";
    }

    public function AllKunden()
    {
        include "views/kunden_alle.php";
    }


    public function InsertKunden()
    {
        include "views/kunden_insert.php";
    }
    public function KundenInsert()
    {
        include "views/kunden_insert_result.php";
    }
    

    
    public function KundenOrt()
    {
        include "views/kunden_ort.php";
    }



    public function KundenUpdate()
    {
        include "views/kunden_update.php";
    }
    public function UpdateKunden()
    {
        include "views/kunden_update_result.php";
    }



    public function DeleteKundenByID()
    {
        include "views/kunden_delete.php";
    }


    public function KundenWert()
    {
        include "views/kunden_wert.php";
    }

    
}
