<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2> My name is {{$name}} </h2>
        <form action="send" method="POST">  
            @csrf
            Name:
        <input type="text" name="myName" id="myName">
        <input type="submit" value="ok">
    </form>
</body>
</html>