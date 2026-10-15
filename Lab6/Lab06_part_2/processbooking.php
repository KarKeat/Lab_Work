<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/register.css">
</head>
<body>
    <header><h1>Rohirrim Dude Ranch</h1></header>

    <article>
        <h1>Rohirrim Tour Booking Confirmation</h1>

        <?php
            // Extract and sanitize input values using isset()
            $firstname = isset($_POST["firstname"]) ? htmlspecialchars($_POST["firstname"]) : "";
            $lastname  = isset($_POST["lastname"])  ? htmlspecialchars($_POST["lastname"])  : "";
            $age       = isset($_POST["age"])       ? htmlspecialchars($_POST["age"])       : "";
            $species   = isset($_POST["species"])   ? htmlspecialchars($_POST["species"])   : "";
            $food      = isset($_POST["food"])      ? htmlspecialchars($_POST["food"])      : "";
            $bookday   = isset($_POST["bookday"])   ? htmlspecialchars($_POST["bookday"])   : "";
            $partysize = isset($_POST["partysize"]) ? htmlspecialchars($_POST["partysize"]) : "";

            // Map species codes to full names
            switch ($species) {
                case "M": $species_name = "Human"; break;
                case "D": $species_name = "Dwarf"; break;
                case "E": $species_name = "Elf"; break;
                case "H": $species_name = "Hobbit"; break;
                default:  $species_name = "Unknown"; break;
            }

            // Check selected booking options (checkboxes)
            $bookings = array();
            if (isset($_POST["accom"])) { $bookings[] = "Accommodation"; }
            if (isset($_POST["4day"]))  { $bookings[] = "4 Day Tour"; }
            if (isset($_POST["10day"])) { $bookings[] = "10 Day Tour"; }

            $booking_text = !empty($bookings) ? implode(", ", $bookings) : "None selected";

            // Output confirmation details
            echo "<p>Welcome <strong>$firstname $lastname</strong>!</p>";
            echo "<p>You have booked: <strong>$booking_text</strong></p>";
            echo "<p>Species: <strong>$species_name</strong></p>";
            echo "<p>Age: <strong>$age</strong></p>";
            echo "<p>Menu preference: <strong>$food</strong></p>";
            echo "<p>Booking date: <strong>$bookday</strong></p>";
            echo "<p>Number of travellers: <strong>$partysize</strong></p>";
        ?>
    </article>

    <footer>
        <p id="contact">Any enquiries please email the <a href="mailto:something@something.com">manager</a></p>
    </footer>
</body>
</html>