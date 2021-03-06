<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Изменить данные о себе
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('users.update', Auth::user()->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="about" class="block font-medium text-sm text-gray-700">Образование</label>
                            <input type="text" name="about" id="about" type="hidden" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('about', Auth::user()->about) }}" />
                            @error('about')
                            <p class="text-sm text-red-600">{{$message }}</p>
                            @enderror
                            <label for="birth" class="block font-medium text-sm text-gray-700">Год рождения</label>
                            <input type="text" name="birth" id="birth" type="hidden" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('birth', Auth::user()->birth) }}" />
                            @error('about')
                            <p class="text-sm text-red-600">{{$message }}</p>
                            @enderror
                            <label for="skills" class="block font-medium text-sm text-gray-700">Навыки</label>
                            <input type="text" name="skills" id="skills" type="hidden" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('skills', Auth::user()->skills) }}" />
                            @error('skills')
                            <p class="text-sm text-red-600">{{$message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Изменить
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
