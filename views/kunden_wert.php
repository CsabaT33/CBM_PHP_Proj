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
    <h1 align="Middle">Frechdachs!!!</h1>
    <h2 align="Middle">Sowas machen wir nicht!</h2>
    <br>
    <br>
    <form action='index.php?controller=kunden&action=index' method='post'>
         <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>  

</body>

</html>