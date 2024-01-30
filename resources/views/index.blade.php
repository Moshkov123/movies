<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Die Deutschen</title>
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
    @if (Route::has('login'))
    @auth
    <x-nav />
    @else
    <x-header />
    @endif
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-center gap-4">
                        <button onclick="toggleSubtitles()" id="Subtitles"
                            class="bg-blue-200 hover:bg-blue-250 focus:outline-none focus:bg-blue-500 focus:ring-2 focus:ring-blue-500 focus:text-white font-bold py-2 px-5 rounded transition-colors">С
                            Озвучкой</button>
                    </div>
                    <button onclick="season()"
                        class="bg-blue-200 hover:bg-blue-250 focus:outline-none focus:bg-blue-500  focus:ring-2 focus:ring-blue-500 focus:text-white font-bold py-2 px-5 rounded transition-colors">По
                        сезонам</button>
                    <button onclick="chronology()"
                        class="bg-blue-200 hover:bg-blue-250 focus:outline-none focus:bg-blue-500  focus:ring-2 focus:ring-blue-500 focus:text-white font-bold py-2 px-5 rounded transition-colors">По
                        Хронологии</button>
                    <div id="content">

                        @foreach($seasons as $season)
                        <x-seasons :season="$season" :movies="$movies" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var number = 0r subtitles = false;
    function toggleEpisodes(god) {
        var episodes = document.getElementById('episodes_' + god);
        var arrow = document.querySelector('.season-header[onclick="toggleEpisodes(\'' + god + '\')"] .arrow');
        if (episodes.style.display === "none") {
            episodes.style.display = "block";
            arrow.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15" fill="currentColor" class="h-5 w-5">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>`; // Change the arrow to the second SVG
        } else {
            episodes.style.display = "none";
            arrow.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15" fill="currentColor" class="h-5 w-5" style="transform: scaleY(-1);">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>`; // Change the arrow to the first SVG
        }
    }
    function chronology() {
        number = 1;
        if (subtitles) {
            document.getElementById('content').innerHTML = `  @foreach($years as $year)
      <x-chronologySubtitles :year="$year" :chronologies="$chronologies" :allchronology="$allchronology" />
    @endforeach`;
        }
        else {
            document.getElementById('content').innerHTML = `  @foreach($years as $year)
      <x-chronology  :year="$year" :chronologies="$chronologies" :allchronology="$allchronology" />
    @endforeach`;
        };
    }
    function season() {
        number = 0;
        if (subtitles) {
            document.getElementById('content').innerHTML = ` @foreach($seasons as $season)
                <x-movieSubtitles  :season="$season" :movies="$movies" />
                @endforeach`;
        }
        else {
            document.getElementById('content').innerHTML = `@foreach($seasons as $season)
                <x-seasons :season="$season" :movies="$movies" />
                @endforeach`;
        };
    }
    function toggleSubtitles() {
        subtitles = !subtitles;
        if (subtitles) {
            document.getElementById('Subtitles').innerText = "С Субтитрами"
        } else {
            document.getElementById('Subtitles').innerText = "С Озвучкой"
        }

        if (number === 0) {
            season();
        } else {
            chronology();
        }
    }
</script>

</html>