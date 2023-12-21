<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public static function updateWebSocketId($userId, $uuid)
    {
        User::where('id', $userId)
            ->update([
                'web_socket_id' => $uuid
            ]);
    }
}
