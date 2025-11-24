<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div>
        <a href="{{ route('profile.edit') }}">Editar</a>
    </div>
</x-app-layout>