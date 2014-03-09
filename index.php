<?php

require 'vendor/autoload.php';

use Mailgun\Mailgun,
    RemindCloud\Events,
    RemindCloud\Message,
    RemindCloud\Db,
    RemindCloud\Settings;


$bugsnag = new Bugsnag_Client("b8e2d7e0c08ef54e3473b459670a518e");
set_error_handler(array($bugsnag, "errorHandler"));
set_exception_handler(array($bugsnag, "exceptionHandler"));

$db = new Db();


$mgClient = new Mailgun('key-896drinigv430fkl7iauo6gt03t53z01');
$pubkey = new Mailgun('pubkey-06e2ednt-8b5s8jz37qued8gs5usb1j3');

$message = new Message('remindcloud.com', $mgClient, $pubkey, $bugsnag, $db);
$event   = new Events('remindcloud.com');

$message->queueBatch();

?>
<!--form action="demo_form.asp" method="get">
    First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    <input type="submit" value="Submit">
</form-->
