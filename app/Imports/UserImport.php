<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class UserImport implements ToModel, WithStartRow, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'code'     => $row[3],
            'name'    => $row[4],
            'email'   => $row[5],
            'gender' => $row[6],
            'date_of_birth' => $row[7],
            'tien_su_benh' => $row[8],
            'chieu_cao' => $row[9],
            'can_nang' => $row[10],
            'bmi' => $row[11],
            'mach' => $row[12],
            'huyet_ap' => $row[13],
            'phan_loai_the_luc' => $row[14],
            'noi_tong_quat' => $row[15],
            'khong_kinh_p10' => $row[16],
            'khong_kinh_t10' => $row[17],
            'co_kinh_p10' => $row[18],
            'co_kinh_t10' => $row[19],
            'ket_luan_mat' => $row[20],
            'phan_loai_mat' => $row[21],
            'tai_mui_hong' => $row[22],
            'rang_ham_mat' => $row[23],
            'da_lieu_ngoai_khoa' => $row[24],
            'xet_nghiem_te_bao' => $row[25],
            'san_phu_khoa' => $row[26],
            'ket_qua_sieu_am_bung' => $row[27],
            'ket_qua_sieu_am_tuyen_giap' => $row[28],
            'ket_qua_sieu_am_vu' => $row[29],
            'ket_qua_x_quang' => $row[30],
            'ket_luan_xet_nghiem' => $row[31],
            'danh_gia' => $row[32],
            'phan_loai' => $row[33],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }

    public function chunkSize(): int
    {
        return 10; // or 50
    }
}
