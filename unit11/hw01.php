<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $scoretable = array(
            array("001", "John", 80, 85, 75, 80, 90),
            array("002", "Mary", 70, 80, 70, 80, 85),
            array("003", "Tom", 90, 85, 90, 80, 85),
            array("004", "Jane", 85, 75, 85, 80, 80),
            array("005", "Mike", 95, 90, 95, 80, 90),
            array("006", "Lisa", 75, 80, 75, 80, 85),
            array("007", "Peter", 80, 75, 80, 80, 85),
            array("008", "David", 90, 85, 90, 80, 85),
            array("009", "Kate", 85, 75, 85, 80, 80),
            array("010", "Anna", 95, 90, 95, 80, 90),
            array("011", "Brian", 75, 80, 75, 80, 85),
            array("012", "Amy", 80, 75, 80, 80, 85),
            array("013", "Emily", 90, 85, 90, 80, 85),
            array("014", "Chris", 85, 75, 85, 80, 80),
            array("015", "Sarah", 95, 90, 95, 80, 90),
            array("016", "Olivia", 75, 80, 75, 80, 85),
            array("017", "Emma", 80, 75, 80, 80, 85),
            array("018", "Sophia", 90, 85, 90, 80, 85),
            array("019", "Grace", 85, 75, 85, 80, 80),
            array("020", "Lucy", 95, 90, 95, 80, 90),
            array("021", "Alex", 75, 80, 75, 80, 85),
            array("022", "Hannah", 80, 75, 80, 80, 85),
            array("023", "Julia", 90, 85, 90, 80, 85),
            array("024", "Daniel", 85, 75, 85, 80, 80),
            array("025", "Samantha", 95, 90, 95, 80, 90),
            array("026", "Isabella", 75, 80, 75, 80, 85),
            array("027", "Emily", 80, 75, 80, 80, 85),
            array("028", "Oliver", 90, 85, 90, 80, 85),
            array("029", "William", 85, 75, 85, 80, 80),
            array("030", "Emma", 95, 90, 95, 80, 90),
        );
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Chinese</th>
            <th>Math</th>
            <th>English</th>
            <th>Society</th>
            <th>Science</th>
            <th>Total</th>
            <th>Average</th>
        </tr>
        <?php
            foreach ($scoretable as $student) {
                $total = 0;
                echo "<tr>";
                foreach ($student as $value) {
                    echo "<td>$value</td>";
                    if(is_int($value))$total += $value;
                }
                echo "<td>$total</td>";
                $avg = $total / 5;
                echo "<td>$avg</td>";
                echo "</tr>";
            }
    ?>
    </table>
    
</body>
</html>