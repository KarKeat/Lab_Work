<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays - Days of the Week</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
    <?php
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

        echo "<p>The days of the week in English are:</p>";
        echo "<p>" . implode(", ", $days) . ".</p>";

        $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Juedi", "Vendredi", "Samedi");

        echo "<p>The days of the week in French are:</p>";
        echo "<p>" . implode(", ", $days) . ".</p>";
    ?>
</body>
</html>