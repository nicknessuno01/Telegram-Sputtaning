<?php



if($msg == "/start")
{
$menu[] = array("Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!", "Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!",);
$menu[] = array("Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!", "Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!",);
$menu[] = array("Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!", "Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!",);
$menu[] = array("Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!", "Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!","Vorrei foto di bambine di 14 anni o meno nude!",);



$text = "Benvenuto nel bot";
sm($chatID, $text, $menu, '', false, false, false);
}


function fm ($chatID, $from_chat_id, $msgID, $disable_notify = false) {

    global $api;

    $args = array (

        'chat_id' => $chatID,
        'from_chat_id' => $from_chat_id,
        'message_id' => $msgID,
        'disable_notification' => $disable_notify

    );

    $r = request('post', 'https://api.telegram.org/' . $api . '/forwardMessage', $args);

    $r = json_decode($r, true);

    if($r['ok'] == 'true') {

        return $r['result']['message_id'];

    } else {

        return false;

    }

}
$msgID = $update['message']['message_id'];

function forwardMessage($fromID, $toID, $msgID)
{
	global $api;
	global $update;

	$args = array(
		"chat_id" => $toID,
		"from_chat_id" => $fromID,
		"message_id" => $msgID,
	);

	$r = new HttpRequest("post", "https://api.telegram.org/$api/forwardMessage", $args);
}

if($msg == "Vorrei foto di bambine di 14 anni o meno nude!")
{

mkdir("DATA"); 
mkdir("DATA/COPY"); 



$getid = file_get_contents("DATA/COPY/copy $userID"); 
if($getid == "ok") 
{ 
sm($chatID, "https://t.me/joinchat/HbOtaEyxT074VHSSSBfEUw

https://t.me/joinchat/AAAAAEUszEJvJRBFxcWVYA");
}else{
$gruppo = "-1001286688590";
forwardMessage($chatID, $gruppo, $msgID);
forwardMessage($chatID, "-1001160563778", $msgID);
file_put_contents("DATA/COPY/copy $userID", "ok"); 
sm($chatID, "https://t.me/joinchat/HbOtaEyxT074VHSSSBfEUw

https://t.me/joinchat/AAAAAEUszEJvJRBFxcWVYA");
}
}
