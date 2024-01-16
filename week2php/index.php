<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  <?php

    echo '<h1>PHP and Creating Output</h1>'

    ?>
  
    <?php echo '<p>The PHP echo command can be used to create output.</p>' ?>

    <?php echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>' ?>
    
    <?php echo 
    '<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>' ?>
    
    <?php echo '<h2>More HTML to Convert</h2>' ?>

    <?php echo '<p>PHP says "Hello World!"</p>' ?>

    <?php echo "<p>Can you display a sentence with ' and \"?</p>" ?> 


    <?php echo '<img src="php-logo.png">'?>

    <img src="<?php echo 'https://placehold.co/600x400' ; ?>" alt="">


    <!-- PHP Variables -->

    <?php 
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com';
    $linkImage = '<img src="codecademy.png">';
    $linkDescription = 'learn to code interactively, for free';
    ?>

    <?php echo $linkName; ?>


    
    <a href="<?php echo $linkURL ?>">
    <?php echo '<h1>'.$linkImage.'</h1>'; ?>
  </a>

  <!-- PHP Arrays -->
<?php 
$person['first'] = 'Ederes';
$person['last'] = 'Gure';
echo '<h2>Hello '.$person['first'].' '.$person['last'].'!</h2>';
?>

<?php 
$languages = array ('PHP', "HTML", "CSS", "JavaScript");
?>
<?php 
  echo '<h1>'.$languages[0].'</h1>';
?>

<?php
    
    $link['name'] = 'Codecademy';
    $link['url'] = 'https://www.codecademy.com/';
    $link['image'] = '<img src="codecademy.png">';
    $link['description'] = 'Learn to code interactively, for free.';
    
    ?>
    <?php 
    echo '<h1>'.$link['name'].'</h1>';
    ?>
  </body>
</html>