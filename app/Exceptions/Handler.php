<?php
namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Handler extends ExceptionHandler
{
    // protected function unauthenticated($request, AuthenticationException $exception)
    // {
    //     dd('unauthenticated!');

    //     // ガード名で判定
    //     $guard = $exception->guards()[0] ?? null;
    //     Log::debug('Unauthenticated guard:', ['guard' => $guard, 'url' => $request->url()]); // 追加

    //     switch ($guard) {
    //         case 'admin':
    //             $login = 'admin.login';
    //             break;
    //         case 'student':
    //             $login = 'student.login';
    //             break;
    //         default:
    //             $login = 'login';
    //             break;
    //     }

    //     if ($request->expectsJson()) {
    //         return response()->json(['message' => $exception->getMessage()], 401);
    //     }

    //     return redirect()->guest(route($login));
    // }
}
