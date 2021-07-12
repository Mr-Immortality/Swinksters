<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsUserBanned
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->banned_until != null) {

            if (auth()->user()->banned_until == 0) {
                $message = 'Your account has been banned permanently.';
            }
            if (now()->lessThan(auth()->user()->banned_until)) {
                $banned_days = now()->diffInDays(auth()->user()->banned_until) + 1;
                $message = 'Your account has been suspended for ' . $banned_days . ' ' . Str::plural('day', $banned_days).'. Please contact an administrator.';
            }

            return redirect()->route('login')->with(auth('web')->logout())->with('message', $message);
        }

        return $next($request);
    }
}