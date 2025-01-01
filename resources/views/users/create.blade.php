@extends('layouts.app')
@section('content')
  <h1>Cadastro</h1>
  {{-- {{$users}} --}}
    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{old('name')}}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" value="{{old('password')}}">
        </div>
        <div>
            <label for="">Avatar</label>
            <input type="file" name="avatar" id="avatar">

        </div>
        <button type="submit">Cadastrar</button>
    </form>
@endsection

@section('title', 'Cadastro')
