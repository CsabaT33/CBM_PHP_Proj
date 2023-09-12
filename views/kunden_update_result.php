<?php

    $kundenModel = new KundenModel();
    $kundenModel->updateKunden();

?>
<!DOCTYPE html>

<head>
    <title>Kunden einfügen - Resultat</title>
    <!-- Bootstrap CSS einbinden-->
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';?>
</head>

<body class="body">
    <!-- menu anzeigen -->
    <?php include "menu.php";?>

    <br>
    <h1>Kunden bearbeiten</h1>
    <ul>Guckst du hier!</ul>
    
    <?php
        $id = $_POST['kid'];
        $kundenModel = new KundenModel();
        $kunden = $kundenModel->getKundenByID($id);

        echo '<table border="1" style="border-color: black;"  class="table table-hover">';
        echo "<td>ID:</td>";
        echo "<td>Vorname:</td>";
        echo "<td>Nachname:</td>";
        echo "<td>E-Mail:</td>";
        echo "<td>Straße:</td>";
        echo "<td>PLZ:</td>";
        echo "<td>Ort</td>";
        echo "<td></td>";
        echo "</td>";
    
        echo "<tr>";
        echo "<td>".$kunden['kid']."</td>";
        echo "<td>".$kunden['vorname']."</td>";
        echo "<td>".$kunden['nachname']."</td>"; 
        echo "<td>".$kunden['email']."</td>";   
        echo "<td>".$kunden['strasse']."</td>";
        echo "<td>".$kunden['plz']."</td>";
        echo "<td>".$kunden['ort']."</td>";
        echo "<td></td>";
        echo "</tr>";
        echo "</table>";


      #zurück button
       $cookieInhalt = $_COOKIE['AktuelleSeite'];
       $linkTeil = "";
      if(isset($cookieInhalt))
      {        
        $cookieInhalt = $_COOKIE['AktuelleSeite'];
        $linkTeil = "";
        switch($cookieInhalt)
        {
            case "ALL" : 
                $linkTeil = "AllKunden";break;
            case "INDEX" : 
                $linkTeil = "index";break;
            case "HOME" : 
                $linkTeil = "home";break;
        }
      }
      ?>

    <form action=<?php echo "index.php?controller=kunden&action=" . $linkTeil; ?> method='post'>
         <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>
</body>
</html>