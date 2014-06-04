<?php
/**
 * Created by PhpStorm.
 * User: ebon
 * Date: 04/06/14
 * Time: 11:03
 */

namespace DepotWarehouse\Home\ContactForm\Mailer;


class Mailer {

    public static function sendMail($from, $name, $body) {
        //Todo queue it up
        Mail::send('mail::contact', array ('name' => $name, 'body' => $body), function($message) use ($from, $name) {
            $message->to(Config::get('email.to'));
            $message->from($from, $name);
        });
    }

} 