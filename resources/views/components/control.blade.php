<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
            <tr>
              <th scope="col" class="px-6 py-4">Номер</th>
              <th scope="col" class="px-6 py-4">Сезон</th>
              <th scope="col" class="px-6 py-4">Заголовок на Русском</th>
              <th scope="col" class="px-6 py-4">Заголовок на Немецком</th>
              <th scope="col" class="px-6 py-4">Сумма дат</th>
              <th scope="col" class="px-2 py-4">URL видео</th>
              <th scope="col" class="px-2 py-4">URL Субтитры</th>
              <th scope="col" class="px-6 py-4">Герой</th>
              <th scope="col" class="px-20 py-4">Описание</th>
            </tr>
          </thead>
          <tbody>
            @foreach($movies as $movie)
            <x-control-video :movie="$movie" />
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>