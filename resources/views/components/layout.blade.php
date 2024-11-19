<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lara Job</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,500;1,500&display=swap"
          rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="font-hanken-grotesk">
<div>
    <nav class="flex items-center justify-between bg-black/5 py-4 px-12">
        <a href="#" class="flex items-center gap-1">
            <img src="{{Vite::asset("resources/images/case.png")}}" class="w-10 h-10" alt="site logo"/>
            <h2 class="text-xl"><strong>Lara</strong> Job</h2>
        </a>

        <div class="flex items-center gap-4">
            <x-nav-link href="/" :active="request()->is('/')">Jobs</x-nav-link>
            <x-nav-link href="/" :active="request()->is('')">Career</x-nav-link>
            <x-nav-link href="/">Salaries</x-nav-link>
            <x-nav-link href="/">Companies</x-nav-link>
        </div>

        <div>
            @auth
                <div class="flex items-center gap-6">
                    <a href="/jobs/create" class="flex items-center gap-1">
                        <x-cube-small/>
                        <p>Post a Job</p>
                    </a>

                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="hover:bg-red-500 hover:text-white px-3 py-1 rounded-2xl transition-colors duration-200">Logout</button>
                    </form>

                </div>



            @endauth

            @guest
                <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
            @endguest
        </div>


    </nav>
    <main class="max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>
