<?php

namespace App\Http\Middleware;

use Illuminate\Support\Arr;
use Overtrue\Socialite\User as SocialiteUser;
use Closure;

class WxAuth
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
//        $user = new SocialiteUser([
//            'id' => Arr::get($user, 'openid'),
//            'name' => Arr::get($user, 'nickname'),
//            'nickname' => Arr::get($user, 'nickname'),
//            'avatar' => Arr::get($user, 'headimgurl'),
//            'email' => null,
//            'original' => [],
//            'provider' => 'WeChat',
//        ]);
        return $next($request);
    }
}
