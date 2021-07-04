@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-4/12 bg-white p-5">
      @if (session('message'))
        <div class="p-5 bg-red-500 text-white mb-5 w-full text-center">
          {{ session('message') }}
        </div>
      @endif

      <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="mb-5">
          <label for="email" class="sr-only">Email</label>

          <input type="text" name="email" id="email" class="p-5 bg-gray-100 rounded-lg border-2 w-full  @error('email') border-red-500 @enderror" placeholder="Email" value="{{ old('email') }}">

          @error('email')
            <div class="text-red-500">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="mb-5">
          <label for="password" class="sr-only">Password</label>

          <input type="text" name="password" id="password" class="p-5 bg-gray-100 rounded-lg border-2 w-full  @error('password') border-red-500 @enderror" placeholder="Password">

          @error('password')
            <div class="text-red-500">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-5">
          <input type="checkbox" name="remember" id="remember">
          <label for="remember">Remember Me</label>
        </div>

        <button class="p-5 bg-blue-500 font-bold text-white w-full rounded-lg">Login</button>
      </form>
    </div>
  </div>
@endsection