<!DOCTYPE html>

<head>
    <meta charset="utf-8">


    <title>Post</title>


</head>

<body class="antialiased">
    <form action="/abgegeben" method="post">
        @csrf
        <label for="date">Datum</label><br>
        <input type="datetime-local" id="date" name="date"><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="text">Text:</label>
        <textarea rows="rows" cols="cols" name="post"> Dein Post hier... </textarea>
        <input type="submit" value="Abschicken">

    </form>
</body>

</html>
