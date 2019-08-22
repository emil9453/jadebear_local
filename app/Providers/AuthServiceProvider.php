<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();


        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: User actions
        Gate::define('user_action_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Team members
        Gate::define('team_member_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('team_member_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('team_member_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('team_member_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('team_member_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Relationship history
        Gate::define('relationship_history_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('relationship_history_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('relationship_history_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('relationship_history_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('relationship_history_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Special offers
        Gate::define('special_offer_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('special_offer_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('special_offer_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('special_offer_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('special_offer_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Work schema
        Gate::define('work_schema_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('work_schema_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('work_schema_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('work_schema_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('work_schema_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Faq
        Gate::define('faq_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('faq_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Politics
        Gate::define('politic_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('politic_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('politic_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('politic_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('politic_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Media
        Gate::define('medium_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('medium_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('medium_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('medium_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('medium_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

    }
}
