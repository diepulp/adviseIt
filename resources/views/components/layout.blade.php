<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#c2e4ce",
                        },
                    },
                },
            };
        </script>
        <title>AdviseIt | Planning Tool</title>
    </head>
<body class="mb-48 mx-24">
    <nav class="flex justify-between items-center mb-4">
        <ul class="flex space-x-6 mr-6 text-lg">

{{-- If logged in.. --}}
          @auth
          <li>
            <span class="font-bold uppercase">
              Welcome, {{auth()->user()->name}}
            </span>
          </li>
          <li>
            <a href="/plans/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Plans</a>
          </li>
          <li>
            <form class="inline" method="POST" action="/logout">
              @csrf
              <button type="submit">
                <i class="fa-solid fa-door-closed"></i> Logout
              </button>
            </form>
          </li>
    {{-- Not logged in --}}
          @else
          <li>
            <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
          </li>
          <li>
            <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
          </li>
          @endauth
        </ul>
      </nav>
    {{-- Blade template --}}
    {{-- @yield('content') --}}
    {{-- Component --}}
    {{$slot}}
<x-flash-message></x-flash-message>
    
</body>
</html>