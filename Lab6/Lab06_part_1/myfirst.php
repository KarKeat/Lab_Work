<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Variables, Arrays, and If Statements</title>
</head>
<body>
    <h1>PHP Variables, Arrays, and Control Structures</h1>
    <?php
        // Declare and initialize an array with values 85, 85, 95
        $marks = array(85, 85, 95);

        // Modify the second element (index 1) to 90
        $marks[1] = 90;

        // Calculate average
        $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;

        // Determine status using if statement
        if ($ave >= 50) {
            $status = "PASSED";
        } else {
            $status = "FAILED";
        }

        // Display results
        echo "<p>The average mark is " . round($ave, 2) . ".</p>";
        echo "<p>Status: " . $status . "</p>";
    ?>
</body>
</html>