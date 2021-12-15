<x-front-layout>
    <h2>{{ __('Ateliers') }}</h2>
    <br><br>
    <div>
        @foreach($ateliers as $atelier)
        <a href="{!! route('show_ateliers', ['id' => $atelier->id_atelier]); !!}">
            <li>{{ $atelier->nom }} - {{ $atelier->nb_pers }} - {{ $atelier->date }} - {{ $atelier->location }}</li>
        </a>
        @endforeach
    </div>
</x-front-layout>
