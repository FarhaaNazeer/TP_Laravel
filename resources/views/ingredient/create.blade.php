<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ingredients') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{!! route('create_ingredient') !!}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <label for="name">Nom</label>
                                <input type="text" class="@error('name') is-invalid @enderror" placeholder="">
                                <div class="focus"></div>
                            </div>
                            @error('name')
                            <div style="color: #A52A2A;">{{ $message }}</div>
                            @enderror
                            <div class="empty-sm-20 empty-xs-20"></div>
                        </div>
                        <br><br>
                        <label for="recette">Recette</label>
                        <select name="recette" id="recette">
                            @foreach($recettes as $recette)
                            <option value="{{ $recette->id }}">{{ $recette->name }}</option>
                            @endforeach
                        </select>
                        @error('name')
                        <div style="color: #A52A2A;">{{ $message }}</div>
                        @enderror
                        <div class="empty-sm-20 empty-xs-20"></div>
                        <br>
                        <button type="submit">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>