<!DOCTYPE html>

<head>
    <meta charset="utf-8">


    <title>Anmeldung</title>


</head>

<body class="antialiased">
    <form action="/angemeldet" method="post">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Passwort:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Abschicken">

    </form>
</body>

</html>
