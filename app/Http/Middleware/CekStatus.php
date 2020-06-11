<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekStatus
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
        if (isset($user->email))
            $domain = explode("@", $user->email);

        if (isset($domain[1]) && $domain[1] == "mdp.ac.id") {
            if (!$request->is('bimbingan/*') && !$request->is('bimbingan')) {
                return redirect('bimbingan');
            }
        } elseif (isset($domain[1]) && $domain[1] == "dosen.mdp.ac.id") {
            if (!$request->is('bimbingan/*') && !$request->is('bimbingan')) {
                return redirect('bimbingan');
            }
        } elseif (isset($domain[1]) && $domain[1] == "mhs.mdp.ac.id") {
            if (!$request->is('bimbingan/*') && !$request->is('bimbingan')) {
                return redirect('bimbingan');
            }
        } elseif (isset($domain[1]) && $domain[1] != "mdp.ac.id") {
            Auth::logout();
            return redirect("/login")->with("status", "Anda tidak memiliki izin untuk mengakses Universitas ABCD!");
        }

        return $next($request);
    }
}
