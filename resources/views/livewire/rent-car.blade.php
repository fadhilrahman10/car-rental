<section>

    <form wire:submit="rentCar" class="mt-6 space-y-6">
        <input type="hidden" wire:model="car_id">
        <div>
            <x-input-label for="start_rent" :value="__('Start Rent')"/>
            <x-text-input wire:model="start_rent" id="start_rent" name="start_rent"
                          type="date" class="mt-1 block w-full" autocomplete="start_rent"/>
            <x-input-error :messages="$errors->get('start_rent')" class="mt-2"/>
        </div>

        <div>
            <x-input-label for="end_rent" :value="__('End Rent')"/>
            <x-text-input wire:model="end_rent" id="end_rent" name="end_rent"
                          type="date" class="mt-1 block w-full" autocomplete="end_rent"/>
            <x-input-error :messages="$errors->get('end_rent')" class="mt-2"/>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button type="submit" class="bg-blue-700 mt-4">{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="saved">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
