<!DOCTYPE html>

<head>
    <title>Hardware</title>
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';
    setcookie("AktuelleSeite", "HOME", time() + 60 * 60 * 24 * 1);
    ?>

</head>

<body class="body">
    <!-- menu anzeigen -->
    <?php include "menu.php";?>

    <h1 align="Middle">Moin Meister!</h1>
    <h2 align="Middle">Was suchst du?</h2>
    
<br>
<br>
<br>

    <ul class = myMenu>
        <li><a href="index.php?controller=artikel&action=ZeigeRAM">RAM</li></a>
        <li><a href="index.php?controller=artikel&action=ZeigePROZESSOR">CPU</a></li>
        <li><a href="index.php?controller=artikel&action=ZeigeMAIN">Mainboard</a></li>
        <li><a href="index.php?controller=artikel&action=ZeigeGRAKA">Grafik Karten</a></li>
        <li><a href="index.php?controller=artikel&action=ZeigeCASE">Cases</a></li>
        <li><a href="index.php?controller=artikel&action=ZeigePLATTE">Festplatten</a></li>
        <li><a href="index.php?controller=artikel&action=ZeigeNETZTEIL">Netzteile</a></li>
    </ul>
    <form action='index.php?controller=artikel&action=index' method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>
</body>
</html>