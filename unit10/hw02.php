<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap">
    
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
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        echo 'a + b = '.($a+ $b).'<br>';
        echo 'a - b = '.($a- $b).'<br>';
        echo 'a * b = '.($a* $b).'<br>';
        echo 'a / b = '.($a/ $b).'<br>';
        echo 'a % c = '.($a% $c).'<br>';
        echo 'a + 1 = '.($a+ 1).'<br>';
        echo 'c - 1 = '.($c- 1).'<br>';
    ?>
</body>
</html>