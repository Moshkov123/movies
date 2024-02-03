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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <style>
        .block {
            display: flex;
            justify-content: space-between;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .block-right {
            color: white;
            padding: 0.75rem;
            text-align: right;
        }

        @media (max-width: 12000000px)and (min-width: 1024px) {
            .grid-cols {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .block-right {
                color: white;
                padding: 0.75rem;
                text-align: right;
            }

            .text1 {
                font-size: 2.25rem;
                line-height: 2.5rem;
            }

            .text2 {
                font-size: 1.775rem;
                line-height: 2.25rem;
            }
        }

        @media (max-width: 1024px) and (min-width: 890px) {
            .grid-cols {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .text1 {
                font-size: 1.775rem;
                line-height: 2.25rem;
            }

            .text2 {
                font-size: 1.5rem;
                /* 24px */
                line-height: 2rem;
            }
        }

        @media screen and (min-width: 680px) {
            .container {
                flex-direction: row;
            }
        }

        @media (max-width: 890px) and (min-width: 640px) {
            .grid-cols {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .block-right {
                color: white;
                padding: 0.75rem;
                text-align: left;

            }

            .block {
                display: flex;
                flex-direction: column;

            }

            .text1 {
                font-size: 1.775rem;
                line-height: 2.25rem;
            }

            .text2 {
                font-size: 1.5rem;
                /* 24px */
                line-height: 2rem;
            }
        }

        @media (max-width: 640px) {
            .grid-cols {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            .block-right {
                color: white;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                text-align: left;
                font-size: 0.8rem;
                /* 20px */
                line-height: 1rem;
            }

            .text1 {
                font-size: 1.05rem;
                line-height: 1.5rem;
            }

            .block {
                display: flex;
                flex-direction: column;
                
            }

            .text2 {
                font-size: 1.05rem;
                /* 20px */
                line-height: 1.5rem;
                /* 28px */
            }
        }
    </style>
</head>

<body class="antialiased bg-gray-900">
    @if (Route::has('login'))
    @auth
    <x-nav />
    @endif
    @endif
    <div class="bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pl-2 pr-2 bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="m-5">
                    <img src="{{ asset('img/DD.jpg') }}" class="w-full">
                </div>
                <div class="block">
                    <div class="p-2 text-gray-900 text-gray-900">
                        <div class="bg-gray-800 text-white pl-5 pr-5 pb-2 pt-5 text-left" style="margin-top: -20px;">
                            <h1 class="text1" style="white-space: nowrap;">Сериал об истории Германии</h1>
                            <h2 class="text2" style="white-space: nowrap;">Немцы / Die Deutschen</h2>
                            <p style="white-space: nowrap;">Впервые на русском языке</p>
                        </div>
                    </div>
                    <div class="block-right">
                        <nobr>Перейти на <a class="color" style="color: #d55601;"
                                href="http://diedeutschen.zdf.de/">официальную страницу</a> <span
                                style="color:#556e8a;">(нем.)</span></nobr><br>
                        <nobr>Материалы для <a class="" style="color: #d55601;"
                                href="https://www.zdf.de/dokumentation/die-deutschen/lehrermaterialien-fuer-die-zdf-dokumentarreihe-die-deutschen-100.html">школьников</a>
                            <span style="color:#556e8a;">(нем.)</span>
                        </nobr><br>
                        <nobr>Сериал на сайте <a class="" style="color: #d55601;"
                                href="http://www.kinopoisk.ru/film/654570/">Kinopoisk</a> и <a class="acont-top"
                                style="color: #d55601;" href="http://www.imdb.com/title/tt1236350/">IMDb</a></nobr><br>
                        <nobr>Связаться с <a class="" style="color: #d55601;"
                                href="https://vk.com/diedeutschen">переводчиком</a></nobr><br>
                    </div>
                </div>
                <div class="flex justify-center gap-4 pb-5">
                    <a href="http://vk.com/ru_diedeutschen" class="relative inline-block rounded-lg overflow-hidden">
                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="w-24 h-12 sm:w-28 sm:h-12 flex items-center justify-center text-sm font-medium uppercase text-white transition duration-150 ease-in-out bg-gray-900 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                            style="background-color: #45668e">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path class="st0"
                                    d="M13.162 18.994c.609 0 .858-.406.851-.915-.031-1.917.714-2.949 2.059-1.604 1.488 1.488 1.796 2.519 3.603 2.519h3.2c.808 0 1.126-.26 1.126-.668 0-.863-1.421-2.386-2.625-3.504-1.686-1.565-1.765-1.602-.313-3.486 1.801-2.339 4.157-5.336 2.073-5.336h-3.981c-.772 0-.828.435-1.103 1.083-.995 2.347-2.886 5.387-3.604 4.922-.751-.485-.407-2.406-.35-5.261.015-.754.011-1.271-1.141-1.539-.629-.145-1.241-.205-1.809-.205-2.273 0-3.841.953-2.95 1.119 1.571.293 1.42 3.692 1.054 5.16-.638 2.556-3.036-2.024-4.035-4.305-.241-.548-.315-.974-1.175-.974h-3.255c-.492 0-.787.16-.787.516 0 .602 2.96 6.72 5.786 9.77 2.756 2.975 5.48 2.708 7.376 2.708z" />
                            </svg>
                        </button>
                    </a>
                    <a href="https://www.youtube.com/user/igakuz"
                        class="relative inline-block rounded-lg overflow-hidden">
                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="w-24 h-12 sm:w-28 sm:h-12 flex items-center justify-center text-sm font-medium uppercase text-white transition duration-150 ease-in-out bg-red-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                            style="background-color: #ff0000">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="text-white pl-5 pr-5">
                    <p class="sm:text-base md:text-lg lg:text-xl xl:text-2xl">Путешествие сквозь 1200&nbsp;лет немецкой
                        истории, с VIII до первой четверти XX&nbsp;века. 20&nbsp;красочных документально-игровых фильмов
                        (2&nbsp;сезона по 10&nbsp;серий) расскажут о главных личностях и событиях, оставивших свой след
                        в истории Германии и всей Европы: от Карла Великого до Карла Маркса и от церковной Реформации до
                        Первой мировой войны. Каждая серия посвящена одной исторической личности и показывает не только
                        её роль в прошлом, но и значение в настоящем.</p>
                    <p class="pt-5 pb-5 sm:text-base md:text-lg lg:text-xl xl:text-2xl">Сериал произведен Вторым каналом
                        немецкого телевидения (<a style="color: #d55601;" href="https://www.zdf.de/">ZDF</a>) и впервые
                        публикуется на русском языке. Перевод доступен в двух вариантах: закадровое озвучание или
                        субтитры специально для изучающих немецкий язык. Перевод этого сериала — любительский
                        некоммерческий проект. Озвучание частично сделано на пожертвования зрителей Ютуб-канала&nbsp;<a
                            style="color: #d55601;" href="https://www.youtube.com/user/igakuz">igakuz</a>.</p>
                </div>
                <div class="container gap-2 p-2">
                    <div class="text-white sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Смотреть с:
                    </div>
                    <div class="flex gap-2">
                        <button onclick="togglevoiceover()" id="voiceover"
                          style="background: rgb(66, 66, 66)"  class="text-white focus:text-white font-bold py-2 px-5 rounded transition-colors">
                            Озвучкой
                        </button>
                        <button onclick="toggleSubtitles()" id="subtitles"
                        style="background: #7f7f8f" class="text-white focus:text-white font-bold py-2 px-5 rounded transition-colors">
                            Субтитрами
                        </button>
                    </div>
                </div>
                <div class="container gap-2 p-2">
                    <div class=" text-white sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                        Сортировать по:</div>
                    <div class="flex gap-2">
                        <button onclick="season()"  id="season"
                        style="background: rgb(66, 66, 66)"  class="text-white focus:text-white font-bold py-2 px-5 rounded transition-colors">
                            Cезонам</button>
                        <button onclick="chronology()"  id="chronology"
                        style="background: #7f7f8f"  class="text-white focus:text-white font-bold py-2 px-5 rounded transition-colors">
                            Хронологии</button>
                    </div>

                </div>
                <div id="content">
                    @foreach($seasons as $season)
                    <x-seasons :season="$season" :movies="$movies" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var number = 0;
    var subtitles = false;
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
        var season = document.getElementById('season');
    var chronology = document.getElementById('chronology');
    season.style.backgroundColor = '#7f7f8f';
    chronology.style.backgroundColor = 'rgb(66, 66, 66)';
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
        var season = document.getElementById('season');
    var chronology = document.getElementById('chronology');
   
    season.style.backgroundColor = 'rgb(66, 66, 66)';
    chronology.style.backgroundColor = '#7f7f8f';
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
        subtitles = true;
        var voiceover = document.getElementById('voiceover');
    var subtitle = document.getElementById('subtitles');
    voiceover.style.backgroundColor = '#7f7f8f';
    subtitle.style.backgroundColor = 'rgb(66, 66, 66)';
        if (number === 0) {
            season();
        } else {
            chronology();
        }
    }
    function togglevoiceover() {
        subtitles = false;
        var voiceover = document.getElementById('voiceover');
    var subtitle = document.getElementById('subtitles');
    voiceover.style.backgroundColor = 'rgb(66, 66, 66)';
    subtitle.style.backgroundColor = '#7f7f8f';
        if (number === 0) {
            season();
        } else {
            chronology();
        }
    }
</script>

</html>