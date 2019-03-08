<?php
/**
 * Created by PhpStorm.
 * User: shahriar
 * Date: 3/8/19
 * Time: 11:22 PM
 */

namespace Shahriar\Cms\app\Http\Middleware;

use Closure;

class Admin
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$protected =null)
    {

        if($protected == 'protected')
            return redirect('/');
        return $next($request);
    }
}