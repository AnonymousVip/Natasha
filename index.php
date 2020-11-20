<?php
error_reporting(0);
$tok = '1460475980:AAFoK03PMQ4T8IQUv-IQzVfRml67iueDPk4';

function botaction($method, $data){
	global $tok;
	global $dadel;
	global $dueto;
    $url = "https://api.telegram.org/bot$tok/$method";
    $curld = curl_init();
    curl_setopt($curld, CURLOPT_POST, true);
    curl_setopt($curld, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curld, CURLOPT_URL, $url);
    curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($curld);
    curl_close($curld);
    $dadel = json_decode($output,true);
    $dueto = $dadel['description'];
    return $output;
}
function startsWith ($string, $startString) 
{ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
}

$update = file_get_contents('php://input');
$update = json_decode($update, true);

echo $mid = $update['message']['message_id'];
$cid = $update['message']['chat']['id'];
$uid = $update['message']['chat']['id'];
$fname = $update['message']['from']['first_name'];
$lname = $update['message']['from']['last_name'];
$uname = $update['message']['from']['username'];
echo $typ = $update['message']['chat']['type'];
echo $text = $update['message']['text'];
$fullname = ''.$fname.''.$lname.'';

##################NEW MEMBER DATA ################
$gname = $update['message']['chat']['title'];
$nid = $update['message']['new_chat_member']['id'];
$nfname = $update['message']['new_chat_member']['first_name'];
$nlname = $update['message']['new_chat_member']['last_name'];
$nuname = $update['message']['new_chat_member']['username'];
$nfullname = ''.$nfname.''.$nlname.'';




print_r($update);
 $message = "<b>Hey! $fullname,\nI am Nat[Natasha] \nI Will Help You In Checking Your Account Info And Including Your Id... \nType /info To Get Your Account Info\nBot Made By => @Anonymous_Vip2 \n</b>";


print_r($update['message']['new_chat_member']);

########################WISHING WELCOM##################
if ($update['message']['new_chat_member'] == true) {


if ($nid == '1432156605') {
	$mymes = "Hey $fullname ! Thank You For Adding Me In The Group. Now I Will Be On My Work 👍👍";

	$post3 = [
        'chat_id' => ''.$cid.'',
        'text' => ''.$mymes.'',
        'reply_to_message_id'=>''.$mid.'',
           ];

	    $curl3 = curl_init();
    curl_setopt($curl3, CURLOPT_URL,"https://api.telegram.org/bot$tok/sendMessage?");
    curl_setopt($curl3, CURLOPT_POST, 1);
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $post3);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl3, CURLOPT_SSL_VERIFYPEER, 0);
$response3 = curl_exec($curl3);
echo $response3;

}
else{

	$welcome = "Hey There $nfullname! Welcome To $gname.. How Are You???";
	 $post = [
        'chat_id' => ''.$cid.'',
        'text' => ''.$welcome.'',
        'reply_to_message_id'=>''.$mid.'',
            ];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,"https://api.telegram.org/bot".$tok."/sendMessage?");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($curl);
echo $response;
}
}

#############################WISHING GOODBYE####################
elseif ($update['message']['left_chat_member'] == true) {
	$lfname = $update['message']['left_chat_member']['first_name'];
	$llname = $update['message']['left_chat_member']['last_name'];

$lfullname = ''.$lfname.''.$llname.'';
$mas = "This Is Not Fair $lfullname ! 😭😭";
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$tok/sendMessage?chat_id=$cid&reply_to_message_id=$mid&text=$mas&parse_mode=HTML"); 
curl_setopt($ch, CURLOPT_POST, false); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch); 
$json1 = json_decode($output,true);
curl_close($ch);
echo $output;
}

