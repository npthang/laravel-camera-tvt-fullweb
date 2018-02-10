<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\URL;

class Locale
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
        $locales = ['vi', 'en'];
        if ($request->method() === 'GET') {
            $segment = $request->segment(1);

            if (!in_array($segment, $locales)) {
                $segments = $request->segments();
                $fallback = session('locale') ?: config('app.fallback_locale');
                $segments = array_prepend($segments, $fallback);

                return redirect()->to(implode('/', $segments));
            }

            session(['locale' => $segment]);
            app()->setLocale($segment);

            URL::defaults(['lang' => app()->getLocale()]);
        }

        return $next($request);
    }
}
