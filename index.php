<?php
$tok = '1432156605:AAElwtSqwybooXvE3Pnh0l5uhVwu0zWsV4Q';

$update = file_get_contents('php://input');
$update = json_decode($update, true);

echo $mid = $update['message']['message_id'];
$cid = $update['message']['chat']['id'];
$uid = $update['message']['chat']['id'];
$fname = $update['message']['from']['first_name'];
$lname = $update['message']['from']['last_name'];
$uname = $update['message']['from']['username'];
echo $typ = $update['message']['chat']['type'];
$text = $update['message']['text'];
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

elseif ($text == true && $text == '/start' || $text == true && $text = '/start@MissNatasha_Bot') {
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
?>
