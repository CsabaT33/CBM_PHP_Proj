<?php
$id = $_POST['kid'];

$kundenModel = new KundenModel();
$kunden = $kundenModel->getKundenByID($id);
?>
<!DOCTYPE html>

<head>
    <title>Kunden löschen - Resultat</title>
    <!-- Bootstrap CSS einbinden-->
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';?>
</head>

<body class="body">
    <!-- menu anzeigen -->
    <?php include "menu.php";?>

    <h1>Kunden löschen</h1>
    

    <?php
        $kundenModel = new KundenModel();
        $kundenModel ->getKundenByID($id);
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
        echo "</tr>";
        echo "</table>";
    
        $kundenModel = new KundenModel();
        $kundenModel->deleteKundenByID();
    ?>

    <h1>Der Kunde wurde (aus)GELÖSCHT!</h1>
    
    <form action= "index.php?controller=kunden&action=AllKunden" method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>
</body>
</html>