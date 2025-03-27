<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Livres</title>
</head>
<body>
    <h1>Liste des Livres</h1>
    @error('titre')
    <div style="color:red;">{{ $message }}</div>
    @enderror
    @if(session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif
    <div class="relative overflow-x-auto">
        <table border="1" cellpadding="5" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Titre</th>
                    <th scope="col" class="px-6 py-3">Auteur</th>
                    <th scope="col" class="px-6 py-3">Nombre de Pages</th>
                    <th scope="col" class="px-6 py-3">Catégorie</th>
                    <th scope="col" class="px-6 py-3">Date de Création</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livres as $livre)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-4">{{ $livre->id }}</td>
                    <td class="px-6 py-4">{{ $livre->titre }}</td>
                    <td class="px-6 py-4">{{ $livre->auteur }}</td>
                    <td class="px-6 py-4">{{ $livre->nombre_pages }}</td>
                    <td class="px-6 py-4">{{ $livre->categorie }}</td>
                    <td class="px-6 py-4">{{ $livre->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>

    <!-- Liens de pagination -->
    <div>
        {{ $livres->links() }}
    </div>
</body>
</html>