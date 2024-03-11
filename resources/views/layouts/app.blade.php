<body>
    @include ('layouts.components.navbar_2')
    @include ('layouts.components.navbar_principal')
    <main>
        <div>
            @yield('content')
        </div>
    </main>
    @include('layouts.components.footer')
</body>