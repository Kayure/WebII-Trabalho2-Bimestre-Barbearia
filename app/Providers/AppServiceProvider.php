<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.datalist.datalist-cursos', 'datalistCursos');
        Blade::component('components.datalist.datalist-alunos', 'datalistAlunos');
        Blade::component('components.datalist.datalist-disciplinas', 'datalistDisciplinas');
        Blade::component('components.datalist.datalist-docencias', 'datalistDocencias');
        Blade::component('components.datalist.datalist-eixos', 'datalistEixos');
        Blade::component('components.datalist.datalist-professores', 'datalistProfessores');
    }
}
