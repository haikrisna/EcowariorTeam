<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-size: 16px; /* Atur ukuran font sesuai kebutuhan */
        }
        label, input, button {
            font-size: 16px; /* Atur ukuran font sesuai kebutuhan */
        }
    </style>
</head>
<body>
<form action="{{ route('hitung') }}" method="post">
    @csrf
    <label for="start_year">Tahun Awal:</label>
    <input type="number" name="start_year" id="start_year"><br>

    <label for="end_year">Tahun Akhir:</label>
    <input type="number" name="end_year" id="end_year"><br>

    <button type="submit">Hitung</button>
</form>
</body>
</html>
