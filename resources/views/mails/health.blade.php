<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <style>
        body {
            background: #f4f4f5;
            color: #222;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 2rem 0;
        }
        .health-table-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }
        table.health-table {
            border-collapse: collapse;
            width: 100%;
            min-width: 340px;
            max-width: 600px;
            background: #fff;
            border-radius: 12px;
            margin: 0 auto;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            border: 1px solid #2563eb;
        }
        th, td {
            padding: 12px 18px;
            border: 1px solid #2563eb;
            color: #222; /* Always dark text in light mode */
        }
        th {
            background: #2563eb;
            color: #fff;
            text-align: left;
            font-size: 1.05em;
            letter-spacing: 0.02em;
        }
        tr:last-child td {
            border-bottom: 1px solid #2563eb;
        }
        tr:nth-child(even) td {
            background: #f1f5f9;
        }
        tr.highlight, tr[bgcolor="yellow"] {
            background: linear-gradient(90deg, #facc15 0%, #fde68a 100%);
            font-weight: bold;
            color: #23272f !important; /* Ensure dark text for highlight row */
        }
        td:first-child {
            font-weight: 500;
            color: #2563eb;
        }
        td {
            font-size: 1em;
        }
        @media (max-width: 600px) {
            th, td {
                padding: 8px 8px;
                font-size: 0.97em;
            }
            .health-table-container {
                padding: 0 2px;
            }
        }
        /* Dark mode styles */
        @media (prefers-color-scheme: dark) {
            body {
                background: #18181b;
                color: #e5e7eb;
            }
            table.health-table {
                background: #23272f;
                box-shadow: 0 4px 24px rgba(0,0,0,0.32);
                border: 1px solid #facc15;
            }
            th, td {
                border: 1px solid #facc15;
                color: #facc15; /* Gold text for all cells in dark mode */
            }
            th {
                background: #1e293b;
            }
            tr:nth-child(even) td {
                background: #1e293b;
            }
            td:first-child {
                color: #facc15;
            }
            tr.highlight, tr[bgcolor="yellow"] {
                background: linear-gradient(90deg, #facc15 0%, #fde68a 100%);
                color: #23272f !important; /* Always dark text for highlight row */
            }
        }
    </style>
</head>
<body>
<div class="health-table-container">
    <div class="table-responsive">
        <table class="health-table" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
            <tr>
                <td>Mã nhân viên</td>
                <td>{{ $user->code }}</td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>{{ $user->gender }}</td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td>{{ $user->date_of_birth }}</td>
            </tr>
            <tr>
                <td>Tiền sử bệnh</td>
                <td>{{ $user->tien_su_benh }}</td>
            </tr>
            <tr class="highlight">
                <td><strong>Thể lực</strong></td>
                <td><strong>Loại {{ $user->phan_loai_the_luc}}</strong></td>
            </tr>
            <tr>
                <td style="text-indent: 2em">Chiều cao (cm)</td>
                <td align="right">{{ $user->chieu_cao }}</td>
            </tr>
            <tr>
                <td style="text-indent: 2em">Cân nặng (kg)</td>
                <td align="right">{{ $user->can_nang }}</td>
            </tr>
            <tr>
                <td style="text-indent: 2em">Mạch (l/p)</td>
                <td align="right">{{ $user->mach }}</td>
            </tr>
            <tr>
                <td style="text-indent: 2em">Huyết áp (mmHg)</td>
                <td align="right">{{ $user->huyet_ap }}</td>
            </tr>
            <tr>
                <td>Nội tổng quát</td>
                <td>{{ $user->noi_tong_quat }}</td>
            </tr>
            <tr class="highlight">
                <td><strong>Mắt</strong></td>
                <td><strong>Loại {{ $user->phan_loai_mat}}</strong></td>
            </tr>
            <tr>
                <td style="text-indent: 2em">Không kính P10</td>
                <td align="right">{{ $user->khong_kinh_p10 }}</td>
            </tr>
            <tr>
                <td style="text-indent: 2em">Không kính T10</td>
                <td align="right">{{ $user->khong_kinh_t10 }}</td>
            </tr>
            <tr>
                <td style="text-indent: 2em">Có kính P10</td>
                <td align="right">{{ $user->co_kinh_p10 }}</td>
            </tr>
            <tr>
                <td style="text-indent: 2em">Có kính T10</td>
                <td align="right">{{ $user->co_kinh_t10 }}</td>
            </tr>
            <tr>
                <td>Tai mũi họng</td>
                <td>{{ $user->tai_mui_hong }}</td>
            </tr>
            <tr>
                <td>Răng hàm mặt</td>
                <td>{{ $user->rang_ham_mat }}</td>
            </tr>
            <tr>
                <td>Da liễu, ngoại khoa</td>
                <td>{{ $user->da_lieu_ngoai_khoa }}</td>
            </tr>
            <tr>
                <td>Xét nghiệm tế bào</td>
                <td>{{ $user->xet_nghiem_te_bao }}</td>
            </tr>
            <tr>
                <td>Sản phụ khoa</td>
                <td>{{ $user->san_phu_khoa }}</td>
            </tr>
            <tr>
                <td>Kết quả siêu âm bụng</td>
                <td>{{ $user->ket_qua_sieu_am_bung }}</td>
            </tr>
            <tr>
                <td>Kết quả siêu âm tuyến giáp</td>
                <td>{{ $user->ket_qua_sieu_am_tuyen_giap }}</td>
            </tr>
            <tr>
                <td>Kết quả siêu âm vú</td>
                <td>{{ $user->ket_qua_sieu_am_vu }}</td>
            </tr>
            <tr>
                <td>Kết quả X quang</td>
                <td>{{ $user->ket_qua_x_quang }}</td>
            </tr>
            <tr>
                <td>Kết luận xét nghiệm</td>
                <td>{{ $user->ket_luan_xet_nghiem }}</td>
            </tr>
            <tr class="highlight">
                <td><strong>Phân loại chung</strong></td>
                <td><strong>Loại {{ $user->phan_loai }}</strong></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
