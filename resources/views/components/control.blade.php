<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
  @foreach($movies as $movie)
    <div class="relative bg-gray-200 rounded-lg p-4">
      <p class="text-sm sm:text-base md:text-lg font-extrabold w-full cursor-pointer">Эпизод {{ $movie->number }}</p>
      <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden" style="padding-top: 56.25%">
        <iframe class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full" src="{{ $movie->video }}" frameborder="0" allowfullscreen=""></iframe>
      </div>
      <div class="style-scope ytd-watch-metadata">
        <p class="text-base sm:text-lg md:text-xl w-full cursor-pointer overflow-hidden" style="max-height: 3.5em;">{{ $movie->title_ru }}</p>
        <p class="text-base sm:text-lg md:text-xl w-full cursor-pointer overflow-hidden" style="max-height: 3.5em;">{{ $movie->title_de }}</p>
      </div>
      <div class="p-2">
      <form action="{{ route('movies-delete', ['id' => $movie->id]) }}" style="margin-right: 5px; margin-top: 3px;" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class=" bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Удалить</button>
                                </form>
      <button style="margin-left: 3px; margin-top: 3px;" onclick="navigateToEdit('{{ route('movies-edit', ['id' => $movie->id]) }}')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Редактировать</button>
      </div>
    </div>
  @endforeach
</div>

<script>

</script>
