<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng Hai Số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(241, 167, 167);
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 350px;
            background: #fff;
            padding: 20px;
            margin: 50px auto;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            margin-top: 15px;
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .result {
            margin-top: 15px;
            font-size: 18px;
            color: #d63384;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thêm sản phẩm</h2>
        <form action="{{ url('/tinhtong') }}" method="POST">
            @csrf
            <label for="a">Nhập số A:</label>
            <input type="number" name="a" id="a" required value="{{ $a ?? '' }}">

            <label for="b">Nhập số B:</label>
            <input type="number" name="b" id="b" required value="{{ $b ?? '' }}">
            <button type="submit">Tính Tổng</button>
        </form>
        @if(isset($tong))
            <div class="result">Kết quả: {{ $a }} + {{ $b }} = {{ $tong }}</div>
        @endif
    </div>
</body>
</html>
