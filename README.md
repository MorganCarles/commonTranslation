# CommonTranslationService

## Description

Ce service permet de surcharger le service laravel existant pour faire référence au fichiers langs stockés dans le répertoire common et ainsi factoriser ce répertoire au final commun pour tous nos sites.

## Comment l'utiliser?

Il suffit de modifier, dans la liste des providers de `config/app.php`, l'appel du TranslationService et remplacer

```
Illuminate\Translation\TranslationServiceProvider::class,
```

par :

```
Common\Providers\CommonTranslation\CommonTranslationServiceProvider::class,
```