@extends("layouts.app")

@section("main")
    <div class="container">
        <header>
            <div class="header-title">
                <h1>Java Data Structure and Algorithm</h1>
            </div>
            @include("components.menu_bar")
        </header>
        <main>
            @yield("content")
        </main>
    </div>
@endsection