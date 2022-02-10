@extends('layouts.plantilla')
@section('title','Index')
    
@section('content')
<h1 class="text-center">{{__('Centers')}}</h1>

<div class="container">
    <table class="table table-dark">
        <thead>
            <p>{{Auth::user()->user_role}}</p>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Posts</th>
                <th scope="col">Fecha</th>
                <th>
                    <button class="btn btn-primary"><a class="text-white" href="{{route('posts.create')}}">@lang('Create')</a></button>
                    
                </th>      
            </tr>
        </thead>
        <tbody>

            @foreach($posts as $post)
            <tr class="text-center">
                <td>{{ $post->id}}</td>
                <td>{{ $post->titulo}}</td>
                <td>{{ $post->extracto}}</td>
                <td><button class="btn btn-primary"><a class="text-white" href="{{route('posts.edit', $post->id)}}">@lang('Edit')</a></button></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection