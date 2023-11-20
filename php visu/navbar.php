<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" href="../css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body>
<!-- ce sera ici un if si t'es déconnecté.e -->
    <nav>
        <div class="nav"><a href="login.php">LOGIN</a> <a href="register.php">REGISTER</a></div>   
    </nav>

<!-- et ici un if si t'es connecté.e -->
    <nav>
        <div class="nav"><a href="login.php">LOGOUT</a>   
    </nav>
</body>
</html>