<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        #response {
            margin-top: 20px;
            font-size: 1.2em;
            color: #d9534f;
        }
    </style>
</head>
<body>
    <?php
        $name = $_POST['userInput'];
        echo "Your Input: $name<br>";
        echo "string length : ".strlen($name);
    ?>
</body>
</html>