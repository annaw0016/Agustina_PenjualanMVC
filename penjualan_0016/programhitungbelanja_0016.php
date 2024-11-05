<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Diskon</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: linear-gradient(135deg, #ffccbc, #ffab91);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #d84315;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
            color: #e64a19;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ffab40;
            border-radius: 8px;
            font-size: 16px;
            background-color: #fff;
            color: #333;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        select:focus {
            border-color: #f57c00;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #42a5f5;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2196f3;
        }
        h4 {
            color: #00695c;
            margin: 10px 0;
            text-align: center;
            border: 1px solid #004d40;
            border-radius: 8px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kalkulator Diskon Belanja</h1>
        <form method="POST">
            <label for="member">Status Member</label>
            <select name="member" id="member" required>
                <option value="yes">Ya</option>
                <option value="no">Tidak</option>
            </select>

            <label for="total">Total Belanja</label>
            <input type="text" id="total" name="total" placeholder="Masukkan total belanja" required pattern="^\d+(\.\d{1,2})?$">

            <button type="submit" name="submit">Hitung Diskon</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $is_member = $_POST['member'] === 'yes';
            $total_belanja = floatval($_POST['total']);
            $diskon = 0;
            $potongan = 0;

            // Member discounts
            if ($is_member) {
                if ($total_belanja >= 1000000) {
                    $diskon = 15;
                } elseif ($total_belanja >= 500000) {
                    $diskon = 10;
                }
                $potongan = 10; // Fixed potongan for members
            } else {
                // Non-member discounts
                if ($total_belanja >= 1000000) {
                    $diskon = 10;
                } elseif ($total_belanja >= 500000) {
                    $diskon = 5;
                }
            }

            $jumlah_diskon = ($diskon / 100) * $total_belanja;
            $potongan_diskon = ($potongan / 100) * $total_belanja;
            $total_bayar = $total_belanja - $jumlah_diskon - $potongan_diskon;

            if ($diskon > 0) {
                echo "<h4>Diskon: $diskon%</h4>";
                echo "<h4>Jumlah Diskon: Rp " . number_format($jumlah_diskon, 0, ',', '.') . "</h4>";
            }

            if ($potongan > 0) {
                echo "<h4>Potongan: $potongan%</h4>";
                echo "<h4>Jumlah Potongan: Rp " . number_format($potongan_diskon, 0, ',', '.') . "</h4>";
            }

            echo "<h4>Total Bayar: Rp " . number_format($total_bayar, 0, ',', '.') . "</h4>";
        }
        ?>
    </div>
</body>
</html>
