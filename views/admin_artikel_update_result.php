<?php
        $artikelModel = new ArtikelModel();
        $artikelModel->updateArtikel();
?>
<!DOCTYPE html>

<head>
    <title>Artikel einfügen - Resultat</title>
    
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';?>
</head>

<body class="body">
    <!-- menu anzeigen -->
    <?php include "menu.php";?>

    <br>
    <h1>Artikel ändern</h1>
    <br>
    <ul>Das hier wurde eingetragen:</ul>
<?php
        $name = $_POST["aname"];
        $artikelModel = new ArtikelModel();
        $artikel = $artikelModel->getArtikelByName($name);
        echo '<table class="table table-hover">';
        echo "<td>ID: </td>";
        echo "<td>Name:</td>";
        echo "<td>Kategorie:</td>";
        echo "<td>Beschreibung:</td>";
        echo "<td>Preis:</td>";
        echo "</td>";
    
        echo "<tr>";
        echo "<td>".$artikel['aid']."</td>";
        echo "<td>".$artikel['aname']."</td>";
        echo "<td>".$artikel['kategorie']."</td>"; 
        echo "<td>".$artikel['beschreibung']."</td>";
        echo "<td>".$artikel['preis']."</td>";
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
                case "ALL" : 
                    $linkTeil = "index2";break;
            }
        }

    ?>
    <form action=<?php echo "index.php?controller=artikel&action=" . $linkTeil; ?> method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>
</body>
</html>