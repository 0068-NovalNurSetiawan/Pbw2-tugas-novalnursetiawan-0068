<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tampilan.css">    
    <title>Hitung Total Pembelian Belanjaan</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Hitung Total Pembelian Belanjaan</h1>
        <form method="post" class="mt-4">
            <div class="form-group">
                <label for="nama">Nama Pembeli:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="total">Total Pembelian:</label>
                <input type="number" step="0.01" class="form-control" id="total" name="total" required>
            </div>
            <div class="form-group">
                <label>Status Member:</label><br>
                <input type="radio" id="member" name="member" value="yes" required>
                <label for="member">Member</label>
                <input type="radio" id="non-member" name="member" value="no" required>
                <label for="non-member">Bukan Member</label>
            </div>
            <button type="submit" class="tombol">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']); // Mengambil nama pembeli
            $total = $_POST['total'];
            $IniMember = $_POST['member'] === 'yes';
            $discount = 0;

            // Hitung diskon
            if ($IniMember) {
                $discount = 0.1; // Diskon 10% untuk member
                if ($total >= 500000) {
                    $discount += 0.1; // Tambahan diskon 10%
                } elseif ($total >= 300000) {
                    $discount += 0.05; // Tambahan diskon 5%
                }
            } else {
                if ($total >= 500000) {
                    $discount = 0.1; // Diskon 10% untuk non-member
                }
            }

            // Hitung total setelah diskon
            $totsetdis = $total - ($total * $discount);
            echo "<div class='mt-4 alert alert-success'>";
            echo "<strong>Nama Pembeli:</strong> " . $nama . "<br>";
            echo "<strong>Total Pembelian :</strong> Rp " . number_format($total, 2, ',', '.') . "<br>";
            echo "<strong>Diskon yang Diterima: </strong> " . ($discount * 100) . "%<br>";
            echo "<strong>Total Pembelian Setelah Diskon: </strong> Rp " . number_format($totsetdis, 2, ',', '.') . "<br>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