elseif ($text == '/start' || $text == '/start@MissNatasha_Bot' || $text == '/start@MissNatasha-bot') {
	$start_message = "
	<b>Hey $fullname ! Nice To Meet You, Well I am <u>Natasha</u>, A 9 Year Old Girl.</b>



	<b><u>I can Help You In Wishing Your New Group Members...</u></b>


	<b>To Add Me In Your Group Kindly Click The [Add Me To Group] Button Below..


	Since I Am Small I can Only Say Wishes And Goodbye's To People...</b>



	P.S => Custom Welcome And Goodbye Messages Will Be Available Soon 🥰🥰🥰";

	$keyboard = [
    'inline_keyboard' => [
        [
            ['text' => '➕ Add Me To Your Group ➕', 'url' => 't.me/MissNatasha_Bot/?startgroup=true']
        ]
    ]
];
$encodedKeyboard = json_encode($keyboard);
    $post1 = [
        'chat_id' => ''.$uid.'',
        'caption' => ''.$start_message.'',
        'parse_mode' => 'HTML',
        'reply_to_message_id'=>''.$mid.'',
        'reply_markup' => $encodedKeyboard,
        'photo'=>'https://telegra.ph/file/ee7f189f15a0a173270a0.jpg',
    ];
    $post2 =[
    	'chat_id' => ''.$uid.'',
        'text' => 'Hey ! PM Me If You Have Any Questions 😏',
        'reply_to_message_id'=>''.$mid.'',
];
if ($typ == 'private') {
        $curl1 = curl_init();
    curl_setopt($curl1, CURLOPT_URL,"https://api.telegram.org/bot$tok/sendPhoto?");
    curl_setopt($curl1, CURLOPT_POST, 1);
    curl_setopt($curl1, CURLOPT_POSTFIELDS, $post1);
    curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl1, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl1, CURLOPT_SSL_VERIFYPEER, 0);
$response1 = curl_exec($curl1);
echo $response1;
}
else{
	$curl2 = curl_init();
    curl_setopt($curl2, CURLOPT_URL,"https://api.telegram.org/bot$tok/sendMessage?");
    curl_setopt($curl2, CURLOPT_POST, 1);
    curl_setopt($curl2, CURLOPT_POSTFIELDS, $post2);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, 0);
