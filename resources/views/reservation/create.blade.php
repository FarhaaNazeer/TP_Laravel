<div class="main-content">
    <form action="{!! route('valid_reservation') !!}" method="post">
        @csrf
        <label for="atelier">Atelier</label>
        <select name="atelier" id="atelier" class="@error('atelier') is-invalid @enderror">
            @foreach($ateliers as $atelier)
            <option value="{{ $atelier->id }}">{{ $atelier->nom }} - {{ $atelier->date }} / {{ $atelier->location }} </option>
            @endforeach
        </select>
        @error('atelier')
        <div style="color: #A52A2A;">{{ $message }}</div>
        @enderror
        <br><br>
        <label for="nb_pers">Nombre de personnes</label>
        <input type="number" name="nb_pers" id="nb_pers" min="0" class="@error('nb_pers') is-invalid @enderror">
        @error('nb_pers')
        <div style="color: #A52A2A;">{{ $message }}</div>
        @enderror
        <br><br>
        <button type="submit" class="@error('image') is-invalid @enderror"> Je m'inscris</button>
    </form>
</div>