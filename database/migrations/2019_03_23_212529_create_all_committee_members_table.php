<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllCommitteeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_committee_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('member_name',200);
            $table->string('member_university',200);
            $table->string('member_department',200);
            $table->string('member_category',200);
            $table->string('sub_committee',200);
            $table->string('member_post',200);
            $table->string('member_image',200);
            $table->string('default')->default('show');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_committee_members');
    }
}
