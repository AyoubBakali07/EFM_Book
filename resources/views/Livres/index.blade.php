<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Livres</title>   
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


</head>
<body>
    <h1  class="text-4xl font-extrabold dark:text-gray-700 px-6">Liste des Livres</h1>
    {{-- <button>
        <a href="{{ route('livres.create') }}">Ajouter un Livre</a>
    </button> --}}
    
    <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
            <a href="{{ route('livres.create') }}">Ajouter un Livre</a>
        
        </span>
        </button>
    @error('titre')
    <div style="color:red;">{{ $message }}</div>
    @enderror
    @if(session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif
    <div class="relative overflow-x-auto">
        <table border="1" cellpadding="5" >
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
                <tr class="bg-white text-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
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

    
    <div>
        {{ $livres->links() }}
    </div>
</body>
</html>