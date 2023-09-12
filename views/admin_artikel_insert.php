<!DOCTYPE html>

<head>
    <title>Admin</title>
    
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';
    #setcookie("AktuelleSeite", "INDEX", time() + 60 * 60 * 24 * 1);
    ?>
    
</head>

<body>
    <!-- menu anzeigen -->
    <?php include 'menu.php';
    include_once "models/ArtikelModel.php";?>
    
    <br>
    <h1>Artikel einfügen</h1>
    <br>
    <h3>Füge hier bitte die Daten ein:</h3>
    <form action="index.php?controller=artikel&action=InsertArtikel" method="post">
    <table  border="2" width="50%" cellpadding="5" cellspacing="0">
        <tr>
            <th width="10%"><label for="Name">Name:</label></th>
            <th width="50%"><input id="Name" name="aname" size="100" required></th>
        </tr>
        <tr>
            <th><label for="Kat">Kategorie:</label></th>
            <th><select name="Kat">
                <option value="RAM">RAM</option>
                <option value="CPU">CPU</option>
                <option value="Mainboard">Mainboard</option>
                <option value="Grafikkarten">Grafikkarten</option>
                <option value="Cases">Cases</option>
                <option value="Festplatten">Festplatten</option>
                <option value="Netzteile">Netzteile</option>
            </select></th>
        </tr>

        <tr>
            <th width="10%"><label for="Preis">Preis:</label></th>
            <th width="50%"><input id="Preis" size="100" name="preis"></th>
        </tr>
        <tr>
            <th width="10%"><label for="Bild">Bild URL:</label></th>
            <th width="50%"><input id="Bild" size="100.8" name="bilderURL"></th>
        </tr> 
        <tr>
            <th width="10%"><label for="Beschreibung">Beschreibung:</label></th>
            <th width="0%"><textarea name="beschreibung"  padding="0" id="Beschreibung" cols="103" rows="2"></textarea></th>
        </tr>
        </table>
            <input class="btn btn-dark" type="submit">
        </form>
        <form action='index.php?controller=artikel&action=index' method='post'>
            <input class="btn btn-dark" type='submit' value='Zurück'>
        </form>
</body>
</html>