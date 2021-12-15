<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recettes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{!! route('valid_recette') !!}" method="post">
                        @csrf
                        <label for="name">Nom de la recette</label>
                        <input type="text" name="name" id="name">
                        @error('name')
                        <div style="color: #A52A2A;">{{ $message }}</div>
                        @enderror
                        <br><br>
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="@error('description') is-invalid @enderror" cols="20" rows="3">Veuillez renseigner la description de votre recette</textarea>
                        @error('description')
                        <div style="color: #A52A2A;">{{ $message }}</div>
                        @enderror
                        <br><br>
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image">
                        @error('image')
                        <div style="color: #A52A2A;">{{ $message }}</div>
                        @enderror
                        <br><br><br>
                        <button type="submit" class="@error('image') is-invalid @enderror"> Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>