@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-4/12 bg-white p-5">
      <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="mb-5">
          <label for="name" class="sr-only">Name</label>

          <input type="text" name="name" id="name" class="p-5 bg-gray-100 rounded-lg border-2 w-full @error('name') border-red-500 @enderror" placeholder="Name" value="{{ old('name') }}">

          @error('name')
            <div class="text-red-500">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-5">
          <label for="email" class="sr-only">Email</label>

          <input type="text" name="email" id="email" class="p-5 bg-gray-100 rounded-lg border-2 w-full  @error('email') border-red-500 @enderror" placeholder="Email" value="{{ old('email') }}">

          @error('email')
            <div class="text-red-500">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="mb-5">
          <label for="username" class="sr-only">Username</label>

          <input type="text" name="username" id="username" class="p-5 bg-gray-100 rounded-lg border-2 w-full  @error('username') border-red-500 @enderror" placeholder="Username" value="{{ old('username') }}">

          @error('username')
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
          <label for="password_confirmation" class="sr-only">Confirm Password</label>

          <input type="text" name="password_confirmation" id="password_confirmation" class="p-5 bg-gray-100 rounded-lg border-2 w-full" placeholder="Confirm Password">
        </div>
        
        <button class="p-5 bg-blue-500 font-bold text-white w-full rounded-lg">Register</button>
      </form>
    </div>
  </div>
@endsection