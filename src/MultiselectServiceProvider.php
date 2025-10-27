<?php

/*
 * This file is part of the Laravel Multiselect package.
 *
 * (c) Andre Chalom <andrechalom@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace AndreChalom\LaravelMultiselect;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class MultiselectServiceProvider extends ServiceProvider
{
    /**
     * Register the package services.
     */
    public function register(): void
    {
        // Bind the concrete class with properly resolved typed dependencies
        $this->app->singleton(Multiselect::class, function ($app) {
            return new Multiselect(
                $app->make(Session::class),
                $app->make(Request::class)
            );
        });

        // Provide a simple container alias for backward compatibility with the facade
        $this->app->alias(Multiselect::class, 'multiselect');
        $this->app->singleton('multiselect', function ($app) {
            return $app->make(Multiselect::class);
        });
    }

    public function provides(): array
    {
        return [Multiselect::class, 'multiselect'];
    }
}
