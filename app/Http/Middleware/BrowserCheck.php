<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Browser;

class BrowserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $browser = new Browser();
        if (strtolower($browser->getBrowser()) == 'chrome') {
            return redirect('/home');
        }
        return $next($request);
    }
}
