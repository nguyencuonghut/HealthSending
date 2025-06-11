<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'code',
        'gender',
        'date_of_birth',
        'tien_su_benh',
        'chieu_cao',
        'can_nang',
        'bmi',
        'mach',
        'huyet_ap',
        'phan_loai_the_luc',
        'noi_tong_quat',
        'khong_kinh_p10',
        'khong_kinh_t10',
        'co_kinh_p10',
        'co_kinh_t10',
        'ket_luan_mat',
        'phan_loai_mat',
        'tai_mui_hong',
        'rang_ham_mat',
        'da_lieu_ngoai_khoa',
        'xet_nghiem_te_bao',
        'san_phu_khoa',
        'ket_qua_sieu_am_bung',
        'ket_qua_sieu_am_tuyen_giap',
        'ket_qua_sieu_am_vu',
        'ket_qua_x_quang',
        'ket_luan_xet_nghiem',
        'danh_gia',
        'phan_loai',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
