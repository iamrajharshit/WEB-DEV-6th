<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>PHP Calculator</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="num1">Number 1:</label>
        <input type="text" id="num1" name="num1" required><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="text" id="num2" name="num2" required><br><br>
        
        <label for="operator">Operator:</label>
        <select id="operator" name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select><br><br>
        
        <input type="submit" value="Calculate">
    </form>
<!-- php code -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        // Perform arithmetic operations
        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 == 0) {
                    echo "Error: Division by zero";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                echo "Invalid operator";
        }

        // Display the result
        if (isset($result)) {
            echo "Result: $result";
        }
    }
    ?>


