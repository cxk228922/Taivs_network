<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資訊二甲05江寬泓 10-2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        p {
            font-size: 1.2em;
            color: #333;
        }

        input[type="text"] {
            padding: 10px;
            width: 250px;
            font-size: 1em;
            border: 2px solid #4CAF50;
            border-radius: 5px;
            outline: none;
            margin-bottom: 20px;
        }

        input[type="text"]:focus {
            border-color: #45a049;
        }

        button {
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <?php
        $account = $_POST['account'];
        $password = $_POST['passwd'];
        $ID = $_POST['id'];

        function checkTaiwanID($id) {
            if (!preg_match("/^[A-Z][1-2][0-9]{8}$/", $id)) {
                return false;
            }
        
            $letters = [
                'A' => 10, 'B' => 11, 'C' => 12, 'D' => 13, 'E' => 14,
                'F' => 15, 'G' => 16, 'H' => 17, 'I' => 34, 'J' => 18,
                'K' => 19, 'L' => 20, 'M' => 21, 'N' => 22, 'O' => 35,
                'P' => 23, 'Q' => 24, 'R' => 25, 'S' => 26, 'T' => 27,
                'U' => 28, 'V' => 29, 'W' => 32, 'X' => 30, 'Y' => 31, 'Z' => 33
            ];
        
            $letter = substr($id, 0, 1);
            $number = substr($id, 1);
        
            $letterValue = $letters[$letter];
            $sum = intval($letterValue / 10) + ($letterValue % 10) * 9;
        
            for ($i = 1; $i <= 8; $i++) {
                $sum += $number[$i - 1] * (9 - $i);
            }
        
            $sum += $number[8];
        
            return $sum % 10 === 0;
        }
        if(!checkTaiwanID($ID)){
            echo '<script>alert("Wrong ID")</script>';
            return 0;
        }
        echo 'Your Account : '.$account.'<br>';
        echo 'Your Password : '.$password.'<br>';
        echo 'Your ID : '.$ID.'<br>';
    ?>
    
</body>
</html>