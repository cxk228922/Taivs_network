<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資訊二甲05江寬泓 10-3</title>
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

        function validateTaiwanID($id) {
    // 檢查長度是否為10
    if (strlen($id) != 10) {
        return false;
    }

    $id = strtoupper($id); // 轉換為大寫

    // 使用正則表達式檢查格式
    if (!preg_match("/^[A-Z][12][0-9]{8}$/", $id)) {
        return false;
    }

    // 字母對應的數字
    $letters = array(
        'A' => 10, 'B' => 11, 'C' => 12, 'D' => 13, 'E' => 14,
        'F' => 15, 'G' => 16, 'H' => 17, 'I' => 34, 'J' => 18,
        'K' => 19, 'L' => 20, 'M' => 21, 'N' => 22, 'O' => 35,
        'P' => 23, 'Q' => 24, 'R' => 25, 'S' => 26, 'T' => 27,
        'U' => 28, 'V' => 29, 'W' => 32, 'X' => 30, 'Y' => 31,
        'Z' => 33
    );

    $c1 = $id[0]; // 取得第一個字母
    $n1 = $letters[$c1]; // 對應的數字

    $n1a = intval($n1 / 10); // 字母數字的十位數
    $n1b = $n1 % 10; // 字母數字的個位數

    // 權重
    $weights = array(1, 9, 8, 7, 6, 5, 4, 3, 2, 1, 1);

    // 將所有數字組成陣列
    $digits = array();
    $digits[] = $n1a;
    $digits[] = $n1b;
    for ($i = 1; $i < 10; $i++) {
        $digits[] = intval($id[$i]);
    }

    // 計算總和
    $checksum = 0;
    for ($i = 0; $i < 11; $i++) {
        $checksum += $digits[$i] * $weights[$i];
    }

    // 檢查總和除以10的餘數是否為0
    return ($checksum % 10) == 0;
}
        if(!validateTaiwanID($ID)){
            echo '<script>alert("Wrong ID")</script>';
            return 0;
        }
        echo 'Your Account : '.$account.'<br>';
        echo 'Your Password : '.$password.'<br>';
        echo 'Your ID : '.$ID.'<br>';
    ?>
    
</body>
</html>
