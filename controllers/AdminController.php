<?php

include_once "models/ArtikelModel.php";
include_once "models/KundenModel.php";

class AdminController
{
    public function index()
    {
        include "views/admin.php";
    }


}