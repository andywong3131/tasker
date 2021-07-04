<nav class=" bg-blue-500">
  <ul class="flex justify-end text-white">
    <li class="m-5"><a href="{{ route('/') }}">Home</a></li>
    <li class="m-5"><a href="">Dashboard</a></li>
    <li class="m-5"><a href="">Tasks</a></li>
    <li class="m-5"><a href="">Users</a></li>
    
    @guest
      <li class="m-5"><a href="{{ route('login') }}">Login</a></li>
      <li class="m-5"><a href="{{ route('register') }}">Register</a></li>
    @endguest

    @auth
      <li class="m-5">{{ auth()->user()->name }}</li>
      <li class="m-5">
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          
          <button>Logout</button>      
        </form>
      </li>
    @endauth
  </ul>
</nav>