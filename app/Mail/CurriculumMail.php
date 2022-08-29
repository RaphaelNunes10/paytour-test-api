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
        return $this->view('emails.mail')
                ->with([
                    'nome' => $this->curriculum->nome,
                    'email' => $this->curriculum->email,
                    'telefone' => $this->curriculum->telefone,
                    'cargo' => $this->curriculum->cargo,
                    'escolaridade' => $this->curriculum->escolaridade,
                    'obs' => $this->curriculum->obs,
                ])
                ->attach($this->curriculum->arquivo->getRealPath(), $this->curriculum->arquivo->getClientOriginalName(), [
                    'mime' => $this->curriculum->arquivo->getClientMimeType(),
                ]);
    }
}
