<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('code');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('tien_su_benh');
            $table->string('chieu_cao');
            $table->string('can_nang');
            $table->string('bmi');
            $table->string('mach');
            $table->string('huyet_ap');
            $table->string('phan_loai_the_luc');
            $table->string('noi_tong_quat');
            $table->string('khong_kinh_p10');
            $table->string('khong_kinh_t10');
            $table->string('co_kinh_p10');
            $table->string('co_kinh_t10');
            $table->string('ket_luan_mat');
            $table->string('phan_loai_mat');
            $table->string('tai_mui_hong');
            $table->string('rang_ham_mat');
            $table->string('da_lieu_ngoai_khoa');
            $table->string('xet_nghiem_te_bao');
            $table->string('san_phu_khoa');
            $table->string('ket_qua_sieu_am_bung');
            $table->string('ket_qua_sieu_am_tuyen_giap');
            $table->string('ket_qua_sieu_am_vu');
            $table->string('ket_qua_x_quang');
            $table->string('ket_luan_xet_nghiem');
            $table->string('danh_gia');
            $table->string('phan_loai');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
