<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $email;
    /**
     * @var
     */
    private $message;

    /**
     * Create a new job instance.
     *
     * @param $name
     * @param $email
     * @param $message
     */
    public function __construct($name, $email, $message)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @param Mailer $mailer
     */
    public function handle(Mailer $mailer)
    {
        $emailData = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];
        $mailer->send('emails.contact', ['contactData'=> $emailData], function($mail){

            // Create the message
            $mail->from('richnwan@gmail.com', 'Portfolio Site')
                ->to('richnwan@gmail.com', 'Richard Nwankwo')
                ->subject('You\'ve been contacted!');

        });
    }
}
