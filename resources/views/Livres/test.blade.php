

2. **Définir la route pour le dashboard :**  
Ajoutez dans `routes/web.php` :
```php
use App\Http\Controllers\DashboardController;

```

---

## Q2.1, Q2.3 & Q2.4 – Vue avec Widgets et Badge

Créez le fichier `resources/views/dashboard.blade.php` :
```blade

```

### Explications :

- **Widget 1 (type valeur) :**  
  Affiche le nombre total de livres. Si aucun livre n’est trouvé, un message d’erreur est affiché.

- **Widget 2 (type liste) :**  
  Affiche la liste des 5 derniers livres (triés par date décroissante). Chaque entrée affiche le titre et l’auteur, avec un badge indiquant la catégorie.

- **Badge visuel (Q2.3) :**  
  Le badge utilise une classe CSS basée sur la catégorie du livre (par exemple, `badge Aventure` ou `badge Poésie`) pour appliquer un style différent. Vous pouvez étendre ces styles pour d’autres catégories.

- **Gestion d’erreurs (Q2.4) :**  
  Si aucun livre n’est présent, un message d’alerte est affiché dans les deux widgets.

This solution meets the dossier requirements by creating a dedicated dashboard controller, building the view with two widgets, adding visual badges for categories, and properly handling error conditions.