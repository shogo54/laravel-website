@extends("layouts.learn")

@section("content")
    <div class="flex-center">
        @if (Route::has("login"))
            <div class="top-right links">
                @auth
                    <a href="{{ url("/home") }}">Home</a>
                @else
                    <a href="{{ route("login") }}">Login</a>

                    @if (Route::has("register"))
                        <a href="{{ route("register") }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="welcome">
            <div class="welcome-to m-b-md">
                Welcome to
            </div>
            <div class="title m-b-md">
                Java Data Structure and Algorithm
            </div>

            <div class="news">
                <h3>New Contents in Learning Pages</h3>
                <div class="box">
                    <ul>
                        <li><a href="/data-structure/list"><p>Overview of List</p></a></li>
                        <li><a href="/data-structure/array"><p>Array</p></a></li>
                    </ul>
                </div>

                <h3>New Contents in Coding Pages</h3>
                <div class="box blue">
                    <ul>
                        <li><a><p>Overview of List</p></a></li>
                        <li><a><p>Practice Page</p></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection