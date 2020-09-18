<?php

namespace Common\Providers\CommonTranslation;

use Illuminate\Translation\FileLoader;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Translation\TranslationServiceProvider;

class CommonTranslationServiceProvider extends TranslationServiceProvider implements DeferrableProvider
{
    // chemin vers les ressources de langues
    private $pathToLang = __DIR__ . '/lang';
	
    /**
     * Surcharge le service pour lui imposer le répertoire de langue common
     *
     * @return void
     */
    protected function registerLoader()
    {
        $this->app->singleton('translation.loader', function ($app) {
            return new FileLoader($app['files'], $this->pathToLang);
        });
    }
}
