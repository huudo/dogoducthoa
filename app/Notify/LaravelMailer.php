<?php
/**
 *  
 */
namespace App\Notify;
use App\Notify\NotifyInterface;
use Mail;
class LaravelMailer implements NotifyInterface
{
	public function send($subject, $template, $data){
		Mail::send($template, ['user' => $data], function ($m) use ($data) {
			$m->from('hello@app.com', 'Your Application');
			$m->to($data->email, $data->name)->subject('Your Reminder!');
		});
	}
	
}