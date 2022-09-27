<?php
// error_reporting(E_ALL);
//   ini_set('display_errors', '1');

function htmlMail($t, $sub, $name, $teamname, $event){


    $to = $t;

    $subject = $sub;

    $html = "<!DOCTYPE html>
              <html>
                  <head>
                      <style>
                          li{
                              padding:10px;
                          }
                          p{
                              font-size:16px;
                          }

                          *{
                              font-family:Helvetica,Arial,sans-serif;
                          }

                          h2{
                              text-align: center;
                              margin-top: 150px;

                          }
                          html, body{
                              background-color:#f7f9fb;
                              margin: 0;
                          }
                          .context {
                              font-size: 12px;
                              padding: 40px 60px;
                              margin-left:10%;
                              margin-right: 10%;
                          }

                          .context p{
                              font-size: 12px;
                          }
                          p{
                              margin: 15px 0px;
                          }

                      </style>
                  </head>
                  <body>

                      <div style='background: #0b0b0b; padding:10px 30px;'><img src='https://www.ecellvnit.org/img/logo-ecell.png'></div>
                      <h2 style='font-size:22px;'>Welcome to C-Suites | E-Cell VNIT</h2><br>

                      <div class='context'>


                          <h3><b>Greetings ".$name."!</b></h3>


                          <p>Thank You for registering! You are now a part of the community of dreamers and innovators of VNIT Nagpur, <b>The C-Suites</b>.</p>
                          <div>
                              <p>We are well pleased to have you on board.<br/>
                              <p>We will contact you soon to brief you about planned activities.<br/>
                              For queries and in case of any difficulty, feel free to contact us.<br>
                              Lakshya: +91 77384 46941<br>
                                  <p>
                                  With warm regards,<br>
                                  E-Cell VNIT
                              </p>


                          </div>
                      </div>
                  </body>
              </html>";

    $url = 'https://startupconclave.ecellvnit.org/send';
    $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => '21Cont@ct22');

    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) {
        $msg = 'We are facing problem in sending email. Please use this link to pay your registration fees.';
        return false;
    }

    return true;

  }
?>
