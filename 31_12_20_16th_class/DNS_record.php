<?php

 // $domain = "www.mahrab.lovestoblog.com";
 // //$domain = "www.mahrabstoblog.com";
 // $recordexists = checkdnsrr($domain, "ANY");
 // if ($recordexists)
 // echo "The domain '$domain' has a DNS record!";
 // else
 // echo "The domain '$domain' does not appear to have a DNS record!";

?>


<?php

 // $email = "ceo@example.com";
 // $domain = explode("@",$email);
 // $valid = checkdnsrr($domain[1], "MX");
 // if($valid)
 // echo "The domain has an MX record!";
 // else
 // echo "Cannot locate MX record for $domain[1]!";

?>


<!-- DNS Get all Record -->

<?php

// $result = dns_get_record("www.mahrab.lovestoblog.com");

// echo "<pre>";
// print_r($result);

?>


<?php

 getmxrr("wjgilmore.com", $mxhosts);

 echo "<pre>";
 print_r($mxhosts);

?>

<br>

<?php
 echo "HTTP's default port number is: ".getservbyname("http", "tcp");
?>