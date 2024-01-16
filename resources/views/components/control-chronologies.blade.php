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
              <th scope="col" class="px-6 py-4">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($chronologies as $chronologie)
            <form method="POST" action="{{ route('management.update', ['id' => $chronologie->id]) }}">
    @csrf
    @method('PUT')
    <tr class="border-b bg-neutral-100">
        <td class="whitespace-nowrap px-6 py-4"><input type="text" name="sumMin" value="{{ $chronologie->sumMin }}" required></td>
        <td class="whitespace-nowrap px-6 py-4"><input type="text" name="sumMax" value="{{ $chronologie->sumMax }}" required></td>
        <td class="whitespace-nowrap px-6 py-4"><input type="text" name="chronology" value="{{ $chronologie->chronology }}" required></td>
        <td class="whitespace-nowrap px-6 py-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
        </td>
    </tr>
</form>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>