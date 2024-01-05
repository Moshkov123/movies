<div class="relative bg-gray-200 rounded-lg p-4">
    <p class="text-sm sm:text-base md:text-lg font-extrabold w-full cursor-pointer">Эпизод {{ $movie->number }} Суб</p>
    <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden" style="padding-top: 56.25%">
        <iframe class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full" src="{{ $movie->subtitles }}" frameborder="0" allowfullscreen=""></iframe>
    </div>
    <div class="style-scope ytd-watch-metadata">
        <p class="text-base sm:text-lg md:text-xl w-full cursor-pointer overflow-hidden" style="max-height: 3.5em;">{{ $movie->title_ru }}</p>
        <p class="text-base sm:text-lg md:text-xl w-full cursor-pointer overflow-hidden" style="max-height: 3.5em;">{{ $movie->title_de }}</p>
    </div>
</div>