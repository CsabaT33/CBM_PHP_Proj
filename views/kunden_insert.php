<!DOCTYPE html>

<head>
    <title>Admin</title>
    <!-- Bootstrap CSS einbinden-->
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';
    #setcookie("AktuelleSeite", "INDEX", time() + 60 * 60 * 24 * 1);
    ?>
    
</head>

<body>
    <!-- menu anzeigen -->
    <?php include 'menu.php';
    include_once 'models/KundenModel.php';?>
    
    <br>
    <h1>Kunden einfügen</h1>
    <h3>Füge hier bitte die Daten ein:</h3>
    <form action="index.php?controller=kunden&action=KundenInsert" method="post">
    <table  border="2" width="50%" cellpadding="5" cellspacing="0">
        <tr>
            <th width="10%"><label for="Vorname">Vorname:</label></th>
            <th width="50%"><input id="Vorname" name="vorname" size="100" required></th>
        </tr>
        <tr>
            <th><label for="Nachname">Nachname:</label></th>
            <th width="50%"><input id="Nachname" name="nachname" size="100" required></th>

        <tr>
            <th width="10%"><label for="email">E-Mail:</label></th>
            <th width="50%"><input id="email" size="100" name="email"></th>
        </tr>
        <tr>
            <th width="10%"><label for="strasse">Straße:</label></th>
            <th width="50%"><input id="strasse" size="100.8" name="strasse"></th>
        </tr> 
        <tr>
            <th width="10%"><label for="plz">PLZ:</label></th>
            <th width="50%"><input id="plz" size="100.8" name="plz"></th>
        </tr> 
        <tr>
            <th width="10%"><label for="ort">Ort:</label></th>
            <th width="50%"><input id="ort" size="100.8" name="ort"></th>
        </tr> 
        </table>
            <input class="btn btn-dark" type="submit">
        </form>
        <form action="index.php?controller=kunden&action=index" method='post'>
            <input class="btn btn-dark" type='submit' value='Zurück'>
        </form>
</body>
</html>