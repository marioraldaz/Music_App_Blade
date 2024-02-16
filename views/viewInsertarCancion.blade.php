@extends('layout')

@section('titulo', 'Add New Song')

@section('contenido')
    <form action="" method="post">
        <label for="titulo">Titulo:</label><br>
        <input type="text" id="titulo" name="titulo"><br>

        <label for="idgenero">Género:</label><br>
        <select id="idgenero" name="idgenero">
            <option value="">Selecciona Género</option>
            @foreach ($generos as $genero)
                <option value="{{ $genero['id'] }}">{{ $genero['nombre'] }}</option>
            @endforeach
        </select><br>

        <label for="idinterprete">interprete:</label><br>

        <select id="idinterprete" name="idinterprete">
            <option value="">Selecciona interprete</option>
            @foreach ($interpretes as $interprete)
                <option value="{{ $interprete['id'] }}">{{ $interprete['nombre'] }}</option>
            @endforeach
        </select><br>

        <input type="submit" name="submit" value="Submit">
    </form>
@endsection
