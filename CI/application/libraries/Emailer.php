<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

class Emailer{

    public function sendmail($subject, $content){

        $mgClient = new Mailgun('a526368addb8166ed8c7a66e8f4cb3a6-a9919d1f-9cf15934');
        $domain = "sandbox8ecfcf41a5e84c16a2fb706e779bb562.mailgun.org";
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'	=> 'Automail <postmaster@sandbox8ecfcf41a5e84c16a2fb706e779bb562.mailgun.org>',
            'to'	=> 'Celine <lowceline82@gmail.com>',
            'subject' => $subject,
            'text'	=> $content
        ));
    }
}
?>