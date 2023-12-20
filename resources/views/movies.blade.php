<x-app-layout>
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
</x-app-layout>
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