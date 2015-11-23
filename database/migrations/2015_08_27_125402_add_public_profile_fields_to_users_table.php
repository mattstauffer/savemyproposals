<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPublicProfileFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profile_slug')->nullable();
            $table->boolean('enable_profile')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Why separate schema calls? Friggin SQlite.
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profile_slug');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('enable_profile');
        });
    }
}
