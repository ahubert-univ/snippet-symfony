# Project Symfony snippet

## Injection de class custom

### Cette opération peut etre réaliser dans n'importe quelle objet et donc pas seulement un controller

Dans le controller `src/Controller/SnippetInjectionController.php` vous trouverez un exemple injection d'une class php externe ici la class `src/Service/MyExternalService.php`

Il faut retenir:

- Le `use` ligne 8 pour faire référence au fichier que l'on veut injecter
- La création d'un propriété `private` qui a pour type la `class` que l'on veut injecter.
- La function `__construct` qui a en paramètre entrée la `class` à charger qui sera stockée (ligne 16) dans la propriété que vous venez de créer.
- A l’intérieur d'un objet on fait référence à ses propres propriétés ou function ici `$this->localExternalService`
- Pour appeler la fonction crée dans Objet ExternalService on fait donc `$this->localExternalService->renderHtml()`

## Passer des paramètres à un fichier twig

Dans le controller `src/Controller/TwigParameterController.php` vous trouverez un exemple de passage de paramètre à un twig.

Il faut retenir:
    - Le return (ligne 14) appelle la function render('fichier.html.twig',[CLE PARAMETRE => VALEUR PARAMETRE] )
`$this->render('twig_parameter/index.html.twig', ['controller_name' => 'TwigParameterController',]);`
    - c'est la clé qui est utilisé dans twig templates/twig_parameter/index.html.twig (ligne 12) ici {{ controller_name }}
