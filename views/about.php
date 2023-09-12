<!DOCTYPE html>

<head>
    <title>About</title>
    <!-- Bootstrap CSS einbinden-->
    <link rel="stylesheet" href="helpers/css.css">
    <?php include 'helpers/bootstrap.php';?>
</head>

<body class="body">
    <!-- menu anzeigen -->
    <?php include 'menu.php';?>

    <h1>About</h1>
    <h3>
    erstellt von Csaba Török & Christian Schnaus
    </h3>
    <form action='index.php?controller=admin&action=index' method='post'>
        <input class="btn btn-dark" type='submit' value='Zurück'>
    </form>  
</body>
</html>