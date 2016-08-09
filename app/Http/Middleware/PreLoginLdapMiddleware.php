<?php

namespace App\Http\Middleware;

use Closure;

class PreLoginLdapMiddleware
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
	$resultDN = \Adldap::search()->where('uid', $request->username)->select('dn')->get();

	   if ( !$resultDN->isEmpty() ){

	       list($account_prefix, $account_suffix) = explode($request->username, $resultDN[0]->dn);

	       $provider = \Adldap::getDefaultProvider();
	       $provider->getConfiguration()->setAccountPrefix($account_prefix);
	       $provider->getConfiguration()->setAccountSuffix($account_suffix);

	   }
        return $next($request);
    }
}
