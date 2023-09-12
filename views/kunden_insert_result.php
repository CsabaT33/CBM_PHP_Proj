<?php
    $kundenModel = new KundenModel();
    $kundenModel->insertKunden();
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
    <h1>Kunden einfügen</h1>
    <ul>Hier siehst du noch mal, was eingetragen wurde:</ul>
    
    <?php

    $name = $_POST["nachname"];
    $kundenModel = new KundenModel();
    $kunden = $kundenModel->getKundenByName($name);
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

?>
    <form action="index.php?controller=kunden&action=insertKunden" method='post'>
        <input class="btn btn-dark" type='submit' value='Noch einen!'>
    </form>

    <form action="index.php?controller=kunden&action=index" method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>

</body>
</html>