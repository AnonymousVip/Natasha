<?php
error_reporting(0);
$tok = '1432156605:AAElwtSqwybooXvE3Pnh0l5uhVwu0zWsV4Q';

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
global $dadel;
$update = file_get_contents('php://input');
$update = json_decode($update, true);

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
$pid = $update['message']['reply_to_message']['message_id'];
#################################################
    $lfname = $update['message']['left_chat_member']['first_name'];
    $llname = $update['message']['left_chat_member']['last_name'];
$reply_message = $update['message']['reply_to_message'];
$reply_message_id = $update['message']['reply_to_message']['message_id'];
$reply_message_user_id = $update['message']['reply_to_message']['from']['id'];
$reply_message_text = $update['message']['reply_to_message']['text'];
$reply_message_user_fname = $update['message']['reply_to_message']['from']['first_name'];
$reply_message_user_lname = $update['message']['reply_to_message']['from']['last_name'];
$reply_message_user_uname = $update['message']['reply_to_message']['from']['username'];
#######################################################################################
###########################CALL BACK DATA##############################################
$callback = $update['callback_query'];
$callback_id = $update['callback_query']['id'];
$callback_from_id = $update['callback_query']['from']['id'];
$callback_from_uname = $update['callback_query']['from']['username'];
$callback_from_fname = $update['callback_query']['from']['first_name'];
$callback_from_lname = $update['callback_query']['from']['last_name'];
$callback_user_data = $update['callback_query']['data'];
$callback_message_id = $update['callback_query']['message']['id'];
$cbid = $update['callback_query']['message']['chat']['id'];
$cbmid = $update['callback_query']['message']['message_id'];



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
elseif ($text == '/start' || $text == '/start@MissNatasha_Bot' || $text== '/start@MissNatasha_bot') {
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
elseif (startsWith($text,'/dp')) {
	$check = $update['message']['reply_to_message'];
	$uud = $update['message']['reply_to_message']['from']['id'];
	 if ($check == true) {
		$da=['user_id'=>"$uud"];
		botaction("getUserProfilePhotos",$da);
		 $count = $dadel['result']['total_count'];
		 if ($count == 0) {
		 	$cmsd = [
		 		'chat_id'=> $cid,
		 		'reply_to_message_id'=> $mid,
		 		'text' => "That Nibba Has No DP's!!"
		 	];
		 	botaction("sendMessage", $cmsd);
		 }
		 else{
		$dad = 0;
		$out = '';
		for ($i=0; $i <$count ; $i++) { 
			  $fid = $dadel['result']['photos'][$dad]['0']['file_id'];
			 $dams =   "$fid,";
			  $out .= $dams;
			 // echo $out;
			 $dad++;
		}
		$exout = explode(',', $out);
		foreach ($exout as $key) {
			$snp = [
				'chat_id'=>"$cid",
			    'photo'=>"$key",
			];
			 botaction("sendPhoto", $snp);
		}

}
}
	else{
		$mean=[
    	'chat_id' => ''.$cid.'',
    	'text' => "Reply To A User's Message",
        'reply_to_message_id'=>''.$mid.'',
];
	botaction("sendMessage",$mean);
	print_r($dadel);
	}

}
if (startsWith($text,'/ping')) {
	$ping_message = [
		'chat_id'=>$cid,
		'text'=>'Pinging',
		'reply_to_message_id'=>$mid
	];
	$edit_id = (int)$mid+1;
	$start_time = microtime(true);
	// botaction("sendMessage",$ping_message);

	$url2 = "https://api.telegram.org/bot$tok/sendMessage";
    $curld2 = curl_init();
    curl_setopt($curld2, CURLOPT_POST, true);
    curl_setopt($curld2, CURLOPT_POSTFIELDS, $ping_message);
    curl_setopt($curld2, CURLOPT_URL, $url2);
    curl_setopt($curld2, CURLOPT_RETURNTRANSFER, true);
    $output2 = curl_exec($curld2);
    curl_close($curld2);
    $damn = json_decode($output2,true);
	$editing_id = $damn['result']['message_id'];
	$end_time = microtime(true); 
	$ping_time = ($end_time - $start_time)*1000; 
	$ping_time = number_format((float)$ping_time, 3, '.', '')." ms";
	$ping_message_to_send = "                              
█▀█ █▀█ █▄░█ █▀▀
█▀▀ █▄█ █░▀█ █▄█
<b>Time Taken</b> => <code>$ping_time</code>";
	$ping_edit_message=[
		'chat_id'=>$cid,
		'message_id'=>$editing_id,
		'text'=>"$ping_message_to_send",
		'parse_mode'=>'HTML'
	];
	botaction("editMessageText",$ping_edit_message);
 print_r($dadel);
}
if (startsWith($text,'/past')) {
    if ($reply_message == true) {
$paste = [
'content'=> $reply_message_text
];
  $curl3 = curl_init();
    curl_setopt($curl3, CURLOPT_URL,"https://nekobin.com/api/documents");
    curl_setopt($curl3, CURLOPT_POST, 1);
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $paste);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl3, CURLOPT_SSL_VERIFYPEER, 0);
$response3 = curl_exec($curl3);
$json = json_decode($response3,true);

if ($json['ok']== '1') {
    $key = $json['result']['key'];
    $urrl = "https://nekobin.com/$key";
    $raw = "https://nekobin.com/raw/$key";
    $textt = "Pasted Successfully To *Nekobin*!! \n<b>Paste Url</b> : $urrl\n<b>Raw Url</b> :$raw";
    $send_paste = [
        'chat_id'=>$cid,
        'text'=>$textt,
        'parse_mode'=>'HTML',
        'reply_to_message_id'=>$mid,
        'disable_web_page_preview'=>'True',
    ];
    botaction("sendMessage",$send_paste);
}
else{
    $error_paste_text = $json['error'];
    $error_paste = [
        'chat_id'=>$cid,
        'text'=>$error_paste_text,
        'reply_to_message_id'=>$mid,
    ];
    botaction("sendMessage",$error_paste);
    }
}
else{
    $reply_error = [
        'chat_id'=>$cid,
        'text'=>'Whadya Want To Paste????',
        'reply_to_message_id'=>$mid
    ];
    botaction("sendMessage",$reply_error);
}
}
    if (startsWith($text,'/logo')) {
        ########LINKSIND##########
    $font_genarate_text1 = str_replace('/logo', "", $text);
    $font_genarate_text = str_replace(' ', "", $font_genarate_text1);
    if ($font_genarate_text == '') {
        echo "hell";
        $send_error = [
            'chat_id'=>$cid,
            'reply_to_message_id'=>$mid,
            'parse_mode'=>'HTML',
            'text'=>"<b>Please Give Me Some Text For Generating Dude..</b>"
        ];
        botaction("sendMessage",$send_error);
    }
    else{
$font_list = array("https://www.linksind.net/tigerzindahai/spyder.php?name=$font_genarate_text&back=style2.jpg","https://linksind.net/arjunreddy/spyder.php?name=$font_genarate_text&back=style1.jpg","https://www.linksind.net/robo/spyder.php?name=$font_genarate_text&back=5.jpg","https://linksind.net/maari/spyder.php?name=$font_genarate_text&back=style1.jpg","https://linksind.net/cskjersey/spyder.php?name=$font_genarate_text&back=style1.jpg","https://www.linksind.net/padmavati/spyder.php?name=$font_genarate_text&back=style6.jpg","http://moviefontgenerator.com/krack/spyder.php?name=$font_genarate_text&back=default.jpg","https://linksind.net/dhonicdp/spyder.php?name=$font_genarate_text&back=style1.jpg","https://linksind.net/radheshyam/spyder.php?name=$font_genarate_text&back=style1.jpg","https://linksind.net/kohlijersey/spyder.php?name=$font_genarate_text&back=style1.jpg","https://linksind.net/gangleader/spyder.php?name=$font_genarate_text&back=default.jpg","https://linksind.net/baitikochichusthey/spyder.php?name=$font_genarate_text&back=default.jpg","https://linksind.net/adipurush/spyder.php?name=$font_genarate_text&back=default.jpg","
https://linksind.net/rrr/spyder.php?name=$font_genarate_text&back=style1.jpg");

        $font = $font_list[mt_rand(0,13)];

        $send_photo = [
        'chat_id' => ''.$cid.'',
        'caption' => '<b>Your Logo Is Generated Successfully....</b>',
        'parse_mode' => 'HTML',
        'reply_to_message_id'=>''.$mid.'',
        'photo'=>"$font"
    ];
    botaction("sendPhoto",$send_photo);
    }
    }
?>
