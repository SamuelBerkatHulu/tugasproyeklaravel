<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="max-w-2xl mx-auto p-8 bg-white shadow-lg rounded-lg border border-gray-200">
    <table class="min-w-full">
      <tbody>
        <tr class="border-b">
          <td class="font-medium text-gray-700 py-2">Website:</td>
          <td class="py-2">
            <a href="{{ $youtube }}" class="text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out">{{ $website }}</a>
          </td>
        </tr>
        <tr class="border-b">
          <td class="font-medium text-gray-700 py-2">LinkedIn:</td>
          <td class="py-2">
            <a href="{{ $facebook }}" class="text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out">{{ $linkedin }}</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</x-layout>