<?php

use App\Models\Application;
use App\Models\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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

            $table->string('name')->nullable();

            $table->foreignIdFor(Application::class)->nullable()->index();
            $table->foreignIdFor(Country::class)->nullable()->index();

            $table->string('phone')->unique();

            $table->string('password');

            $table->integer('otp')->nullable();

            $table->boolean('is_verified')->default(0)->comment('0 = Not yet verified, 1 = Verified');
            $table->rememberToken();

            $table->string('created_by', 100)->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->string('deleted_by', 100)->nullable();

            $table->timestamps();
            $table->softDeletes();
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
}
