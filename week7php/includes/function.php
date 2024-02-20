<?php

function set_message($message){
  $_SESSION['message'] = $message;
}
// checks if message exists and gives the message, then removes it
function get_message(){
  if(isset($_SESSION['message'])) {
    echo '<div class="alert alert-danger" role="alert">'.$_SESSION['message']. '</div>';
    unset($_SESSION['message']);
  }
}