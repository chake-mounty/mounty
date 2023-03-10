<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserIntroduction extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Mountyへの登録完了しました！';
    public User $newUser;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $newUser)
    {
        $this->newUser = $newUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.new_user_introduction');
    }
}
