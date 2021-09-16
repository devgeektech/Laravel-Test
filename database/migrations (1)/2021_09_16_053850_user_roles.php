<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->timestamps();
        });

        DB::table('user_roles')->insert(
            array(
                [
                    'name' => 'Admin',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Customer',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Trainer',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
