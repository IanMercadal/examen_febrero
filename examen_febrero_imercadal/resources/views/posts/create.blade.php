@extends('layouts.plantilla')

@section('title','Crear')
  
@section('content')
<h2 class="text-center">Crear post</h2>
<div class="continer d-flex justify-content-center">
    <form class="form border border-secondary text-start bg-light m-2 w-75" action="{{route('posts.store', $post)}}" method="post">
        @csrf

        @foreach ($errors->all() as $error)
        <ul>
            <li class="text-danger">
                {{ $error }}
            </li>
        </ul>
        <br />
        @endforeach

        <div class="form-group m-2">
            <label>@lang('Titulo')<br> <input class="form-control" type="text" name="titulo"
                    value="{{ old('titulo'), $post->titulo}}" required></label>
            @error('titulo')
            <br>
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
        </div>

        <div class="form-group m-2">
            <label>@lang('Extracto')<br> <input class="form-control" type="text" name="extracto"
                    value="{{ old('extracto'), $post->extracto}}" required></label>
            @error('extracto')
            <br>
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
        </div>

        <div class="form-group m-2">
            <label>@lang('Contenido')<br> <input class="form-control" type="text" name="contenido"
                    value="{{ old('contenido'), $post->contenido}}" required></label>
            @error('contenido')
            <br>
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
        </div>


        <div class="form-group m-2">
            <label>@lang('Caducable'):</label>

            <input type="checkbox" name="caducable" {{ old('caducable')==='true' ? 'checked=' .'"checked"' : ''
                }}>

            @error('caducable')
            <br>
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
        </div>

        <div class="form-group m-2">
            <label>@lang('Comentable'):</label>

            <input type="checkbox" name="comentable" {{ old('comentable')==='true' ? 'checked=' .'"checked"'
                : '' }}>

            @error('comentable')
            <br>
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
        </div>

        <div class="form-group m-2">
            <label>@lang('Acceso'):</label>

            <select id="acceso" name="acceso">
                <option value="publico">Publico</option>
                <option value="privado">Privado</option>
            </select>

            @error('acceso')
            <br>
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
        </div>

        
        <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id}}">
        <button type="submit" class="btn btn-success p-1 m-2">Create</button>
    </form>
</div>
@endsection 