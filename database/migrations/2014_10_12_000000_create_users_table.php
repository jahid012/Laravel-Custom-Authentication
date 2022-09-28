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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('primary_verification_method')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('mobile')->unique()->nullable();
            $table->string('providers_id')->unique()->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->integer('rating')->nullable();
            $table->integer('balance')->nullable();
            $table->integer('total_earning')->nullable();
            $table->integer('total_withdrowed')->nullable();
            $table->string('nid_number')->nullable();
            $table->integer('gig_category')->nullable();
            $table->integer('jobs_done')->nullable();
            $table->integer('re_hired')->nullable();
            $table->integer('job_success_rate')->nullable();
            $table->integer('recommendation')->nullable();
            $table->integer('on_time')->nullable();
            $table->integer('on_budget')->nullable();
            $table->string('short_description')->nullable();
            $table->string('full_description')->nullable();
            $table->ipAddress()->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->integer('is_varified')->nullable();
            $table->string('rand_id')->nullable();
            $table->integer('status')->nullable();
            
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
