<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        @media (max-width: 12000000px)and (min-width: 1024px) {
            .grid-cols {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 1024px) and (min-width: 640px) {
            .grid-cols {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 640px) {
            .grid-cols {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
        }
    </style>
</head>

<body class="antialiased">
    <nav class="relative flex w-full flex-wrap items-center justify-between bg-[#FBFBFB] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:py-4"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <div>

            </div>

            <!-- Hamburger button for mobile view -->
            @if (Route::has('login'))
            <div class="header-fixed right-0 top-0 text-right">
                @auth
                <a href="{{ url('/movies') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">movies</a>
                @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
        </div>
        </div>
    </nav>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @foreach($seasons as $season)
          <div class="bg-blue-200 p-4 rounded-lg mt-5 mb-5 text-center font-bold text-2xl">
            Сезон {{ $season }}
          </div>


          <div class="grid grid-cols gap-2">
            @foreach($movies as $movie)
            @if($movie->season === $season)
            <div class="relative bg-gray-200 rounded-lg p-4">
              <p class="text-sm sm:text-base md:text-lg font-extrabold w-full cursor-pointer">Эпизод {{
                $movie->number }}</p>
              <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden"
                style="padding-top: 56.25%">
                <iframe class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"
                  src="{{ $movie->video }}" frameborder="0" allowfullscreen=""></iframe>
              </div>
              <div class="style-scope ytd-watch-metadata">
                <p class="text-base sm:text-lg md:text-xl w-full cursor-pointer overflow-hidden"
                  style="max-height: 3.5em;">{{ $movie->title_ru }}</p>
                <p class="text-base sm:text-lg md:text-xl w-full cursor-pointer overflow-hidden"
                  style="max-height: 3.5em;">{{ $movie->title_de }}</p>
              </div>
              <!-- <p class="descr">{{ $movie->description }}</p> -->
            </div>
            @endif
            @endforeach
          </div>
          @endforeach
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</body>

</html>