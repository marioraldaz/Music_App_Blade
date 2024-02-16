@extends('layout')

@section('titulo', 'Añadir Nuevo Interprete')

@section('contenido')
    <form action="" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
@endsection
