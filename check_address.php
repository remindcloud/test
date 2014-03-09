<?php
/*echo 'your at check_address.php';
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-5ius6voel8bkd8jbnmvgo4gax2npj1h7');
$validateAddress = 'stevensjoshuac@gmail.com';

# Issue the call to the client.
$result = $mgClient->get("address/validate", array('address' => $validateAddress));*/



# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-896drinigv430fkl7iauo6gt03t53z01');
$domain = 'remindcloud.com';
$addressList = 'Alice <alice@example.com>,bob@example.com,example.com';

# Issue the call to the client.
$result = $mgClient->get("domains", array('limit' => 5, 'skip' => 10));

$newResult = $result;

print_r($newResult);

?>