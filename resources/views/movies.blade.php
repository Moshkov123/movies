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
          <button onclick="navigateTo('{{ route('management') }}')" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Хронология</button>
         
          <x-control :movies="$movies"/>
         
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
<script>
    function navigateTo(url) {
        window.location.href = url;
    }

    function navigateToEdit(url) {
        window.location.href = url;
    }
</script>
