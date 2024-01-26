<div class="bg-blue-200 p-4 rounded-lg mt-5 mb-5 text-center font-bold text-2xl season-header"
    onclick="toggleEpisodes('{{   $year }}')" style="user-select: none;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <span style="user-select: none;"> {{ $year }}</span>
        <div style="user-select: none;" class="arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15" fill="currentColor" class="h-5 w-5"
                style="transform: scaleY(-1);">
                <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </div>
</div>

<div id="episodes_{{  $year }}" style="display: none;">
    <div class="grid grid-cols gap-2" id="replacement">
        @foreach($chronologies as $chronologie)
            @foreach($allchronology as $movie)
                @if($movie->chronology > $chronologie->sumMin && $movie->chronology < $chronologie->sumMax && $chronologie->chronology ==$year )
                    <x-movie :movie="$movie" /> 
                @endif
            @endforeach
        @endforeach
    </div>
</div>
