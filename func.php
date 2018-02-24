<?php

/*
*   This is the Advanced Usage of Functions,
*   and migrating some html & css into it.
*/

//  first function is to check whether user can get ticket,
//  or he doesn't.
function getTicket($user, $age){
  $ticket = rand(5000, 10000);

  //  if the user is allowed.
  if ($age >= 30) {

    $msg = "Hello, " . $user . " Congratz! :)" . "<br>";
    $msg .= "and your Ticket Id is [ <span>" . $ticket . "</span> ]";

  //  else if user is not allowed.
  } else {

    $msg = "Sorry! Dear " . $user . ", You can't Attend :(" . "<br>";
    $msg .= " as Your age is <span class='not-alloed'>" . $age . "</span> Years old.";

  }

  return $msg;
}

//  get user's name and age.
$id = getTicket("Aabed", 12);

function makeFrame($elem){
  $frame = "<div class ='nice-frame'>";
  $frame .= $elem;
  $frame .= "</div>";

  return $frame;
}

$myElem = makeFrame($id);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Box office</title>
    <style>
        .nice-frame{
          padding: 10px;
          text-align: center;
          width: 400px;
          margin: 20px auto;
          border-radius: 15px;
          background-color: #ECFAFB;
          border: 1px solid #4CC;
          font-family: tahoma, Arial;
      }

      .nice-frame span{
        font-weight: bold;
        color: #4A772F;
      }

      span.not-alloed{
        color: red;
      }
    </style>
  </head>
  <body>
      <?php echo $myElem; ?>
  </body>
</html>
