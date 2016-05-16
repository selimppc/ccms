<?php
/**
 * Created by PhpStorm.
 * User: selimreza
 * Date: 1/11/16
 * Time: 3:57 PM
 */


namespace App\Helpers;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;


class EmailSend
{


    /**
     * @param $input_data
     * @param $port
     * @return bool
     */
    public static function ajax_email_send($input_data = null, $file=null){
        /*
         * Configure Mail.php // @Overriding  TODO:: not done yet .. configure them all
         */
        Config::set('mail.driver', 'smtp');
        Config::set('mail.host', 'smtp.gmail.com');
        Config::set('mail.port', 465);
        Config::set('mail.from', ['address' => $input_data['email'], 'Client']);
        Config::set('mail.encryption', 'ssl');
        Config::set('mail.username', 'devdhaka404@gmail.com');
        Config::set('mail.password', 'etsb1234');
        Config::set('mail.sendmail', '/usr/sbin/sendmail -bs');
        Config::set('mail.pretend', false);

        $body = $input_data['message'];

        try{
            // Fire Email
            Mail::send('email_template.common', array('body' => $body, 'file'=>$file),
                function ($message) use ($input_data, $body) {
                    $message->from($input_data['email'], 'Client Email');
                    $message->to('bzmgraphics@gmail.com', 'bZm Graphics');
                    #$message->cc($input_data['email'], 'Client Email');
                    $message->replyTo($input_data['email'], 'Client Email');
                    $message->subject('Contact | bZm Graphics');
                    $message->setBody($body, 'text/html');

                });

            // Send Confirmation
            Mail::send('email_template.confirmation', array(null),function ($message) use ($input_data) {
                $message->from('bzmgraphics@gmail.com', 'bZm Graphics');
                $message->to($input_data['email'], 'bZm Graphics');
                $message->replyTo('hello@bzmgraphics.com', 'bZm Graphics');
                $message->subject('Confirmation | bZm Graphics');
            });

            return true;
        }catch (\Exception $e){
            return $error =$e->getMessage();
        }
    }


    /**
     * @param $input_data
     * @param $port
     * @return bool
     */
    public static function free_trial_send($input_data = null, $file=null){
        /*
         * Configure Mail.php // @Overriding  TODO:: not done yet .. configure them all
         */
        Config::set('mail.driver', 'smtp');
        Config::set('mail.host', 'smtp.gmail.com');
        Config::set('mail.port', 465);
        Config::set('mail.from', ['address' => $input_data['email'], 'name' => $input_data['name']]);
        Config::set('mail.encryption', 'ssl');
        Config::set('mail.username', 'devdhaka404@gmail.com');
        Config::set('mail.password', 'etsb1234');
        Config::set('mail.sendmail', '/usr/sbin/sendmail -bs');
        Config::set('mail.pretend', false);

        $body = $input_data['message'];

        try{

            //Fire Email
            Mail::send('email_template.common', array('body' => $body, 'file'=>$file),
                function ($message) use ($input_data,$file, $body) {
                    $message->from($input_data['email'], 'Client Email');
                    $message->to('bzmgraphics@gmail.com', 'bZm Graphics');
                    #$message->cc($input_data['email'], 'Client Email');
                    $message->replyTo($input_data['email'], 'Client Email');
                    $message->subject('Free Trail | bZm Graphics');
                    $message->setBody($body, 'text/html');

                    //TODO:: configure attachment in laravel
                    if(count($file)>0){
                        //get the count of number of attachments
                        $size = sizeOf($file);
                        for($i=0; $i< $size; $i++){
                            if(isset($i)){
                                $message->attach($file[$i]);
                            }
                        }
                    }
                });


            // Send Confirmation
            Mail::send('email_template.confirmation', array(''),function ($message) use ($input_data) {
                $message->from('bzmgraphics@gmail.com', 'bZm Graphics');
                $message->to($input_data['email'], 'bZm Graphics');
                #$message->cc($input_data['email'], 'Client Email');
                $message->replyTo('hello@bzmgraphics.com', 'bZm Graphics');
                $message->subject('Confirmation | bZm Graphics');
            });

            return true;
        }catch (\Exception $e){
            return $error =$e->getMessage();
        }


    }


}