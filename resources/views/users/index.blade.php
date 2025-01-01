@extends('layouts.app')
@section('content')
  <h1>Users</h1>
  {{-- {{$users}} --}}
@foreach ($users as $user)
    <p>{{$user->name}}
    <br /> {{$user->email}}
    </p>
@endforeach
@endsection

@section('title', 'Users')
