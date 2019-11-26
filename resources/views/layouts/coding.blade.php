@extends("layouts.app")

@section("main")
    <div class="container blue-background">
        <header class="blue">
            <div class="header-title blue">
                <h1>Java Data Structure and Algorithm</h1>
            </div>
            @include("components.coding_menu_bar")
        </header>
        <main>
            @yield("content")
        </main>
    </div>
@endsection