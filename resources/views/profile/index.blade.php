<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="fixed right-50 top-50">
        <a href="{{ route('profile.edit') }}">Editar</a>
    </div>
    <div>
        <div>
            @include('posts.index')
        </div>
    </div>
</x-app-layout>