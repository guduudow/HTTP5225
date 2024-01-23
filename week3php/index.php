<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkCTA = 'Codecademy';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = '';
            $linkImage = 'w3schools.png';
            $linkCTA = 'W3Schools';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'mozilla.png';
            $linkCTA = 'Mozilla';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';
       // echo '<a href="'.$linkURL.'">' . $linkCTA . '</a>';

        if($linkURL === "") {
            echo '<p>'. $linkCTA . '</p>';
        } else {
            echo '<a href="'.$linkURL.'">' . $linkCTA . '</a>';
        }

        //echo '<img src="'.$linkCTA .'" />';

        echo '<img src="'.$linkImage.'" width="200"/>';
        echo '<p>'.$linkDescription.'</p>';
        ?>

        <!-- define a grade scheme -->
        <?php
        $randomGrade = ceil(rand(1,100));
        if($randomGrade < 60) {
            echo '<p>You need to repeat the first grade with your remedial ass ' . $randomGrade . ' mark</p>';
        } elseif ($randomGrade >= 61 && $randomGrade <= 70) {
            echo '<p>I would fail you if I could, lucky mutha...You got ' . $randomGrade .' </p>';
        } elseif ($randomGrade >= 71 && $randomGrade <= 75) {
            echo '<p>Cs get degrees..You got ' . $randomGrade . '</p>';
        } elseif ($randomGrade >=76 && $randomGrade <=80) {
            echo '<p>Nothing notable, you made it with a ' . $randomGrade. ' LOL</p>';
        } elseif ($randomGrade >=81 && $randomGrade <=85) {
            echo '<p>Decent job with your ' .$randomGrade .' mark</p>';
        } elseif ($randomGrade >=86 && $randomGrade <=90) {
            echo '<p>No comment. You got ' .$randomGrade .' </p>';
        } elseif ($randomGrade > 91) {
            echo '<p>You cheated and I have reported you to the dean. No way you got a ' . $randomGrade .' </p>';
        };
        ?>
        <!-- DAY OF THE WEEK -->
        <?php
        $randomDay = ceil(rand(1,7));
        switch ($randomDay)
        {
            case "1":
                echo "everybody hates mondays";
                break;
            case "2":
                echo "Sonic2's day";
                break;
            case "3":
                echo "hump day";
                break;
            case "4":
                echo "thursday is nothing special";
                break;
            case "5":
                echo "yawm ul jummah";
                break;
            case "6":
                echo "saturday, king of the days";
                break;
            case "7":
                echo "sunday funday";
                break;
            default:
                echo "pick a date, stupid.";
                break;
        }
        ?>
    </body>
</html>
