<?php

namespace App\Http\Middleware;

use Session;
use Closure;

class MustBeAdministrator
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
      $user = $request->user();

      if($user && $user->email == 'n.fujioka@abacusmaths.info') {
        return $next($request);
      }

      Session::flash('status', 'Sorry you cannot access the page.  You must be the administrator.');
      Session::flash('alert_class', 'warning');
      return redirect('/dashboard');
      // abort(404, 'Sorry you cannot access this page. You must be the administrator.');
    }
}
