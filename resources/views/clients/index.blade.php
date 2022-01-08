<x-app-layout>
    <x-slot name="header">
        <div class="flex w-full">
            <div class="flex-grow">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Clients') }}
                </h2>
            </div>
            <div class="flex-initial">
            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Create
            </button>   
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        @livewire('clients.show')
    </div>
</x-app-layout>
