<?php

namespace Bliss\View\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

/**
 * Shop service provider
 *
 * @author    Jitendra Singh <jitendra@Bliss.com>
 * @copyright 2018 Bliss Software Pvt Ltd (http://www.Bliss.com)
 */

class ViewServiceProvider extends ServiceProvider {
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        include __DIR__ . '/../Http/routes.php';

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'helloworld');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

}