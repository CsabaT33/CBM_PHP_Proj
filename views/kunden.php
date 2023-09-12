<!DOCTYPE html>

<head>
    <title>Kunden</title>
    <!-- Bootstrap und CSS einbinden-->
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';?>
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
        <li ><a class="mystyle" href="index.php?controller=kunden&action=AllKunden">Alle Kunden anzeigen</a></li>
        <li><a class="mystyle" href="index.php?controller=kunden&action=insertKunden">Kunden einfügen</a></li>
        <li ><a float: right class="mystyle" href="index.php?controller=kunden&action=KundenWert">Kunden nach Wert</a></li>
    </div>
    <form action='index.php?controller=admin&action=index' method='post'>
         <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>  
</body>
</html>