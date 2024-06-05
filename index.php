<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            font-family: 'forte', cursive;
        }
        form {
            max-width: 300px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form b {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"],button {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover,button {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Connexion</h1>
    <form action="auth.php" method="post">
        <b>Email</b>
        <input type="email" name="email" class="form-control" required>
        <b>Password</b>
        <input type="password" name="password" class="form-control" required>
        <input type="submit" value="Se connecter">
        <a href="inscription.php"><button type="button">S'Inscrire</button></a>
        <input type="reset" value="Annuler">
    </form>
</body>
</html>
