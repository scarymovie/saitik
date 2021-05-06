<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{Auth::user()->name}}

        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="block mb-8">
            <a href="{{ route('users.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add about</a>
        </div>
        {{Auth::user()->about}}


        <tr>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="{{ route('users.edit', Auth::user()->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
            </td>
        </tr>
        <x-jet-section-border/>
    </div>

</x-app-layout>
