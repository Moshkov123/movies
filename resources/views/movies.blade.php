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