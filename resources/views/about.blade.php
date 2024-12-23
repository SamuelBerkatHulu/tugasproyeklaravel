<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="mt-4 bg-white shadow-md rounded-lg p-6 max-w-md mx-auto">
    <table class="min-w-full">
      <tbody>
        <tr class="border-b">
          <td class="text-lg font-semibold text-gray-700 py-2">Nama:</td>
          <td class="text-lg text-gray-900 py-2">{{ $nama }}</td>
        </tr>
        <tr class="border-b">
          <td class="text-lg font-semibold text-gray-700 py-2">NRP:</td>
          <td class="text-lg text-gray-900 py-2">{{ $nrp }}</td>
        </tr>
        <tr>
          <td class="text-lg font-semibold text-gray-700 py-2">Kelas:</td>
          <td class="text-lg text-gray-900 py-2">{{ $kelas }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</x-layout>