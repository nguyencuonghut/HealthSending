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
            $table->string('email')->unique()->nullable();
            $table->string('code')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('tien_su_benh')->nullable();
            $table->string('chieu_cao')->nullable();
            $table->string('can_nang')->nullable();
            $table->string('bmi')->nullable();
            $table->string('mach')->nullable();
            $table->string('huyet_ap')->nullable();
            $table->string('phan_loai_the_luc')->nullable();
            $table->string('noi_tong_quat')->nullable();
            $table->string('khong_kinh_p10')->nullable();
            $table->string('khong_kinh_t10')->nullable();
            $table->string('co_kinh_p10')->nullable();
            $table->string('co_kinh_t10')->nullable();
            $table->string('ket_luan_mat')->nullable();
            $table->string('phan_loai_mat')->nullable();
            $table->string('tai_mui_hong')->nullable();
            $table->string('rang_ham_mat')->nullable();
            $table->string('da_lieu_ngoai_khoa')->nullable();
            $table->string('xet_nghiem_te_bao')->nullable();
            $table->string('san_phu_khoa')->nullable();
            $table->string('ket_qua_sieu_am_bung')->nullable();
            $table->string('ket_qua_sieu_am_tuyen_giap')->nullable();
            $table->string('ket_qua_sieu_am_vu')->nullable();
            $table->string('ket_qua_x_quang')->nullable();
            $table->string('ket_luan_xet_nghiem')->nullable();
            $table->text('danh_gia')->nullable();
            $table->text('phan_loai')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
