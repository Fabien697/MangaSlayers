<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
    </head>
    <body>
        <header>
            <h1>Register</h1>
        </header>
        <main>
            <form action="login.php" method="post" required>
                <div>
                    <label>Genre:</label>
                    <br>
                    <select name="gender" id="gender">
                        <option value="M">Homme</option>
                        <option value="M">Femme</option>
                        <option value="Mx">Non-binaire</option>
                    </select>
                </div>
                <div>
                    <label>Nom:</label>
                    <br>
                    <input type="text" name="name" value="" required>
                </div>
                <div>
                    <label>Prénom:</label>
                    <br>
                    <input type="text" name="firstName" value="" required>
                </div>
                <div>
                    <label>Email:</label>
                    <br>
                    <input type="email" name="email" value="" required>
                </div>
                <div>
                    <label>Mot de passe:</label>
                    <br>
                    <input type="password" name="password" value="" required>
                </div>
                <div>
                    <label>Téléphone:</label>
                    <br>
                    <input type="tel" id="phone" name="phone"
                    pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}"
                    placeholder="(format: 00.00.00.00.00)" required>
                </div>
                <br>
                <input type="submit" name="submit" value="Valider">
            </form>
        </main>
    </body>
</html>
