<!DOCTYPE html>

<head>
    <title>Admin Übersicht</title>
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
        <li ><a class="mystyle" href="index.php?controller=artikel&action=index">Artikel</a></li>
        <li ><a float: right class="mystyle" href="index.php?controller=kunden&action=index">Kunden</a></li>
    </div>



</body>

</html>