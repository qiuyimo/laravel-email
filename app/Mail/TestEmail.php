<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return $this
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // 指定使用的模板.
        return $this->view('email')->with([
            'name' => '测试 Laravel 邮件发送',
            'content' => '测试 Laravel 邮件发送, 测试 Laravel 邮件发送, 测试 Laravel 邮件发送',
            'from' => '---qiuyuhome'
        ]);
    }
}
