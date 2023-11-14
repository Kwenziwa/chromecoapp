<?php

use App\Enums\UserGender;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusAndGenderToUsers extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('status', UserStatus::getValues())->default(UserStatus::ACTIVE);
            $table->enum('gender', UserGender::getValues())->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['status', 'gender', 'pick_up_location_id']);
        });
    }
}
