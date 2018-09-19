<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * 使用原始方式发送邮件.
     * send email.
     */
    public function raw()
    {
        Mail::raw('这里填写邮件的内容', function ($message) {
            // 发件人（你自己的邮箱和名称）
            $message->from('qq530004000@163.com', 'QiuYuHome');
            // 收件人的邮箱地址
            $message->to('530004000@qq.com');
            // 邮件主题
            $message->subject('测试');
        });

        return 'ok';
    }

    /**
     * 使用 html 模板发送邮件.
     */
    public function template()
    {
        $emailInfo = [
            'name' => 'email test',
            'content' => '测试, 使用 Laravel 发送 HTML 模板的邮件.',
            'from' => 'QiuYuHomeTest'
        ];

        // 第一个参数填写模板的路径，第二个参数填写传到模板的变量
        Mail::send('email', $emailInfo, function ($message) {
            // 发件人（你自己的邮箱和名称）
            $message->from('qq530004000@163.com', 'QiuYuHome');
            // 收件人的邮箱地址
            $message->to('530004000@qq.com');
            // 邮件主题
            $message->subject('通过 HTML 发送邮件');
        });

        return 'ok';
    }
}
