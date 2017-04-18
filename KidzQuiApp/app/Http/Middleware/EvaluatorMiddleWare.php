<?php

/**
* File: EvaluatorMiddleWare.php
* Path: App/Http/Middleware/EvaluatorMiddleWare.php
* Purpose: The middleware to authenticate the evaluators only to access the page
* Created On: 04-04-2017
* Last Modified On: 04-04-2017
* Author: R S DEVI PRASAD
*/

namespace App\Http\Middleware;

use Closure;

class EvaluatorMiddleWare
{
    /**
     * check if the user and only if it is evaluator.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('users') || !($request->session()->get('type') == 2)) {
            return redirect('evaluatorlogin');
        }
        return $next($request);
    }
}
