<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    
        
        <x-jet-button>
            <a class="underline text-sm text-white-600 hover:text-white-900" href="{{ route('countriesbrands') }}">
                VER TABLA
            </a>
        </x-jet-button>
    </div>
</x-app-layout>
