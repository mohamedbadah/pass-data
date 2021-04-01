<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>my Name is a {{$name}}</h1>
<h1>my age {{$age}}</h1>
<form action="sent" method="post">
    @csrf;
    <input type="text" name="myName">
    <input type='submit' value="sent">
</form>
</body>
</html>
