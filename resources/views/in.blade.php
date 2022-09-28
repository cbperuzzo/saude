<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/out')}}" method="get">
        <input type="text" name="nome" placeholder="nome" >
        <input type="text" name="idade" placeholder="idade" >
        <input type="text" name="hpnoite" placeholder="horas dormidas p/ noite">
        <input type="text" name="altura" placeholder="altura em metros" >
        <input type="text" name="kg" placeholder="kilos">
        <input type="submit" value="enviar">
    <form>
</body>
</html>