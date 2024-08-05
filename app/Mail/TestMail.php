<?php

    namespace App\Mail;
    
    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;
    use Illuminate\Contracts\Queue\ShouldQueue;
    
    class TestMail extends Mailable
    {
        use Queueable, SerializesModels;
    
        public $name;
        public $email;
        public $messageContent;
    
     
        public function __construct($name, $email, $messageContent)
        {
            $this->name = $name;
            $this->email = $email;
            $this->messageContent = $messageContent;
        }
    
        public function build()
        {
            return $this->view('emails.contact_message')
                        ->subject('Nuevo Mensaje de Contacto')
                        ->from($this->email, $this->name)
                        ->with([
                            'name' => $this->name,
                            'email' => $this->email,
                            'messageContent' => $this->messageContent,
                        ]);
        }
    }
    
