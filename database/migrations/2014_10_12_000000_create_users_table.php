<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('url')->default('https://secure.gravatar.com/avatar/bfc247f80074238f54d45d3ed7a92aa2?s=96&d=mm&r=g');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('user_type',['web','vendor','system'])->default('web');
            
            //add customize fields....

            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('nickname')->nullable();
            
            $table->string('website')->nullable();
            $table->string('facebok_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedln_url')->nullable();
            $table->string('twitter_url')->nullable();

            $table->text('biographical_info')->nullable();

            $table->boolean('is_active')->default(0);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
