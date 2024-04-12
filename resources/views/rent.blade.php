<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sewa Mobil') }}
        </h2>
        <table class="mt-5">
            <tr>
                <td>Brand : </td>
                <td>{{ $car->brand }}</td>
            </tr>
            <tr>
                <td>Model : </td>
                <td>{{ $car->type }}</td>
            </tr>
            <tr>
                <td>Price per day : </td>
                <td>Rp . {{ $car->rate_per_day }}</td>
            </tr>
        </table>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-primary-button href="/dashboard" wire:navigate>Back</x-primary-button>
                    <livewire:rent-car :car_id="$car->id" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
