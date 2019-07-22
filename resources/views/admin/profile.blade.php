@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="container d-flex justify-content-center">
  <div class="card">
    @foreach($usersDetails as $userDetails)
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{$userDetails->name}}</h3>
      <h3 class="card-title">{{$userDetails->surname}}</h3>
      <h5 class="card-title">{{$userDetail->address}}</h5>
    </div>
    <div class="card-body">
      <label for="profile_img">Immagine del profilo</label>
      <input type="file" name="profile_img" class="form-control-file">
    </div>
  </div>
</div>
@endsection
