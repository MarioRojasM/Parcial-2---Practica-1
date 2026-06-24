<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 leading-tight">
            {{ __('Mi Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
                <p class="mb-2"><strong>Bienvenido,</strong> {{ $user->name }}</p> [cite: 56]
                <p class="mb-2"><strong>Correo:</strong> {{ $user->email }}</p> [cite: 57]
                <p class="mb-2"><strong>Teléfono:</strong> {{ $user->telefono }}</p> </div>
        </div>
    </div>
</x-app-layout>