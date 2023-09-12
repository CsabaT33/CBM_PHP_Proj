<head>
    <title>Artikel</title>
    <!-- Bootstrap CSS einbinden -->
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';
    setcookie("AktuelleSeite", "ALL", time() + 60 * 60 * 24 * 1);
    ?>
</head>

<body class="body">
    <!-- menu anzeigen -->
    <?php include "menu.php";?>
    
    <br>
    <h1>Artikel</h1>
    <h2>Hier ist eine Liste der verfügbaren Artikel</h2>
   
    <?php //tabellenerstellung für artikel
   
    $artikelModel = new ArtikelModel();
    $artikelModel->getAllArtikelAsTable();

?>
    <form action='index.php?controller=artikel&action=index' method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
    </form> 
</body>
</html>