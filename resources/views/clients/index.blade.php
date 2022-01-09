<x-app-layout>
    <x-slot name="header">
        <div class="flex w-full">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Clients') }}
                <a href="{{ route('clients.create') }}" class="float-right inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create
                </a>  
            </h2>
        </div>
    </x-slot>

    <div class="p-5">
            {{ $clients->dd() }}
    </div>
</x-app-layout>
