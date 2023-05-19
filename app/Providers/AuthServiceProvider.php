<?php

namespace App\Providers;

use App\Models\Albums;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use App\Models\Team;
use App\Policies\TeamPolicy;
use App\Policies\AlbumsPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Albums::class => AlbumsPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('artist-albums', function(User $user) {
            return $user->typeUser == 'Artista';
        });

        Gate::define('artist-songs', function(User $user) {
            return $user->typeUser == 'Artista';
        });
    }
}
