<?php
  
namespace App\Http\Middleware;
  
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userRole): Response
    {
        if(auth()->user()->role == $userRole){
            return $next($request);
        }
          
        return redirect('/')->with('error', "Kamu tidak ada akses");
    }
}
