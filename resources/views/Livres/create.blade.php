<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Livre</title>
</head>
<body>
    <h1>Ajouter un Livre</h1>
    <form action="{{ route('livres.store') }}" method="POST">
        @csrf

        <div>
            <label for="titre">Titre :</label>
            <input type="text" name="titre" id="titre" value="{{ old('titre') }}">
            @error('titre')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="auteur">Auteur :</label>
            <input type="text" name="auteur" id="auteur" value="{{ old('auteur') }}">
            @error('auteur')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="nombre_pages">Nombre de Pages :</label>
            <input type="number" name="nombre_pages" id="nombre_pages" value="{{ old('nombre_pages') }}">
            @error('nombre_pages')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="categorie">Catégorie :</label>
            <input type="text" name="categorie" id="categorie" value="{{ old('categorie') }}">
            @error('categorie')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>