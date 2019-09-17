<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;


       // put it Date public to use in build 

       public $name;
       public $email;
       public $messages;
       



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$messages)
    {
        //
            //

            $this->name=$name;
            $this->email=$email;
            $this->$messages=$messages;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

   // Return Form You View it in Email 
          // Note That you not need pass variable cuz you do it public in above 

        return $this->view('pages.mail')->from('email@email.com');  // from you write email user but you dont need write it here cuz it's send from your website
        
        
    }
}
