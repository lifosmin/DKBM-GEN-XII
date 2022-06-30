<?php

namespace App\Http\Controllers\Honeypot;
use Spatie\Honeypot\SpamResponder\SpamResponder;

use Closure;
use Illuminate\Http\Request;

class CustomSpamResponder implements SpamResponder {
  public function respond(Request $request, Closure $next) {
    return redirect(route("custom-spam-response"));
  }
}