$response2 = curl_exec($curl2);
echo $response2;
}
}
elseif(startsWith($text,'/id')){
$mussu = "This Chat's Id Is : <code>$cid</code>";
$post4 =[
    	'chat_id' => ''.$uid.'',
        'text' => ''.$mussu.'',
        'parse_mode'=>'HTML',
        'reply_to_message_id'=>''.$mid.'',
];
    $curl3 = curl_init();
    curl_setopt($curl3, CURLOPT_URL,"https://api.telegram.org/bot$tok/sendMessage?");
    curl_setopt($curl3, CURLOPT_POST, 1);
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $post4);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl3, CURLOPT_SSL_VERIFYPEER, 0);
$response3 = curl_exec($curl3);
echo $response3;	
}
elseif (startsWith($text,'/dul')) {
	$reply_message = $update['message']['reply_to_message'];
	$mi2d = $update['message']['reply_to_message']['message_id'];
	if ($reply_message == true) {
		$pose2 =[
    	'chat_id' => ''.$cid.'',
        'message_id'=>''.$mi2d.'',
];
		$curl232 = curl_init();
    curl_setopt($curl232, CURLOPT_URL,"https://api.telegram.org/bot$tok/deleteMessage?");
    curl_setopt($curl232, CURLOPT_POST, 1);
    curl_setopt($curl232, CURLOPT_POSTFIELDS, $pose2);
    curl_setopt($curl232, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl232, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl232, CURLOPT_SSL_VERIFYPEER, 0);
$resp22 = curl_exec($curl232);
echo $resp22;

$pose23 =[
    	'chat_id' => ''.$cid.'',
        'message_id'=>''.$mid.'',
];
print_r($pose23);
		$curl2323 = curl_init();
    curl_setopt($curl2323, CURLOPT_URL,"https://api.telegram.org/bot$tok/deleteMessage?");
    curl_setopt($curl2323, CURLOPT_POST, 1);
    curl_setopt($curl2323, CURLOPT_POSTFIELDS, $pose23);
    curl_setopt($curl2323, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2323, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl2323, CURLOPT_SSL_VERIFYPEER, 0);
$resp223 = curl_exec($curl2323);
echo $resp223;
$repo = json_decode($resp223,true);
$exception =  $repo['description'];

 if ($exception == true) {
    $ch = curl_init();
    $messw = urlencode("Make Sure That I am Admin In this Group.. I Am Not Able To Delete Messages");
    curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot$tok/sendMessage?chat_id=$cid&text=$messw&reply_to_message_id=$mid");
  curl_setopt($ch, CURLOPT_POST, false); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch); 
$json1 = json_decode($output,true);
curl_close($ch);
//echo $output;
 }
		
	}
	else{
		$pose =[
    	'chat_id' => ''.$uid.'',
        'text' => 'Reply To A Message To Delete It',
        'reply_to_message_id'=>''.$mid.'',
];
    $curl23 = curl_init();
    curl_setopt($curl23, CURLOPT_URL,"https://api.telegram.org/bot$tok/sendMessage?");
    curl_setopt($curl23, CURLOPT_POST, 1);
    curl_setopt($curl23, CURLOPT_POSTFIELDS, $pose);
    curl_setopt($curl23, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl23, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl23, CURLOPT_SSL_VERIFYPEER, 0);
$resp2 = curl_exec($curl23);
echo $resp2;
	}
}
elseif(startsWith($text,'/pun')){
	$pose1z1 =[
    	'chat_id' => ''.$cid.'',
    	'message_id' => ''.$pid.'',
];
    $curl2a = curl_init();
    curl_setopt($curl2a, CURLOPT_URL,"https://api.telegram.org/bot$tok/pinChatMessage?");
    curl_setopt($curl2a, CURLOPT_POST, 1);
    curl_setopt($curl2a, CURLOPT_POSTFIELDS, $pose1z1);
    curl_setopt($curl2a, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2a, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl2a, CURLOPT_SSL_VERIFYPEER, 0);
$resp2a = curl_exec($curl2a);
echo $resp2a;
$meswa = json_decode($resp2a,true);
$reason = $meswa['description'];
if ($meswa['description'] == true) {
	$pose11z1 =[
    	'chat_id' => ''.$cid.'',
    	'text' => "Unable To Pin Message \nReason => $reason",
        'reply_to_message_id'=>''.$mid.'',
];
    $curl12a = curl_init();
    curl_setopt($curl12a, CURLOPT_URL,"https://api.telegram.org/bot$tok/sendMessage?");
    curl_setopt($curl12a, CURLOPT_POST, 1);
    curl_setopt($curl12a, CURLOPT_POSTFIELDS, $pose11z1);
    curl_setopt($curl12a, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl12a, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl12a, CURLOPT_SSL_VERIFYPEER, 0);
$resp21a = curl_exec($curl12a);
echo $resp21a;
}
}
elseif(startsWith($text,'/upun')){
	$fre =[
    	'chat_id' => ''.$cid.'',
];
print_r($fre);
    $der = curl_init();
    curl_setopt($der, CURLOPT_URL,"https://api.telegram.org/bot$tok/unpinChatMessage?");
    curl_setopt($der, CURLOPT_POST, 1);
    curl_setopt($der, CURLOPT_POSTFIELDS, $fre);
    curl_setopt($der, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($der, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($der, CURLOPT_SSL_VERIFYPEER, 0);
$resp2a2 = curl_exec($der);
echo $resp2a2;
$meswa2 = json_decode($resp2a,true);
$reason2 = $meswa['description'];
if ($meswa2['description'] == true) {
	$pose11z12 =[
    	'chat_id' => ''.$cid.'',
    	'text' => "Unable To UnPin Message \nReason => $reason2",
        'reply_to_message_id'=>''.$mid.'',
];
    $curl12a2 = curl_init();
    curl_setopt($curl12a2, CURLOPT_URL,"https://api.telegram.org/bot$tok/sendMessage?");
    curl_setopt($curl12a2, CURLOPT_POST, 1);
    curl_setopt($curl12a2, CURLOPT_POSTFIELDS, $pose11z12);
    curl_setopt($curl12a2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl12a2, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl12a2, CURLOPT_SSL_VERIFYPEER, 0);
$resp21a2 = curl_exec($curl12a2);
echo $resp21a2;
}
}
elseif (startsWith($text,'/uall')) {
	$free =[
    	'chat_id' => ''.$cid.'',
];
echo botaction("unpinAllChatMessages", $free);
echo $output['description'];
if ($dadel['description'] == true) {
	$desa =[
    	'chat_id' => ''.$cid.'',
    	'text' => "Unable To UnPin Messages \nReason => $dueto",
        'reply_to_message_id'=>''.$mid.'',
];
echo botaction("sendMessage", $desa);
}
}
?>
