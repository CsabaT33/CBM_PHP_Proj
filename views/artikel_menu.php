<!DOCTYPE html>

<head>
    <title>Artikel Übersicht</title>
    <!-- Bootstrap CSS einbinden-->
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php'; 
    setcookie("AktuelleSeite", "INDEX", time() + 60 * 60 * 24 * 1);?>
</head>
<body class="body">

    <!-- menu anzeigen -->
    <?php include "menu.php"; ?>
    
    <br>
    <h1 align="Middle">Moin Meister!</h1>
    <h2 align="Middle">Was soll gemacht werden?</h2>
    
<br>
<br>
<br>


    <div class="myMenu">
        <li ><a class="mystyle" href="index.php?controller=artikel&action=index2">Alle Artikel anzeigen</a></li>
        <li><a class="mystyle" href="index.php?controller=artikel&action=ArtikelInsert">Artikel einfügen</a></li>
        <li ><a float: right class="mystyle" href="index.php?controller=home&action=index">Artikel nach Kategorie</a></li>
    </div>
    <form action='index.php?controller=admin&action=index' method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
    </form> 
</body>
</html>