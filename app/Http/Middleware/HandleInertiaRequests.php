<?php

namespace App\Http\Middleware;

use Inertia\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request) {
        return array_merge(parent::share($request), [
            'auth' => function() {
                $user = auth()->user();
                return $user ? [
                    'profile' => $user->profile,
                    'notifications' => $user->notifications,
                    'readNotifications' => $user->readNotifications,
                    'unreadNotifications'=> $user->unreadNotifications,
                    'can' => [
                        'manageAdmins' => $user->can('manageAdmins'),
                        'accessRoles' => $user->can('accessRoles'),
                        'manageRoles' => $user->can('manageRoles'),
                        'accessUsers' => $user->can('accessUsers'),
                        'manageUsers' => $user->can('manageUsers'),
                    ],
                ] : null;
            },
            'success' => function () {
                return Session::get('success')
                ? Session::get('success')
                : null;
            }
        ]);
    }
}