<?php

namespace App\Models;

use App\Repositories\UserRepository;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Ramsey\Uuid\Uuid;

class User extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject 
{
    use Authenticatable, Authorizable;

    protected $table = 'api_users';
    protected $fillable = [
        'web_socket_id',
        'username', 
        'email',
        'password',
        'content',
    ];
    protected $hidden = [
        'password',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function updateSocketToken()
    {
        $uuid = Uuid::uuid4()->toString();
        UserRepository::updateWebSocketId($this->id, $uuid);
        $this->web_socket_id = $uuid;
    }
}
