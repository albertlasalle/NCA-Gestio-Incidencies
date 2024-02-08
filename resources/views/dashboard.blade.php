<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Login Correcte!") }}

                </div>

                
            </div>

            <a href="{{ route('admin/incidencias') }}" class="btn btn-success mt-4 ml-3"> Incidencias </a>

            <a href="{{ route('admin/empresas') }}" class="btn btn-success mt-4 ml-3"> Empresas </a>
        </div>
    </div>

    
</x-app-layout>
