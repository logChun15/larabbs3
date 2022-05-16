<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Topic;

class TopicPolicy extends Policy
{
    public function update(User $user, Topic $topic)
    {
        return $topic->user_id == $user->id;
    }

    public function destroy(User $user, Topic $topic)
    {
    return $user->isAuthorOf($topic); //和上面一样，引用了user.php的一个函数（自建）方便简洁
    }
}
