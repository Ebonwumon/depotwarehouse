<?php
/**
 * Created by PhpStorm.
 * User: ebon
 * Date: 04/06/14
 * Time: 11:03
 */

namespace DepotWarehouse\Home\ContactForm\Mailer;

use \Mail;
use \Config;

class Mailer {

    public static function sendMail($from, $name, $body) {
        //Todo queue it up
        Mail::send('mail::contact', array ('name' => $name, 'bodyText' => $body), function($message) use ($from, $name) {
            $message->to(Config::get('mail.to'));
            $message->subject("New DEPOT WAREHOUSE contact form");
            $message->from($from, $name);
        });
    }

} 