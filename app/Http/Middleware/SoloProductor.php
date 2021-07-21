<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class SoloProductor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->usertype){
            case ('ClienteNacional'):
                return redirect('home');
            break;
            case ('ClienteInternacional'):
                return redirect('menuinternacional');
            break;
            case ('Productor'):
                return $next($request);   
            break;
            case ('Transportista'):
                return redirect('menutransportista');
            break;
            case ('Consultor'):
                return redirect('menuconsultor');
            break;
        }
    }
}