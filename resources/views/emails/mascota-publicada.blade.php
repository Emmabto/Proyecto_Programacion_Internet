<x-mail::message>
    <h1>¡Nueva mascota publicada!</h1>
    <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
    <p><strong>Tipo:</strong> {{ $mascota->tipo }}</p>
    <p><strong>Edad:</strong> {{ $mascota->edad }}</p>
    <p><strong>Sexo:</strong> {{ $mascota->sexo }}</p>
    <p><strong>Padecimientos:</strong> {{ $mascota->padecimientos }}</p>

    <x-mail::button :url="route('mascota.show', $mascota)">
        Ver Mascota
    </x-mail::button>

    Gracias,<br>
    {{ config('app.name') }}
</x-mail::message>