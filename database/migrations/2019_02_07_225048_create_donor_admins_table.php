<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_admins', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('admin_code', 15 ) -> unique();
            $table -> string('donor_code', 15 );
            $table -> string('department', 30 );
            $table -> string('position', 30 );
            $table -> string('phone', 15 );
            $table -> string('mobile', 15 );
            $table -> string('email', 50 ) -> unique();
            $table -> string('password', 200 );

            $table -> foreign( 'donor_code' ) -> references( 'donor_code' ) -> on( 'donors' ) -> onDelete( 'cascade' );

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donor_admins');
    }
}
