<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Daty</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background: #f5f5f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 30px;
            box-sizing: border-box;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-size: 14px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            color: #333;
            font-size: 16px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background: #0072ff;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        .result {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
            margin-top: 20px;
            text-align: center;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>
</head>
<body>
    <div class="container">
        <img src="apteka_logo.png" alt="Apteka Logo" class="logo">
        <form method="post" action="">
            <h2>Kalkulator Daty</h2>
            <label for="datepicker">Wybierz datę:</label>
            <input type="text" id="datepicker" name="selected_date" required>
            <input type="submit" value="Oblicz">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $selectedDate = $_POST["selected_date"];
            $newDate = date('Y-m-d', strtotime($selectedDate . ' + 90 days'));
            $formattedDate = date('d.m.Y', strtotime($newDate));
            echo "<div class='result'><p>Data za 90 dni od $selectedDate to: $formattedDate</p></div>";
        }
        ?>
    </div>
</body>
</html>