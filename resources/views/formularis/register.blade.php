@extends('layouts.plantilla')

@section('title','Home')

@section('content')
<h1>Benvingut al formulari Login</h1><br>

<form action="{{route('register.storage')}}" method="POST">
    @csrf

    <label for="name">Nom:</label><br>
    <input type="text" id="name" name="name" value="{{old("name")}}"><br>
    @error('name')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="{{old("email")}}"><br>
    @error('email')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <label for="password">Contrasenya:</label><br>
    <input type="password" id="password" name="password"><br>
    @error('password')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <label for="passwordC">ValidarContrasenya :</label><br>
    <input type="password" id="passwordC" name="passwordC"><br>
    @error('passwordC')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <button type="submit">Register</button>
  </form>
@endsection