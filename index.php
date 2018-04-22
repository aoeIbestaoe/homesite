<html>
    <head>
        <title>Start</title>
        <link rel="stylesheet" href="css/layout.css">
    </head>
    <body id="home">
        <div class="container">
            <div class="center">
                <h1>Welkom op onze site!</h1>
                <p>Log-in via onderstaand formulier</p>
                <form action="/php/login.php" method="post" class="login_form">
                    <table>
                        <tr>
                            <td>Naam</td>
                            <td><input class="inputfield" name="username" type="text" /></td>
                        </tr>
                        <tr>
                           <td>Wachtwoord</td>
                            <td><input class="inputfield" name="password" type="password" /></td> 
                        </tr>
                        <tr>
                           <td></td>
                            <td><input class="button" name="submit" type="submit"></td> 
                        </tr>
                    </table>

                </form>
            </div>
        </div>
        
    </body>
</html>
