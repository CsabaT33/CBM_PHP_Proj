<?php
$id = $_POST['aid'];

$artikelModel2 = new ArtikelModel();

$artikel = $artikelModel2->getArtikelByID($id);
?>


<!DOCTYPE html>

<head>
    <title>Admin</title>
    
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';?>
</head>

<body>
    <!-- menu anzeigen -->
    <?php include 'menu.php';?>
    
    <br>
    <h1>Artikel ändern</h1>
    <br>
    <h3>Hier kannst du die Daten ändern:</h3>
    <form action="index.php?controller=artikel&action=UpdateTheArtikel" method="post">
    <table  border="2" width="50%" cellpadding="5" cellspacing="0">
        <tr>
            <th width="10%"><label for="Name">Name:</label></th>
            <th width="50%"><input id="Name" name="aname" size="100" value='<?php echo $artikel['aname']; ?>'></th>
        </tr>
        <tr>
            <th width="10%"><label for="Kat">Kategorie:</label></th>
            <th width="50%"><input id="Kat" name="kategorie" size="100" value='<?php echo $artikel['kategorie']; ?>'></th>
        </tr>
        <tr>
            <th width="10%"><label for="Beschreibung">Beschreibung:</label></th>
            <th width="50%"><textarea name="beschreibung" id="Beschreibung" cols="103" rows="5" ><?php echo $artikel['beschreibung']; ?></textarea></th>
        </tr>
        <tr>
            <th width="10%"><label for="Preis">Preis:</label></th>
            <th width="50%"><input id="Preis" name="preis" size="100" value='<?php echo $artikel['preis']; ?>'></th>
        </tr>
        <tr>
            <th width="10%"><label for="Bild">Bild URL:</label></th>
            <th width="50%"><input id="Bild" name="bilderURL" size="100" value='<?php echo addslashes($artikel['bilderURL']); ?>'></th>
        </tr> 

        </table>

        <input type="hidden" name="aid" value='<?php echo $artikel['aid']; ?>'>
        <input type="hidden" name="Update" value="update">
        <input class="btn btn-dark" type="submit">
     </form>

<?php
     $cookieInhalt = $_COOKIE['AktuelleSeite'];
        $linkTeil = "";
       if(isset($cookieInhalt))
       {        
            $cookieInhalt = $_COOKIE['AktuelleSeite'];
            $linkTeil = "";
            switch($cookieInhalt)
            {
                case "CASE" : 
                    $linkTeil = "ZeigeCASE";break;
                case "PLATTE" : 
                    $linkTeil = "ZeigePLATTE";break;   
                case "GRAKA" : 
                    $linkTeil = "ZeigeGRAKA";break;
                case "MAIN" : 
                    $linkTeil = "ZeigeMAIN";break;
                case "NETZTEIL" : 
                    $linkTeil = "ZeigeNETZTEIL";break;
                case "CPU" : 
                    $linkTeil = "ZeigePROZESSOR";break;
                case "RAM" : 
                    $linkTeil = "ZeigeRAM";break;
                case "INDEX" : 
                    $linkTeil = "index";break;
                case "HOME" : 
                    $linkTeil = "home";break;
                case "ALL"  :
                    $linkTeil = "index2";break;
            }
        }

    ?>
    <form action=<?php echo "index.php?controller=artikel&action=" . $linkTeil; ?> method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>

</body>
</html>