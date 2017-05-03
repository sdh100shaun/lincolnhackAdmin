<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Lincolnhack\Model\OneTimePassword;

class OneTimeTokenMiddleware
{
    /**
     * @var OneTimePassword
     */
    private $oneTimePassword;
    
    /**
     * OneTimeTokenMiddleware constructor.
     * @param OneTimePassword $oneTimePassword
     */
    public function __construct(OneTimePassword $oneTimePassword)
    {
    
        $this->oneTimePassword = $oneTimePassword;
    }
    
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->has('token')?$request->input('token'):null;
        $email = $request->has('email')?$request->input('email'):null;
        
        $this->oneTimePassword->verify($token,$email);
        
        
        return next($request);
    }
}
