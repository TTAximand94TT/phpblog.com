<?php
namespace app\lib;

class Mail
{
    public $from;
    public $headers = "Content-type: text/html; charset=utf-8\r\n"."X-Mailer: PHP mail script";

    public function sendMail($to, $subject, $message, $from): bool
    {
        if(mail($to, $subject, $message, $from)){
            return true;
        }
    }

    public static function verificationMail($user_email, $activation_code){
        $to=$user_email;
        //$from = 'beaucrowd94@gmail.com';
        $subject="Проверка Email-а";
        $headers = "Content-type: text/html; charset=utf-8\r\n"."X-Mailer: PHP mail script";
        $message='Hi, <br/> <br/> Активация! Пожалуйста перейдите по ссылки для активации вашего аккаунта. <br/> <br/> 
                    <a href="'.BASE_URL.'activation?code='.$activation_code.'">'.BASE_URL.'activation/'.$activation_code.'</a>';
        mail($to, $subject, $message, $headers);
    }
}