<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        @livewire("my-select",["records"=>$countries, "checkeado" => $checkCountries])
        @livewire("my-select",["records"=>$brands, "checkeado" => $checkBrands])
    </div>
    <div class="py-12">
        @livewire("my-table",["countriesAndBrands"=>$countriesAndBrands, "columnCountry" => $checkCountries, "columnBrand" => $checkBrands])
    </div>
    
</x-app-layout>
