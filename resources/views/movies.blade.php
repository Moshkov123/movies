<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($seasons as $season)
                    <x-seasons :season="$season" :movies="$movies" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function toggleEpisodes(season) {
        var episodes = document.getElementById('episodes_' + season);
        var arrow = document.querySelector('.season-header[onclick="toggleEpisodes(\'' + season + '\')"] .arrow');
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
</script>

<style>
  .splide__track {
    height: 450px;

  }

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