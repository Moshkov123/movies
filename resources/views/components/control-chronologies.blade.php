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
