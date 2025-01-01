@extends('layouts.app')
@section('content')
  <h1>User</h1>
@if ($user->id === 1)
  <p>Admin User</p>

@endif
  {{$user->name}}
  @endsection
