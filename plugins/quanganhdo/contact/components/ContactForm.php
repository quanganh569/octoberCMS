<?php namespace Quanganhdo\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class ContactForm extends ComponentBase
{
    public function componentDetails(){
        return[
            'name'=>'Contact Form',
            'description' =>'Simple contact form'
        ];
    }

    public function onSend(){
        
        $vars = ['name' => Input::get('name'),'email'=> Input::get('email'),'content'=> Input::get('content'),'subject'=>Input::get('subject')];

        Mail::send('quanganhdo.contact::mail.message', $vars, function($message) {

            $message->to('vlcheryl569@gmail.com', 'Admin Person');
            $message->subject('Bạn có thư mới ');

});
    }
}