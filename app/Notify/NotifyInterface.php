<?php 
namespace App\Notify;
interface NotifyInterface{
	public function send($subject, $template, $data);
}