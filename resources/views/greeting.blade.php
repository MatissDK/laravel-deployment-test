<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($users as $user)
                    <div class="p-2 text-gray-900">
                        {{ $user->name }}
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
