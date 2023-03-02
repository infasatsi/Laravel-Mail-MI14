<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;


    public function __construct($data)
    {
        $this->data = $data;
    }


    public function build()
    {
        return $this->from('from@example.com')
            ->view('emails.demo')
            ->with(['name' => $this->data['name']]);
    }
}
