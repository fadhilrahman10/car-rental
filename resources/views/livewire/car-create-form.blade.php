<div>
    <form wire:submit="save" class="mt-6 space-y-6">
        <div>
            <x-input-label for="brand" :value="__('Brand')" />
            <x-text-input wire:model="brand" id="brand" name="brand" type="text" class="mt-1 block w-full" autocomplete="brand" />
            <x-input-error :messages="$errors->get('brand')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="type" :value="__('Model')" />
            <x-text-input wire:model="type" id="type" name="type" type="text" class="mt-1 block w-full" autocomplete="type" />
            <x-input-error :messages="$errors->get('type')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="plat_number" :value="__('Plat Number')" />
            <x-text-input wire:model="plat_number" id="plat_number" name="plat_number" type="text" class="mt-1 block w-full" autocomplete="plat_number" />
            <x-input-error :messages="$errors->get('plat_number')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="rate_per_day" :value="__('Price per day')" />
            <x-text-input wire:model="rate_per_day" id="rate_per_day" name="rate_per_day" type="text" class="mt-1 block w-full" autocomplete="rate_per_day" />
            <x-input-error :messages="$errors->get('rate_per_day')" class="mt-2" />
        </div>

        <x-primary-button type="submit" class="bg-blue-700 mt-4">{{ __('Save') }}</x-primary-button>

                                <x-action-message class="me-3" on="saved">
                                    {{ __('Saved.') }}
                                </x-action-message>
    </form>
</div>
