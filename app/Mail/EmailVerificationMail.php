<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerificationMail extends Mailable {
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($details) {
    $this->details = $details;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build() {
    return $this->subject($this->details["title"])->view('cms.email.emailVerificationMail', [
      "link" => $this->details["link"]
    ]);
  }
}
