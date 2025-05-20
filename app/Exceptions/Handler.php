<?php
namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        // 学生向けログイン
        if ($request->is('student') || $request->is('student/*')) {
            return redirect()->guest(route('student.login'));
        }

        // 管理者向けログイン
        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest(route('admin.login'));
        }

        // デフォルト（使わないようにするなら404でもOK）
        return abort(404);
    }
}
