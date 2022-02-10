@extends('layouts.plantilla')

@section('title','Create')

@section('content')
<h2 class="text-center">Crear post</h2>
<div class="continer d-flex justify-content-center">
    <form class="form border border-secondary text-start bg-light m-2 w-75" action="{{route('posts.store', $post)}}" method="post">
        @csrf

         
        <div class="form-group m-2">
            <label>Título<input class="form-control" type="text" name="titulo" value="{{ old('titulo'), $post->titulo}}" required></label>
        </div>

        <div class="form-group m-2">
            <label>Extracto<input class="form-control" type="text" name="extracto" value='{{ old('titulo'), $post->extracto}}'></label>
        </div>

        <div class="form-group m-2">
            <label>Descripcion:</label>
            <br>
            <textarea name="contenido" rows="2" required> 
                {{ old('titulo'), $post->contenido}}
            </textarea>
        </div>

        <div class="form-group m-2">
            <label>Caducable</label>
            <input type="checkbox" name="caducable" value="{{ old('caducable')==='true' ? 'checked=' .'"checked"': '' }}">
        </div>

        <div class="form-group m-2">
            <label>Comentable</label>
            <input type="checkbox" name="comentable" value="{{ old('comentable')==='true' ? 'checked=' .'"checked"': '' }}">
        </div>

        <select id="acceso" name="acceso">
            <option value="publico" @if (old('publico') === 'publico') selected @endif>Publico</option>
            <option value="privado" @if (old('privado') === 'privado') selected @endif>Privado</option>
        </select>

        <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id}}">
        <button type="submit" class="btn btn-success p-1 m-2">Create</button>
    </form>
</div>
@endsection 