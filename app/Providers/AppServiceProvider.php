<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
        //     $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style);
        // });
    }
}
