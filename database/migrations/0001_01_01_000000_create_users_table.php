<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
          $table->id();
          $table->string('name')->nullable();
          $table->string('email')->unique()->nullable();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password')->nullable();
          $table->string('phone_token')->nullable();
          $table->string('phone',20)->nullable();
//          $table->string('avatar',1024)->nullable();
//          $table->enum('role',\App\Models\User::$roles)->default('USER');
          $table->rememberToken();
          $table->timestamps();
          $table->softDeletes();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('sessions');
    }
};
