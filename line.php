 <?php
  

function send_LINE($msg){
 $access_token = 'uZu3rsewKmQ4n4UQauWw2JYZQYL/WKiODoTHK43Yrqo126JKT32dW37jOS0sMpFTQJtNvUsIFLXF+YX84g9E9rMYbx6R+c7FjP940fRuxYIRJPSpIIoDKgA1B6FQGtn3zAfxE4fuHF3fIMpds07NTwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U8f400f332bad6b28e4503c6ee4a055b6',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
