<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
  /**
   * A list of the exception types that are not reported.
   *
   * @var array<int, class-string<\Throwable>>
   */
  protected $dontReport = [
    //
  ];

  /**
   * A list of the inputs that are never flashed to the session on validation exceptions.
   *
   * @var array<int, string>
   */
  protected $dontFlash = [
    'current_password',
    'password',
    'password_confirmation',
  ];

  /**
   * Report or log an exception.
   *
   * @param  \Throwable  $exception
   * @return void
   *
   * @throws \Throwable
   */
  public function report(Throwable $exception)
  {
    parent::report($exception);
  }

  /**
   * Render an exception into an HTTP response.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Throwable  $exception
   * @return \Illuminate\Http\Response
   *
   * @throws \Throwable
   */
  public function render($request, Throwable $exception)
  {
    return parent::render($request, $exception);
  }

  /**
   * Handle unauthenticated users.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Illuminate\Auth\AuthenticationException  $exception
   * @return \Illuminate\Http\Response
   */
  protected function unauthenticated($request, AuthenticationException $exception)
  {
    // Redirect unauthenticated users to the custom unauthorized page
    return redirect()->route('errors.401');
  }
}
