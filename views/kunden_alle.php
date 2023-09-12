<head>
    <title>Kunden</title>
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
    <h1>Kunden</h1>
    <h2>Hier ist eine Liste der verfügbaren Kunden</h2>
   
<?php 

    $kundenModel = new KundenModel();
    $kundenModel->getAllKundenAsTable();

?>
    <form action='index.php?controller=kunden&action=index' method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
</body>
</html>