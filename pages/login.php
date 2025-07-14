<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(to right, #dff6f0, #b9e4d6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            background-color: white;
            border-radius: 15px;
            padding: 30px 40px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-card h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #007b5e;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-custom {
            background-color: #007b5e;
            color: white;
            border-radius: 10px;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: #005f45;
        }

        .create-account {
            margin-top: 20px;
            text-align: center;
        }

        .create-account input[type="submit"] {
            background: none;
            border: none;
            color: #007b5e;
            text-decoration: underline;
            cursor: pointer;
        }

        .create-account input[type="submit"]:hover {
            color: #005f45;
        }

        .alert {
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <form action="traitement_login.php" method="post">
            <h2>Connexion</h2>

            <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input type="email" name="mail" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="mdp" id="password" class="form-control" required>
            </div>

            <input type="submit" name="connect" value="Se connecter" class="btn btn-custom mb-2">

            <?php if (isset($_GET['erreur'])) { ?>
                <div class="alert alert-danger" role="alert">
                    Email ou mot de passe incorrect.
                </div>
            <?php } ?>
        </form>

        <div class="create-account">
            <form action="inscription.php" method="post">
                <input type="submit" name="creer" value="Créer un compte">
            </form>
        </div>
    </div>

</body>
</html>