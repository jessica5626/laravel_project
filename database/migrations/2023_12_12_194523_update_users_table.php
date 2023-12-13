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
        Schema::table('users', function (Blueprint $table) {
            // 컬럼이 존재하지 않을 경우에만 새로운 컬럼을 추가합니다
            if (!Schema::hasColumn('users', 'name')) {
                $table->string('name');
            }

            if (!Schema::hasColumn('users', 'email')) {
                $table->string('email')->unique();
            }

            if (!Schema::hasColumn('users', 'email_verified_at')) {
                $table->timestamp('email_verified_at')->nullable();
            }

            if (!Schema::hasColumn('users', 'password')) {
                $table->string('password');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 마이그레이션 롤백 시에는 컬럼을 수정하지 않아도 됩니다
    }
};