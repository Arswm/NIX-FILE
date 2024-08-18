<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  use HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'password',
    'phone',
    // Notice 'role' is NOT included here
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
  }

  // Define role constants
  const ROLE_USER = 'user';
  const ROLE_PREMIUM = 'premium';
  const ROLE_WRITER = 'writer';
  const ROLE_ADMIN = 'admin';
  const ROLE_LEGEND = 'legend';

  /**
   * Get all available roles.
   *
   * @return array<int, string>
   */
  public static function getAvailableRoles(): array
  {
    return [
      self::ROLE_USER,
      self::ROLE_PREMIUM,
      self::ROLE_WRITER,
      self::ROLE_ADMIN,
      self::ROLE_LEGEND,
    ];
  }

  public function files(){
    return $this->hasMany(File::class);
  }
}
