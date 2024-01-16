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
            </tr>
          </thead>
          <tbody>
          @foreach($chronologies as $chronologie)
                        <tr class="border-b bg-neutral-100">
                          <td class="whitespace-nowrap px-6 py-4">{{ $chronologie->sumMin }}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{ $chronologie->sumMax }}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{ $chronologie->chronology }}</td>

                        </tr>
                        @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>