<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();

            $table->string('code', 25)->unique();

            $table->string('name', 100);
            $table->string('email', 100)->nullable();

            $table->text('address')->nullable();
            $table->text('bill_address')->nullable();

            $table->string('npwp', 50)->nullable();
            $table->string('fax', 50)->nullable();
            $table->string('mobile', 100)->nullable();

            $table->json('phone')->nullable();

            $table->text('note')->nullable();

            $table->string('contact_person', 100)->nullable();
            $table->string('contact_number', 100)->nullable();

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
        Schema::dropIfExists('suppliers');
    }
}
