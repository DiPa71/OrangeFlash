<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OrangeFlash</title> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css?v=6">
    <link rel="shortcut icon" href="img/icon.png">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>

<header>
        <div class="Logo">
            <img width="auto" height="auto" src="img/logo22.png">
        </div>
        <nav class="">
            <a href="pkgl.php">Lista de paquetes</a>
            <a href="Trabajador.php">Administrar paquetes</a>
            <a href="is.php"><?php echo $_SESSION['nombre'] ?></a>
        </nav>
</header>