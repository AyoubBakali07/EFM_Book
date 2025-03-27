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
        /* Exemples de style pour quelques catégories */
        .badge.Aventure { background-color: #e3342f; }
        .badge.Poésie { background-color: #38c172; }
        /* Ajoutez d'autres styles pour d'autres catégories si nécessaire */
    </style>
</head>
<body>
    <h1>Tableau de Bord</h1>

    <!-- Widget 1 : Nombre total de livres -->
    <div class="widget">
        <h2>Total des Livres</h2>
        @if($errorMessage)
            <div style="color: red;">{{ $errorMessage }}</div>
        @else
            <p style="font-size: 24px;">{{ $totalLivres }}</p>
        @endif
    </div>

    <!-- Widget 2 : Liste des 5 derniers livres ajoutés -->
    <div class="widget">
        <h2>Les 5 Derniers Livres Ajoutés</h2>
        @if($errorMessage)
            <div style="color: red;">{{ $errorMessage }}</div>
        @elseif($latestLivres->isEmpty())
            <div style="color: red;">Aucun livre à afficher.</div>
        @else
            <ul>
                @foreach($latestLivres as $livre)
                    <li>
                        <strong>{{ $livre->titre }}</strong> par {{ $livre->auteur }}
                        <!-- Badge visuel selon la catégorie -->
                        <span class="badge {{ $livre->categorie }}">
                            {{ $livre->categorie }}
                        </span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>