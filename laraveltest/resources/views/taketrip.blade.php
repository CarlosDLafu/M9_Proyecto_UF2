<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ven a visitar {{ $site }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <!-- Imagen centrada en la parte superior -->
        <div class="text-center">
            <img src="/{{$site}}.webp" alt="{{$site}}" style="
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            width: 75%;"> 
        </div>

        <!-- Contenido del artículo -->
        <div class="mt-4">
            <h1 class="text-center" style="font-size: xx-large;">Título de mi Artículo</h1>

            <p class="lead" style=
            "margin-left: 20%;
            margin-right: 20%;
            margin-top: 12px;
            margin-bottom: 24px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec libero vel nunc tincidunt ultricies. Vestibulum auctor lectus vitae diam feugiat, vel dapibus elit hendrerit...</p>

            <p style=
            "margin-left: 15%;
            margin-right: 15%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec libero vel nunc tincidunt ultricies. Vestibulum auctor lectus vitae diam feugiat, vel dapibus elit hendrerit...</p>

            <!-- Más contenido del artículo -->
        </div>
    </div>


</x-app-layout>