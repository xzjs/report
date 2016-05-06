<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $name='赵老师';
        $tasks=Task::where('created_at','>',date('Y-m-d'))->get();
        if(count($tasks)){
            $flag=Mail::send('emails.index',['name'=>$name,'tasks'=>$tasks],function($message){
                $to='2310976219@qq.com';
                $message->to($to)->subject('测试邮件');
            });
            if($flag){
                echo '发送邮件成功,请查收';
            }else{
                echo '发送邮件失败,请重试';
            }
        }
    }
}
