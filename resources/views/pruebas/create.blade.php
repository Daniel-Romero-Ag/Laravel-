@extends('layout.app')
@section('title','Prueba en el titulo')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<h1>esta es una pagina chida</h1>
<div class="container">
   <form class="form-group" method="GET" action="/prueba">
   @csrf 
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
   </form>
</div>
    <p>hola desde un create</p>
</body>
</html>
@endsection