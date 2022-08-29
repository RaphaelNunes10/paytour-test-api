<?php

namespace App\Mail;

use App\Models\Curriculum;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CurriculumMail extends Mailable
{
    use Queueable, SerializesModels;

    public $curriculum;
    public $primeiroNome;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Curriculum $curriculum)
    {
        $this->curriculum = $curriculum;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->primeiroNome = explode(' ', $this->curriculum->nome, 2)[0];

        return $this->view('emails.mail')
                ->with([
                    'primeiroNome' => $this->primeiroNome,
                    'nome' => $this->curriculum->nome,
                    'email' => $this->curriculum->email,
                    'telefone' => $this->curriculum->telefone,
                    'cargo' => $this->curriculum->cargo,
                    'escolaridade' => $this->curriculum->escolaridade,
                    'obs' => $this->curriculum->obs,
                ])
                ->attachData(base64_decode($this->curriculum->arquivo["base64"]), $this->curriculum->arquivo["nome"], ['mime' => $this->curriculum->arquivo["mime"],]);
    }
}
