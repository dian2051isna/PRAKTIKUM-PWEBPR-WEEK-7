{{-- <nav class="flex gap-4 p-4 w-full bg-slate-400">
    <a href="/">Landing</a>
    <a href="/home">Homepage</a>
    @auth
        <a href="{{ route('logout') }}">Logout</a>
        @else
        <a href="/login">Login</a>
    @endauth
</nav>
 --}}

 <nav class="bg-blue-600 p-4">
    <ul class="flex space-x-4 text-white">
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
        
        @auth()
            <a href="{{ route ('logout')}}"></a>
            @else
        @endauth
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>
