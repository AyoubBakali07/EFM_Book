<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord</title>

    <style>
        .widget {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
        .badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 5px;
            font-size: 12px;
            color: #fff;
        }
        .badge.Aventure { background-color: #e3342f; }
        .badge.Poésie { background-color: #38c172; }
    </style>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
    <h1 class="m-4 text-4xl font-extrabold ">Tableau de Bord</h1>

    
    <div class=" m-4 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Total des Livres</h5>
        @if($errorMessage)
            <div style="color: red;">{{ $errorMessage }}</div>
        @else
            <p class="text-white">{{ $totalLivres }}</p>
        @endif
    </div>

    <div class=" m-4 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h2 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Les 5 Derniers Livres Ajoutés</h2>
        @if($errorMessage)
            <div style="color: red;">{{ $errorMessage }}</div>
        @elseif($latestLivres->isEmpty())
            <div style="color: red;">Aucun livre à afficher.</div>
        @else
            <ul>
                @foreach($latestLivres as $livre)
                    <li>
                        <strong class="text-white">{{ $livre->titre }}</strong class="text-white"> par {{ $livre->auteur }}
                        
                        <span  class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-green-400 border border-green-400 {{ $livre->categorie }}">
                            {{ $livre->categorie }}
                        </span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>