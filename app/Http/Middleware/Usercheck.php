<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Usercheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->balance>3000){
            return redirect('denide');
        }
        

        // if(!$request->session()->has('token')){
        //     $request->session()->flash('error','Access Denide..! Please Enter Valid Email or Password');
        //     return redirect('login');
        // }
        return $next($request);
    }
}
