<?php
$id = $_POST['kid'];

$kundenModel = new KundenModel();

$kunden = $kundenModel->getKundenByID($id);
?>


<!DOCTYPE html>

<head>
    <title>Admin</title>
    <!-- Bootstrap CSS einbinden-->
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';?>
</head>

<body>
    <!-- menu anzeigen -->
    <?php include 'menu.php';
    ?>
    
    <br>
    <h1>Kunden ändern</h1>
    <h3>Hier kannst du die Daten ändern:</h3>
    <form action="index.php?controller=kunden&action=updateKunden" method="post">
    <table  border="2" width="50%" cellpadding="5" cellspacing="0">
        <tr>
            <th width="10%"><label for="vorname">Vorname:</label></th>
            <th width="50%"><input id="vorname" name="vorname" size="100" value='<?php echo $kunden['vorname']; ?>'></th>
        </tr>
        <tr>
            <th width="10%"><label for="nachname">Nachname:</label></th>
            <th width="50%"><input id="nachname" name="nachname" size="100" value='<?php echo $kunden['nachname']; ?>'></th>
        </tr>
        <tr>
            <th width="10%"><label for="email">E-Mail:</label></th>
            <th width="50%"><input id="email" name="email" size="100" value='<?php echo $kunden['email']; ?>'></th>
        </tr>
        <tr>
            <th width="10%"><label for="strasse">Straße:</label></th>
            <th width="50%"><input id="strasse" name="strasse" size="100" value='<?php echo $kunden['strasse']; ?>'></th>
        </tr>
        <tr>
            <th width="10%"><label for="plz">PLZ:</label></th>
            <th width="50%"><input id="plz" name="plz" size="100" value='<?php echo $kunden['plz']; ?>'></th>
        </tr>
        <tr>
            <th width="10%"><label for="ort">Ort:</label></th>
            <th width="50%"><input id="ort" name="ort" size="100" value='<?php echo $kunden['ort']; ?>'></th>
        </tr> 

        </table>

        <input type="hidden" name="kid" value='<?php echo $kunden['kid']; ?>'>
        <input type="hidden" name="Update" value="update">
        <input class="btn btn-dark" type='submit' value='Senden'>

     </form>
     <form action='index.php?controller=kunden&action=AllKunden' method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>
</body>
</html>