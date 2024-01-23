@props(['country', 'site'])

<style>
    .buttonSite:hover {

        font-size: x-large!important;
        transition: 1s;

    }
    .imgSite:hover {

        filter: contrast(1.2);
        transition: 0.6s;

    }
</style>

<div class="rounded overflow-hidden shadow-lg imgSite" style="height: 500px;">
    <img class="w-full" style="height: 100%;" src="/{{$site}}.webp">
    <div class="px-6 py-4" style=" position: sticky; top: 0; bottom: 0; left: 0; right: 0;
    height: 100%; width: 100%;">
        <div class="text-center mb-2" style="position: sticky;
  top: 15%; background-color: #00000060; color: white; padding: 5px;">{{$country}}<br><span style="font-size:30px;">{{$site}}</span>
        </div>
        <a class="text-white text-center buttonSite" style="
        position: absolute; bottom: 20%; left: 40%; 
        background-color: orange; padding: 15px; font-size: larger" href="/taketrip?site={{$site}}">
            Ver más
        </a>
    </div>
</div>   