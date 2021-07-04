@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-6/12 bg-white p-5">
      <h1 class="font-bold mb-5">Introducing Tasker! {{  auth()->check() }}</h1>

      <p>Tasker is a web app where admins can assign tasks to users and keep track of their progress!</p>
    </div>
  </div>
@endsection