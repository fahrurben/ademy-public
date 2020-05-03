<?php

namespace App\Providers;

use Collective\Html\FormFacade as Form;
use Illuminate\Support\ServiceProvider;

class CustomFormInputProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('textInput', 'components.ui.form.textInput', ['name', 'value', 'label', 'attributes', 'error']);
        Form::component('selectBox', 'components.ui.form.selectBox', ['name', 'options', 'value', 'label', 'attributes', 'error']);
        Form::component('ckBox', 'components.ui.form.checkBox', ['name', 'value', 'label', 'attributes', 'error']);
        Form::component('viewField', 'components.ui.form.viewField', [ 'label', 'value','attributes']);
    }
}
