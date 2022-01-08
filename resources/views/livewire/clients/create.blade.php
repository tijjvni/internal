<div>
    <x-jet-form-section submit="createClient">
        <x-slot name="title">
            {{ __('Client Information') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Creating a new client.') }}
        </x-slot>

        <x-slot name="form">
            
            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="email" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Client added successfully.') }}
            </x-jet-action-message>

            <x-jet-button wire:loading.attr="disabled" wire:target="createClient">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

</div>
