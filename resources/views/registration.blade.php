<!DOCTYPE html>

<head>
    <meta charset="utf-8">


    <title>Regestrieren</title>


</head>

<body class="antialiased">
    <form action="/registered" method="post">
        @csrf
        <label for="fname">Vorname:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Nachname:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Passwort:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Abschicken">

    </form>
</body>

</html>
