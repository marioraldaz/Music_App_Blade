@extends('layout')

@section('titulo', 'Add New Song')

@section('contenido')
    <form action="" method="post">
        <label for="titulo">Title:</label><br>
        <input type="text" id="titulo" name="titulo"><br>

        <label for="archivo">File:</label><br>
        <input type="text" id="archivo" name="archivo"><br>

        <label for="imagen">Image:</label><br>
        <input type="text" id="imagen" name="imagen"><br>

        <label for="idgenero">Genre ID:</label><br>
        <input type="text" id="idgenero" name="idgenero"><br>

        <label for="idinterprete">Interpreter ID:</label><br>
        <input type="text" id="idinterprete" name="idinterprete"><br><br>

        <input type="submit" value="Submit">
    </form>
@endsection
