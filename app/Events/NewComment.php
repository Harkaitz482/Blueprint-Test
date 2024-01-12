<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewComment
{
    use SerializesModels;

    public $comment;

    /**
     * Create a new event instance.
     */
    public function __construct($comment)
    {
        $this->comment = $comment;
    }
}
