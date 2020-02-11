<?php

class mails{
    private $to;
    private $subject;
    private $text;

    public function __construct($to,$subject,$text){
        $this->to =  $to;
        $this->subject =  $subject;
        $this->text =  $text;
    }
    public function sendMail(){
        mail($this->to, $this->subject,$this->text);
        return "Message envoyé";
    }
}