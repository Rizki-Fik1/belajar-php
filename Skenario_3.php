<?php
$jadwal = [
    ["waktu" => "15:30 - 15:45", "kegiatan" => "Pulang sekolah dan tiba di rumah"],
    ["waktu" => "15:45 - 16:15", "kegiatan" => "Mengaji setelah mandi"],
    ["waktu" => "16:15 - 18:15", "kegiatan" => "Mengerjakan tugas sekolah"],
    ["waktu" => "18:15 - 18:50", "kegiatan" => "Sholat maghrib dan makan malam"],
    ["waktu" => "18:50 - 19:15", "kegiatan" => "Sholat isya"],
    ["waktu" => "19:15 - 19:45", "kegiatan" => "Menghafalkan dialog festival"],
    ["waktu" => "19:45 - 20:15", "kegiatan" => "Chatting dengan Raya (Persiapan festival)"],
    ["waktu" => "20:15 - 20:45", "kegiatan" => "Membeli bumbu masakan"],
    ["waktu" => "20:45 - 21:15", "kegiatan" => "Berkumpul dan mengobrol dengan keluarga"],
    ["waktu" => "22:00 - 04:00", "kegiatan" => "Tidur"],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Harian Andi</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 60%; border-collapse: collapse; margin: 20px auto; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 align="center">Jadwal Harian Andi</h2>
    <table>
        <tr>
            <th>Waktu</th>
            <th>Kegiatan</th>
        </tr>
        <?php foreach ($jadwal as $item): ?>
            <tr>
                <td><?php echo $item["waktu"]; ?></td>
                <td><?php echo $item["kegiatan"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
