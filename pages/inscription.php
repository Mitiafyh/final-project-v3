<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
        body.inscription-background {
            background: linear-gradient(to right, #dff6f0, #b9e4d6);

            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .inscription-wrapper {
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        .inscription-card {
            background-color: #fff;
            border-radius: 12px;
            padding: 40px 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .inscription-card .subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: #343a40;
            margin-bottom: 25px;
        }

        .inscription-card label {
            margin-top: 10px;
            font-weight: 500;
            display: block;
            color: #495057;
        }

        .inscription-card input,
        .inscription-card select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .inscription-card input[type="submit"] {
            background-color: #007b5e;
            border: none;
            border-radius: 8px;
            padding: 10px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .inscription-card input[type="submit"]:hover {
            background-color: #005f45;
            
        }

        .footer {
            text-align: center;
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 40px;
        }

        .footer-links {
            margin-top: 10px;
        }

        .footer-links a {
            margin: 0 10px;
            color: #0d6efd;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="inscription-background">

    <div class="inscription-wrapper">
        <form action="traitement_login.php" method="post" class="inscription-card">
            <p class="subtitle">Créez votre compte gratuitement</p>

            <label>Nom</label>
            <input type="text" name="nom" required>

            <label>Email</label>
            <input type="email" name="mail" required>

            <label>Mot de passe</label>
            <input type="password" name="mdp" required>

            <label>Genre</label>
            <select name="genre" required>
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
            </select>

            <label>Date de naissance</label>
            <input type="date" name="dtn" required>

            <label>Ville</label>
            <input type="text" name="ville" required>

            <input type="submit" value="Créer mon compte">
        </form>
    </div>

    <!-- Footer (optionnel) -->
    <!--
    <footer class="footer">
        <p>&copy; 2025 — On vous souhaite la bienvenue !</p>
        <div class="footer-links">
            <a href="#">Confidentialité</a>
            <a href="#">Conditions</a>
            <a href="#">Support</a>
        </div>
    </footer>
    -->

</body>
</html>