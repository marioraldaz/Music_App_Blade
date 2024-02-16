@extends('layout')

@section('titulo', 'Add New Song')

@section('contenido')
    <form action="" method="post">
        <label for="nombre">Name:</label><br>
        <input type="text" id="titulo" name="nombre" /><br>

        <input type="submit" name="submit" value="Submit" />
    </form>
@endsection
