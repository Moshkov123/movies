<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
            <tr>
              <th scope="col" class="px-6 py-4">Min sum дата</th>
              <th scope="col" class="px-6 py-4">Max sum дата</th>
              <th scope="col" class="px-6 py-4">даты</th>
              <th scope="col" class="px-6 py-4">кнопка редактировать</th>
            </tr>
          </thead>
          <tbody>
          @foreach($chronologies as $chronologie)
                    <x-Edit-control-chronologies :chronologie="$chronologie" />
                    @endforeach
          </tbody>

        </table>
      </div>
    </div>
  </div>
</div>