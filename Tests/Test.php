<?php

namespace Common\Providers\CommonTranslation\Tests;

use Tests\TestCase;
use Illuminate\Support\Facades\App;

class Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_trans_french_files_ok()
    {
        // on va chercher le premier item traduit
        $firstItemValidation = collect(trans('validation'))->first();
        // on va chercher le premier item de la config du service
        $colConfig           = collect(require __DIR__ . '/../lang/' . App::getLocale() . '/validation.php')->first();

        // on check si les deux élémnets sont égaux
        $this->assertTrue($firstItemValidation === $colConfig);
    }
}
