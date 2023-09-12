<head>
    <title>Artikel</title>
    
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';
    setcookie("AktuelleSeite", "GRAKA", time() + 60 * 60 * 24 * 1);
    ?>
</head>

<body class="body">
    <!-- menu anzeigen -->
    <?php include "menu.php";?>

    <br>
    <h1>Grafikkarten</h1>
    <br>
    <h2>Hier ist eine Liste der verfügbaren Artikel:</h2>
   
    <?php //tabellenerstellung für artikel
    $artikelModel = new ArtikelModel();
    $artikelModel->getArtikelByKategorie("Grafikkarte");
    ?>

    <form action='index.php?controller=home&action=index' method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>
</body>
</html>