<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserRegisteredMail extends Mailable
{
   use Queueable, SerializesModels;

   public $user;

   /**
   * Create a new message instance.
   *
   * @return void
   */
   public function __construct($user)
   {
      $this->user = $user;
   }

   /**
   * Build the message.
   *
   * @return $this
   */
   public function build()
   {
      return $this->from('soporte.inmo@app.gov.co')
         ->subject("Nuevo usuario registrado - AGENCIA APP")
         ->view('mail.new_user_registered')
         ->with('user');
   }
}
