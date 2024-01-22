<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Turistic Sites') }}
        </h2>
    </x-slot>

    <nav class="grid" 
    style="grid-template-columns: repeat(3, minmax(0, 1fr)); padding: 2.5rem; gap: 1.25rem;">
        <!-- Cards -->
        <x-turistic-component country="Spain" site="Madrid"/>
        <x-turistic-component country="Spain" site="Barcelona"/>
        <x-turistic-component country="Italia" site="Roma"/>
        <x-turistic-component country="Francia" site="Paris"/>
        <x-turistic-component country="Grecia" site="Atenas"/>
    </nav>
</x-app-layout>