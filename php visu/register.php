<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" href="../css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Memento</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container">
        <div class="board">
                <h2 class="main_title">register</h2>
                <form method="POST" enctype='multipart/form-data'>
                    <div class="register_display">
                        <div class="register_cate">
                            <label for="pseudo">Pseudo</label>
                            <input type="pseudo" placeholder="pseudo" name="pseudo" id="pseudo" minlength="5" maxlength ="12" autofocus></input>
                        </div>
                        <div class="register_cate">
                            <label for="email">E-Mail</label>
                            <input type="email" placeholder="email" name="email" id="email"></input>                        
                        </div>
                        <div class="register_cate">
                            <label for="password">Password</label>
                            <td><input type="password" placeholder="password" name="password" id="password" minlength="8"></input>                        </div>
                        <div class="register_cate">
                            <label for="conf_pass">Password confirmation</label>
                            <input type="password" placeholder="correct_password" name="correct_password" id="correct_password" minlength="8"></input>
                        </div>
                    <button type="submit" name="submit" value="Login">Login</button>
                </form>
                </div> 
            </div>
        </div>
</body>
</html>