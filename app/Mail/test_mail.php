<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class test_mail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $fileName = 'laravel-' . date_format(now(), 'Y-m-d') . '.log';
        // $content = Storage::disk('logs');
        // dd($content);
        $location = storage_path('logs/test');
        return $this->view('sucessfully')
                    // ->attachFromStorage($location, $fileName);
                    ->attach($location . '/' . $fileName);
    }
}
