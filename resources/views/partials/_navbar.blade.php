<nav class=" bg-blue-500">
  <ul class="flex justify-end text-white">
    <li class="m-5"><a href="{{ route('/') }}">Home</a></li>
    <li class="m-5"><a href="">Dashboard</a></li>
    <li class="m-5"><a href="">Tasks</a></li>
    <li class="m-5"><a href="">Users</a></li>
    <li class="m-5"><a href="">Login</a></li>
    <li class="m-5"><a href="{{ route('register') }}">Register</a></li>
    <li class="m-5"><a href="">Andy</a></li>
    <li class="m-5">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        
        <button>Logout</button>      
      </form>
    </li>
  </ul>
</nav>