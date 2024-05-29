<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // id biginteger primary key auto increment
            $table->string('code', 4)->unique(); // code varchar sebanyak 4 not null unique
            $table->string('name', 30); // nama varchar sebanyak 30 not null
            $table->string('phone', 15)->nullable(); // bole kosong
            $table->text('address'); // bole kosong
            $table->timestamps(); // created_at amd update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
