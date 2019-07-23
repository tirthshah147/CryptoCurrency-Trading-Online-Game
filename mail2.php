<?php

 $to='tirthshah147@gmail.com';
 $subject='Successfully Signed Up';
 $message='Hi!'."\n \n Welcome to CryptoCash,\n\n You have Successfully signed up.\n\n Trade, Learn, & Earn paytm cash by completing simple challenges  with CryptoCash.\n \nThank You,\n \nCryptoCash Team ";
 $from="CryptoCashEarn@gmail.com";
 $headers="From:".$from;        
          mail($to,$subject,$message,$headers);
          echo "mail sent";

?>