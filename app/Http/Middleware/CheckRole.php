<?php

/**
 * 中间件测试
 * 给路由分配中间件
 * 在路由到具体的业务之间进行处理(或在业务处理之后执行)
 * 可以做一些验证之类的工作
 */

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if ($role == 'editor') {
            if ($request->get('age') > 20) {
                return $next($request);
            }
            else {
                echo '年龄太小';
            }
        }
        else {
            return redirect('/home');
        }
    }
}
