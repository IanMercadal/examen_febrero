@extends('layouts.plantilla')

@section('title','Create')

@section('content')
<h2 class="text-center">Crear post</h2>
<div class="continer d-flex justify-content-center">
    <form class="form border border-secondary text-start bg-light m-2 w-75" action="{{route('posts.store', $post)}}" method="post">
        @csrf

        <div class="form-group m-2">
            <label>Título<input class="form-control" type="text" name="titulo" value="titulo" required></label>
        </div>

        <div class="form-group m-2">
            <label>Extracto<input class="form-control" type="text" name="extracto" value='extracto'></label>
        </div>

        <label>Founded: <br> <input type="date" class="form-control" name="fundado" value="fundado"></label>

        <div class="form-group m-2">
            <label>Descripcion:</label>
            <br>
            <textarea name="contenido" rows="2" required> </textarea>
        </div>

        <div class="form-group m-2">
            <label>Caducable</label>
            <input type="checkbox" name="caducable">
        </div>

        <div class="form-group m-2">
            <label>Comentable</label>
            <input type="checkbox" name="comentable">
        </div>


        <select id="acceso" name="acceso">
            <option value="publico">Publico</option>
            <option value="privado">Privado</option>
        </select>

        <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id}}">
        <button type="submit" class="btn btn-success p-1 m-2">Create</button>
    </form>
</div>
@endsection 