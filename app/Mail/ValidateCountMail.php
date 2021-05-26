<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ValidateCountMail extends Mailable
{
    use Queueable, SerializesModels;

    public $id = '';
    public $passw = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id, $passw)
    {
        //
        $this->id = $id;
        $this->passw = $passw;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $subject = 'Registro Exitoso en Fsiciocampus';
      Log::debug('INFORMACION Enviada a', ['info'=> $this->passw ]);
        return
          $this->view('email/template-validate-count')
          ->subject($subject)
          ->with(['id' => $this->id, 'passw' => $this->passw]);
    }
}
