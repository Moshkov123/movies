<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          @if(session('error'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Ошибка!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
          </div>
          @endif
          @if(session('success'))
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Успех!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
          </div>
          @endif
          <button onclick="navigateTo('{{ route('control-movies') }}')" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Фильмы</button>
  
          <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
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
            <button type="submit" class=" text-white font-bold py-2 px-4 rounded" style=" background-color: #4299e1;">Сохранить</button>
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
                </div>
              </div>
            </div>
          </div>
          <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"  onclick="navigateTo('{{ route('management') }}')"> Отмена</button>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
<script>
    function navigateTo(url) {
        window.location.href = url;
    }
</script>