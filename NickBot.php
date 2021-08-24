<?php 
ob_start();
$API_KEY = "1936987579:AAFnSlE9bM-rKaUfW0g88JUCnk6aFWGW8ic";#توكن البوت
define('API_KEY',$API_KEY);
#---
function MrDG($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}

#-----------------(Yosh_coders)--------------------#

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;

$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@MrDGBOTS&user_id=".$from_id));
$per = $info->result->status;
if ($per == 'left') {
if (!in_array($chat_id, $us)) {
file_put_contents("gm.txt", $chat_id."\n",FILE_APPEND);
}
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 ⚠️ عليك الأشتراك في القناة اولآ
bot yaratuvchi @yaxshiyigit531
"
]);
} else {

#-----------------(Start)--------------------#

if($text == '/start'){
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
َ
ℓ🌹- [Bot yaratuvchi](t.me/@muzika_vkm_bass_musiqalar )
-
ℓ⚙️- Bizni jamoa sizni hech qochon aldamaydi !!!
ℓ⚠️- Bot kodi hech kimga berilmaydi 
-
ℓ📌- [Bot yaratuvchi](t.me/@muzika_vkm_bass_musiqalar )
ℓ📌- Yanada koproq qiziqarli bot ochishga harakat qilamiz
-
ℓ👨🏼‍💻- [Bizni jamoamiz](t.me/@muzika_vkm_bass_musiqalar)
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"♻️- Channel -♻️", 'url'=>"t.me/@muzika_vkm_bass_musiqalar"]
],
]
])
]);
}
if($_GET['s']){
$text = 'sssasa';
echo $count = count($text); 
}

#-----------------(coderlar)--------------------#

if($text != '/start'and$text!='/us'){
$items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '💝🎀﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-🐥✨﴿ֆ ❥ ', '•|• 〄💖‘',
' ⚡️💊 •|•℡', '- ⁽🌷✨₎ֆ', '❥┇👑🔥“', '💜💭℡ֆ', '-┆💙👒♕', '- ⁽🎩🍿₎ֆ',
'“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
'℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽💎🌩₎⇣✿',
'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥🎃 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
#-----------------(Mroan-1)--------------------#
$MrDG = str_replace('a', 'α', $text);
$MrDG = str_replace('b', 'в', $MrDG);
$MrDG = str_replace('c', '¢', $MrDG);
$MrDG = str_replace('d', '∂', $MrDG);
$MrDG = str_replace('e', 'є', $MrDG);
$MrDG = str_replace('f', 'ƒ', $MrDG);
$MrDG = str_replace('g', 'g', $MrDG);
$MrDG = str_replace('h', 'н', $MrDG);
$MrDG = str_replace('i', 'ι', $MrDG);
$MrDG = str_replace('j', 'נ', $MrDG);
$MrDG = str_replace('k', 'к', $MrDG);
$MrDG = str_replace('l', 'ℓ', $MrDG);
$MrDG = str_replace('m', 'м', $MrDG);
$MrDG = str_replace('n', 'η', $MrDG);
$MrDG = str_replace('o', 'σ', $MrDG);
$MrDG = str_replace('p', 'ρ', $MrDG);
$MrDG = str_replace('q', 'q', $MrDG);
$MrDG = str_replace('r', 'я', $MrDG);
$MrDG = str_replace('s', 'ѕ', $MrDG);
$MrDG = str_replace('t', 'т', $MrDG);
$MrDG = str_replace('u', 'υ', $MrDG);
$MrDG = str_replace('v', 'ν', $MrDG);
$MrDG = str_replace('w', 'ω', $MrDG);
$MrDG = str_replace('x', 'χ', $MrDG);
$MrDG = str_replace('y', 'у', $MrDG);
$MrDG = str_replace('z', 'z', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]); 
#-----------------(Mroan-2)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'Á', $MrDG);
$MrDG = str_replace('b', 'ß', $MrDG);
$MrDG = str_replace('c', 'Č', $MrDG);
$MrDG = str_replace('d', 'Ď', $MrDG);
$MrDG = str_replace('e', 'Ĕ', $MrDG);
$MrDG = str_replace('f', 'Ŧ', $MrDG);
$MrDG = str_replace('g', 'Ğ', $MrDG);
$MrDG = str_replace('h', 'Ĥ', $MrDG);
$MrDG = str_replace('i', 'Ĩ', $MrDG);
$MrDG = str_replace('j', 'Ĵ', $MrDG);
$MrDG = str_replace('k', 'Ķ', $MrDG);
$MrDG = str_replace('l', 'Ĺ', $MrDG);
$MrDG = str_replace('m', 'M', $MrDG);
$MrDG = str_replace('n', 'Ń', $MrDG);
$MrDG = str_replace('o', 'Ő', $MrDG);
$MrDG = str_replace('p', 'P', $MrDG);
$MrDG = str_replace('q', 'Q', $MrDG);
$MrDG = str_replace('r', 'Ŕ', $MrDG);
$MrDG = str_replace('s', 'Ś', $MrDG);
$MrDG = str_replace('t', 'Ť', $MrDG);
$MrDG = str_replace('u', 'Ú', $MrDG);
$MrDG = str_replace('v', 'V', $MrDG);
$MrDG = str_replace('w', 'Ŵ', $MrDG);
$MrDG = str_replace('x', 'Ж', $MrDG);
$MrDG = str_replace('y', 'Ŷ', $MrDG);
$MrDG = str_replace('z', 'Ź', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]); 
#-----------------(Mroan-3)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'ค', $MrDG);
$MrDG = str_replace('b', '๒', $MrDG);
$MrDG = str_replace('c', 'ς', $MrDG);
$MrDG = str_replace('d', '๔', $MrDG);
$MrDG = str_replace('e', 'є', $MrDG);
$MrDG = str_replace('f', 'Ŧ', $MrDG);
$MrDG = str_replace('g', 'g', $MrDG);
$MrDG = str_replace('h', 'ђ', $MrDG);
$MrDG = str_replace('i', 'เ', $MrDG);
$MrDG = str_replace('j', 'ן', $MrDG);
$MrDG = str_replace('k', 'к', $MrDG);
$MrDG = str_replace('l', 'l', $MrDG);
$MrDG = str_replace('m', '๓', $MrDG);
$MrDG = str_replace('n', 'ภ', $MrDG);
$MrDG = str_replace('o', '๏', $MrDG);
$MrDG = str_replace('p', 'ק', $MrDG);
$MrDG = str_replace('q', 'ợ', $MrDG);
$MrDG = str_replace('r', 'г', $MrDG);
$MrDG = str_replace('s', 'ร', $MrDG);
$MrDG = str_replace('t', 't', $MrDG);
$MrDG = str_replace('u', 'ย', $MrDG);
$MrDG = str_replace('v', 'ש', $MrDG);
$MrDG = str_replace('w', 'ฬ', $MrDG);
$MrDG = str_replace('x', 'א', $MrDG);
$MrDG = str_replace('y', 'ץ', $MrDG);
$MrDG = str_replace('z', 'z', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]); 
#-----------------(Mroan-4)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'ä', $MrDG);
$MrDG = str_replace('b', 'b', $MrDG);
$MrDG = str_replace('c', 'ċ', $MrDG);
$MrDG = str_replace('d', 'd', $MrDG);
$MrDG = str_replace('e', 'ë', $MrDG);
$MrDG = str_replace('f', 'f', $MrDG);
$MrDG = str_replace('g', 'ġ', $MrDG);
$MrDG = str_replace('h', 'h', $MrDG);
$MrDG = str_replace('i', 'ï', $MrDG);
$MrDG = str_replace('j', 'j', $MrDG);
$MrDG = str_replace('k', 'k', $MrDG);
$MrDG = str_replace('l', 'l', $MrDG);
$MrDG = str_replace('m', 'm', $MrDG);
$MrDG = str_replace('n', 'n', $MrDG);
$MrDG = str_replace('o', 'ö', $MrDG);
$MrDG = str_replace('p', 'p', $MrDG);
$MrDG = str_replace('q', 'q', $MrDG);
$MrDG = str_replace('r', 'r', $MrDG);
$MrDG = str_replace('s', 's', $MrDG);
$MrDG = str_replace('t', 't', $MrDG);
$MrDG = str_replace('u', 'ü', $MrDG);
$MrDG = str_replace('v', 'v', $MrDG);
$MrDG = str_replace('w', 'w', $MrDG);
$MrDG = str_replace('x', 'x', $MrDG);
$MrDG = str_replace('y', 'ÿ', $MrDG);
$MrDG = str_replace('z', 'ż', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]); 
#-----------------(Mroan-5)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'ɑ̝̚', $MrDG);
$MrDG = str_replace('b', 'в̝̚', $MrDG);
$MrDG = str_replace('c', 'c̝̚', $MrDG);
$MrDG = str_replace('d', 'd̝̚', $MrDG);
$MrDG = str_replace('e', 'ǝ̝̚', $MrDG);
$MrDG = str_replace('f', 'г̵̵', $MrDG);
$MrDG = str_replace('g', 'G̝̚', $MrDG);
$MrDG = str_replace('h', 'н̝̚', $MrDG);
$MrDG = str_replace('i', 'ı̝̚', $MrDG);
$MrDG = str_replace('j', 'τ', $MrDG);
$MrDG = str_replace('k', 'к̝', $MrDG);
$MrDG = str_replace('l', 'l̝̚', $MrDG);
$MrDG = str_replace('m', 'м̝̚', $MrDG);
$MrDG = str_replace('n', 'и̝̚', $MrDG);
$MrDG = str_replace('o', 'σ̝̚', $MrDG);
$MrDG = str_replace('p', 'ρ̝̚', $MrDG);
$MrDG = str_replace('q', 'Q̝̚', $MrDG);
$MrDG = str_replace('r', 'я̝̚', $MrDG);
$MrDG = str_replace('s', 'ƨ̝̚', $MrDG);
$MrDG = str_replace('t', 'т̝̚', $MrDG);
$MrDG = str_replace('u', 'υ̝̚', $MrDG);
$MrDG = str_replace('v', 'ν̝̚', $MrDG);
$MrDG = str_replace('w', 'ω̝̚', $MrDG);
$MrDG = str_replace('x', 'x̝̚', $MrDG);
$MrDG = str_replace('y', 'ч̝̚', $MrDG);
$MrDG = str_replace('z', 'z̝̚', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]); 
#-----------------(Mroan-6)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'ɑ̃̾', $MrDG);
$MrDG = str_replace('b', 'в̃̾', $MrDG);
$MrDG = str_replace('c', 'c̃̾', $MrDG);
$MrDG = str_replace('d', 'd̃̾', $MrDG);
$MrDG = str_replace('e', 'ǝ̃̾', $MrDG);
$MrDG = str_replace('f', 'г̵̵', $MrDG);
$MrDG = str_replace('g', 'G̃̾', $MrDG);
$MrDG = str_replace('h', 'н̃̾', $MrDG);
$MrDG = str_replace('i', 'ı̃̾', $MrDG);
$MrDG = str_replace('j', 'τ̃̾', $MrDG);
$MrDG = str_replace('k', 'к̃̾', $MrDG);
$MrDG = str_replace('l', 'l̃̾', $MrDG);
$MrDG = str_replace('m', 'м̃̾', $MrDG);
$MrDG = str_replace('n', 'и̃̾', $MrDG);
$MrDG = str_replace('o', 'σ̃̾', $MrDG);
$MrDG = str_replace('p', 'ρ̃̾', $MrDG);
$MrDG = str_replace('q', 'Q̃̾', $MrDG);
$MrDG = str_replace('r', 'я̃̾', $MrDG);
$MrDG = str_replace('s', 'ƨ̃̾', $MrDG);
$MrDG = str_replace('t', 'т̃̾', $MrDG);
$MrDG = str_replace('u', 'υ̃̾', $MrDG);
$MrDG = str_replace('v', 'ν̃̾', $MrDG);
$MrDG = str_replace('w', 'ω̃̾', $MrDG);
$MrDG = str_replace('x', 'x̃̾', $MrDG);
$MrDG = str_replace('y', 'ч̃̾', $MrDG);
$MrDG = str_replace('z', 'z̃̾', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]); 
#-----------------(Mroan-7)--------------------#
$MrDG  = $text;
$MrDG  = str_replace('a', '[̲̅a̲̅]', $text);
$MrDG  = str_replace('b', '[̲̅b̲̅]', $MrDG);
$MrDG  = str_replace('c', '[̲̅c̲̅]', $MrDG);
$MrDG  = str_replace('d', '[̲̅d̲̅]', $MrDG);
$MrDG  = str_replace('e', '[̲̅e̲̅]', $MrDG);
$MrDG  = str_replace('f', '[̲̅f̲̅]', $MrDG);
$MrDG  = str_replace('g', '[̲̅g̲̅]', $MrDG);
$MrDG  = str_replace('h', '[̲̅h̲̅]', $MrDG);
$MrDG  = str_replace('i', '[̲̅i̲̅]', $MrDG);
$MrDG  = str_replace('j', '[̲̅j̲̅]', $MrDG);
$MrDG  = str_replace('k', '[̲̅k̲̅]', $MrDG);
$MrDG  = str_replace('l', '[̲̅l̲̅]', $MrDG);
$MrDG  = str_replace('m', '[̲̅m̲̅]', $MrDG);
$MrDG  = str_replace('n', '[̲̅n̲̅]', $MrDG);
$MrDG  = str_replace('o', '[̲̅o̲̅]', $MrDG);
$MrDG  = str_replace('p', '[̲̅p̲̅]', $MrDG);
$MrDG  = str_replace('q', '[̲̅q̲̅]', $MrDG);
$MrDG  = str_replace('r', '[̲̅r̲̅]', $MrDG);
$MrDG  = str_replace('s', '[̲̅s̲̅]', $MrDG);
$MrDG  = str_replace('t', '[̲̅t̲̅]', $MrDG);
$MrDG  = str_replace('u', '[̲̅u̲̅]', $MrDG);
$MrDG  = str_replace('v', '[̲̅v̲̅]', $MrDG);
$MrDG  = str_replace('w', '[̲̅w̲̅]', $MrDG);
$MrDG  = str_replace('x', '[̲̅x̲̅]', $MrDG);
$MrDG  = str_replace('y', '[̲̅y̲̅]', $MrDG);
$MrDG    = str_replace('z', 'z', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]); 
#-----------------(Mroan-8)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'ɐ', $MrDG);
$MrDG = str_replace('b', 'q', $MrDG);
$MrDG = str_replace('c', 'ɔ', $MrDG);
$MrDG = str_replace('d', 'p', $MrDG);
$MrDG = str_replace('e', 'ǝ', $MrDG);
$MrDG = str_replace('f', 'ɟ', $MrDG);
$MrDG = str_replace('g', 'ƃ', $MrDG);
$MrDG = str_replace('h', 'ɥ', $MrDG);
$MrDG = str_replace('i', 'ı', $MrDG);
$MrDG = str_replace('j', 'ſ', $MrDG);
$MrDG = str_replace('k', 'ʞ', $MrDG);
$MrDG = str_replace('l', 'ן', $MrDG);
$MrDG = str_replace('m', 'ɯ', $MrDG);
$MrDG = str_replace('n', 'u', $MrDG);
$MrDG = str_replace('o', 'o', $MrDG);
$MrDG = str_replace('p', 'd', $MrDG);
$MrDG = str_replace('q', 'b', $MrDG);
$MrDG = str_replace('r', 'ɹ', $MrDG);
$MrDG = str_replace('s', 's', $MrDG);
$MrDG = str_replace('t', 'ʇ', $MrDG);
$MrDG = str_replace('u', 'n', $MrDG);
$MrDG = str_replace('v', 'ʌ', $MrDG);
$MrDG = str_replace('w', 'ʍ', $MrDG);
$MrDG = str_replace('x', 'x', $MrDG);
$MrDG = str_replace('y', 'ʎ', $MrDG);
$MrDG = str_replace('z', 'z', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-9)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'ⓐ', $MrDG);
$MrDG = str_replace('b', 'ⓑ', $MrDG);
$MrDG = str_replace('c', '©', $MrDG);
$MrDG = str_replace('d', 'ⓓ', $MrDG);
$MrDG = str_replace('e', 'ⓔ', $MrDG);
$MrDG = str_replace('f', 'ⓕ', $MrDG);
$MrDG = str_replace('g', 'ⓖ', $MrDG);
$MrDG = str_replace('h', 'ⓗ', $MrDG);
$MrDG = str_replace('i', 'ⓘ', $MrDG);
$MrDG = str_replace('j', 'ⓙ', $MrDG);
$MrDG = str_replace('k', 'ⓚ', $MrDG);
$MrDG = str_replace('l', 'ⓛ', $MrDG);
$MrDG = str_replace('m', 'ⓜ', $MrDG);
$MrDG = str_replace('n', 'ⓝ', $MrDG);
$MrDG = str_replace('o', 'ⓞ', $MrDG);
$MrDG = str_replace('p', 'ⓟ', $MrDG);
$MrDG = str_replace('q', 'ⓠ', $MrDG);
$MrDG = str_replace('r', 'ⓡ', $MrDG);
$MrDG = str_replace('s', 'ⓢ', $MrDG);
$MrDG = str_replace('t', 'ⓣ', $MrDG);
$MrDG = str_replace('u', 'ⓤ', $MrDG);
$MrDG = str_replace('v', 'ⓥ', $MrDG);
$MrDG = str_replace('w', 'ⓦ', $MrDG);
$MrDG = str_replace('x', 'ⓧ', $MrDG);
$MrDG = str_replace('y', 'ⓨ', $MrDG);
$MrDG = str_replace('z', 'ⓩ', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-10)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'Ā', $MrDG);
$MrDG = str_replace('b', '乃', $MrDG);
$MrDG = str_replace('c', 'Ċ', $MrDG);
$MrDG = str_replace('d', 'Ɖ', $MrDG);
$MrDG = str_replace('e', 'Ē', $MrDG);
$MrDG = str_replace('f', '₣', $MrDG);
$MrDG = str_replace('g', 'Ǥ', $MrDG);
$MrDG = str_replace('h', 'Ħ', $MrDG);
$MrDG = str_replace('i', 'Ī', $MrDG);
$MrDG = str_replace('j', 'J', $MrDG);
$MrDG = str_replace('k', '₭', $MrDG);
$MrDG = str_replace('l', 'Ŀ', $MrDG);
$MrDG = str_replace('m', 'M', $MrDG);
$MrDG = str_replace('n', '₦', $MrDG);
$MrDG = str_replace('o', 'Ō', $MrDG);
$MrDG = str_replace('p', 'P', $MrDG);
$MrDG = str_replace('q', 'Ǭ', $MrDG);
$MrDG = str_replace('r', 'Ṝ', $MrDG);
$MrDG = str_replace('s', 'Ƨ', $MrDG);
$MrDG = str_replace('t', 'Ŧ', $MrDG);
$MrDG = str_replace('u', 'Ū', $MrDG);
$MrDG = str_replace('v', '∀', $MrDG);
$MrDG = str_replace('w', 'ฬ', $MrDG);
$MrDG = str_replace('x', 'Ж', $MrDG);
$MrDG = str_replace('y', 'Ȳ', $MrDG);
$MrDG = str_replace('z', 'Ƶ', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-11)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'ᾋ', $MrDG);
$MrDG = str_replace('b', 'ϐ', $MrDG);
$MrDG = str_replace('c', 'Ƈ', $MrDG);
$MrDG = str_replace('d', 'Ɖ', $MrDG);
$MrDG = str_replace('e', 'Ἕ', $MrDG);
$MrDG = str_replace('f', 'Ғ', $MrDG);
$MrDG = str_replace('g', 'Ɠ', $MrDG);
$MrDG = str_replace('h', 'Ἤ', $MrDG);
$MrDG = str_replace('i', 'Ἷ', $MrDG);
$MrDG = str_replace('j', 'Ј', $MrDG);
$MrDG = str_replace('k', 'Ḱ', $MrDG);
$MrDG = str_replace('l', 'Ŀ', $MrDG);
$MrDG = str_replace('m', 'Ṃ', $MrDG);
$MrDG = str_replace('n', 'Ɲ', $MrDG);
$MrDG = str_replace('o', 'Ὃ', $MrDG);
$MrDG = str_replace('p', 'Ƥ', $MrDG);
$MrDG = str_replace('q', 'Q', $MrDG);
$MrDG = str_replace('r', 'Ȓ', $MrDG);
$MrDG = str_replace('s', 'Ṩ', $MrDG);
$MrDG = str_replace('t', 'Ҭ', $MrDG);
$MrDG = str_replace('u', 'Ȗ', $MrDG);
$MrDG = str_replace('v', 'V', $MrDG);
$MrDG = str_replace('w', 'Ẃ', $MrDG);
$MrDG = str_replace('x', 'Ẋ', $MrDG);
$MrDG = str_replace('y', 'Ὓ', $MrDG);
$MrDG = str_replace('z', 'Ẕ', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-12)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'მ', $MrDG);
$MrDG = str_replace('b', 'ჩ', $MrDG);
$MrDG = str_replace('c', 'ƈ', $MrDG);
$MrDG = str_replace('d', 'ძ', $MrDG);
$MrDG = str_replace('e', 'ε', $MrDG);
$MrDG = str_replace('f', 'բ', $MrDG);
$MrDG = str_replace('g', 'ց', $MrDG);
$MrDG = str_replace('h', 'հ', $MrDG);
$MrDG = str_replace('i', 'ἶ', $MrDG);
$MrDG = str_replace('j', 'ʝ', $MrDG);
$MrDG = str_replace('k', 'ƙ', $MrDG);
$MrDG = str_replace('l', 'l', $MrDG);
$MrDG = str_replace('m', 'ო', $MrDG);
$MrDG = str_replace('n', 'ղ', $MrDG);
$MrDG = str_replace('o', 'օ', $MrDG);
$MrDG = str_replace('p', 'ր', $MrDG);
$MrDG = str_replace('q', 'գ', $MrDG);
$MrDG = str_replace('r', 'ɾ', $MrDG);
$MrDG = str_replace('s', 'ʂ', $MrDG);
$MrDG = str_replace('t', 'է', $MrDG);
$MrDG = str_replace('u', 'մ', $MrDG);
$MrDG = str_replace('v', 'ν', $MrDG);
$MrDG = str_replace('w', 'ω', $MrDG);
$MrDG = str_replace('x', 'ჯ', $MrDG);
$MrDG = str_replace('y', 'ყ', $MrDG);
$MrDG = str_replace('z', 'z', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-13)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'ᴬ', $MrDG);
$MrDG = str_replace('b', 'ᴮ', $MrDG);
$MrDG = str_replace('c', 'ᶜ', $MrDG);
$MrDG = str_replace('d', 'ᴰ', $MrDG);
$MrDG = str_replace('e', 'ᴱ', $MrDG);
$MrDG = str_replace('f', 'ᶠ', $MrDG);
$MrDG = str_replace('g', 'ᴳ', $MrDG);
$MrDG = str_replace('h', 'ᴴ', $MrDG);
$MrDG = str_replace('i', 'ᴵ', $MrDG);
$MrDG = str_replace('j', 'ᴶ', $MrDG);
$MrDG = str_replace('k', 'ᴷ', $MrDG);
$MrDG = str_replace('l', 'ᴸ', $MrDG);
$MrDG = str_replace('m', 'ᴹ', $MrDG);
$MrDG = str_replace('n', 'ᴺ', $MrDG);
$MrDG = str_replace('o', 'ᴼ', $MrDG);
$MrDG = str_replace('p', 'ᴾ', $MrDG);
$MrDG = str_replace('q', 'ᵠ', $MrDG);
$MrDG = str_replace('r', 'ᴿ', $MrDG);
$MrDG = str_replace('s', 'ˁ', $MrDG);
$MrDG = str_replace('t', 'ᵀ', $MrDG);
$MrDG = str_replace('u', 'ᵁ', $MrDG);
$MrDG = str_replace('v', 'ᵛ', $MrDG);
$MrDG = str_replace('w', 'ᵂ', $MrDG);
$MrDG = str_replace('x', 'ˣ', $MrDG);
$MrDG = str_replace('y', 'ʸ', $MrDG);
$MrDG = str_replace('z', 'ᶻ', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-14)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'Ａ', $MrDG);
$MrDG = str_replace('b', 'Ｂ', $MrDG);
$MrDG = str_replace('c', 'Ｃ', $MrDG);
$MrDG = str_replace('d', 'Ｄ', $MrDG);
$MrDG = str_replace('e', 'Ｅ', $MrDG);
$MrDG = str_replace('f', 'Ｆ', $MrDG);
$MrDG = str_replace('g', 'Ｇ', $MrDG);
$MrDG = str_replace('h', 'Ｈ', $MrDG);
$MrDG = str_replace('i', 'Ｉ', $MrDG);
$MrDG = str_replace('j', 'Ｊ', $MrDG);
$MrDG = str_replace('k', 'Ｋ', $MrDG);
$MrDG = str_replace('l', 'Ｌ', $MrDG);
$MrDG = str_replace('m', 'Ｍ', $MrDG);
$MrDG = str_replace('n', 'Ｎ', $MrDG);
$MrDG = str_replace('o', 'Ｏ', $MrDG);
$MrDG = str_replace('p', 'Ｐ', $MrDG);
$MrDG = str_replace('q', 'Ｑ', $MrDG);
$MrDG = str_replace('r', 'Ｒ', $MrDG);
$MrDG = str_replace('s', 'Ｓ', $MrDG);
$MrDG = str_replace('t', 'Ｔ', $MrDG);
$MrDG = str_replace('u', 'Ｕ', $MrDG);
$MrDG = str_replace('v', 'Ｖ', $MrDG);
$MrDG = str_replace('w', 'Ｗ', $MrDG);
$MrDG = str_replace('x', 'Ｘ', $MrDG);
$MrDG = str_replace('y', 'Ｙ', $MrDG);
$MrDG = str_replace('z', 'Ｚ', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-15)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'λ', $MrDG);
$MrDG = str_replace('b', 'ß', $MrDG);
$MrDG = str_replace('c', 'Ȼ', $MrDG);
$MrDG = str_replace('d', 'ɖ', $MrDG);
$MrDG = str_replace('e', 'ε', $MrDG);
$MrDG = str_replace('f', 'ʃ', $MrDG);
$MrDG = str_replace('g', 'Ģ', $MrDG);
$MrDG = str_replace('h', 'ħ', $MrDG);
$MrDG = str_replace('i', 'ί', $MrDG);
$MrDG = str_replace('j', 'ĵ', $MrDG);
$MrDG = str_replace('k', 'κ', $MrDG);
$MrDG = str_replace('l', 'ι', $MrDG);
$MrDG = str_replace('m', 'ɱ', $MrDG);
$MrDG = str_replace('n', 'ɴ', $MrDG);
$MrDG = str_replace('o', 'Θ', $MrDG);
$MrDG = str_replace('p', 'ρ', $MrDG);
$MrDG = str_replace('q', 'ƣ', $MrDG);
$MrDG = str_replace('r', 'ર', $MrDG);
$MrDG = str_replace('s', 'Ș', $MrDG);
$MrDG = str_replace('t', 'τ', $MrDG);
$MrDG = str_replace('u', 'Ʋ', $MrDG);
$MrDG = str_replace('v', 'ν', $MrDG);
$MrDG = str_replace('w', 'ώ', $MrDG);
$MrDG = str_replace('x', 'Χ', $MrDG);
$MrDG = str_replace('y', 'ϓ', $MrDG);
$MrDG = str_replace('z', 'Հ', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-16)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', '🅐', $MrDG);
$MrDG = str_replace('b', '🅑', $MrDG);
$MrDG = str_replace('c', '🅒', $MrDG);
$MrDG = str_replace('d', '🅓', $MrDG);
$MrDG = str_replace('e', '🅔', $MrDG);
$MrDG = str_replace('f', '🅕', $MrDG);
$MrDG = str_replace('g', '🅖', $MrDG);
$MrDG = str_replace('h', '🅗', $MrDG);
$MrDG = str_replace('i', '🅘', $MrDG);
$MrDG = str_replace('j', '🅙', $MrDG);
$MrDG = str_replace('k', '🅚', $MrDG);
$MrDG = str_replace('l', '🅛', $MrDG);
$MrDG = str_replace('m', '🅜', $MrDG);
$MrDG = str_replace('n', '🅝', $MrDG);
$MrDG = str_replace('o', '🅞', $MrDG);
$MrDG = str_replace('p', '🅟', $MrDG);
$MrDG = str_replace('q', '🅠', $MrDG);
$MrDG = str_replace('r', '🅡', $MrDG);
$MrDG = str_replace('s', '🅢', $MrDG);
$MrDG = str_replace('t', '🅣', $MrDG);
$MrDG = str_replace('u', '🅤', $MrDG);
$MrDG = str_replace('v', '🅥', $MrDG);
$MrDG = str_replace('w', '🅦', $MrDG);
$MrDG = str_replace('x', '🅧', $MrDG);
$MrDG = str_replace('y', '🅨', $MrDG);
$MrDG = str_replace('z', '🅩', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-17)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', '۰۪۫A۪۫۰', $MrDG);
$MrDG = str_replace('b', '۰۪۫B۪۫۰', $MrDG);
$MrDG = str_replace('c', '۰۪۫C۪۫۰', $MrDG);
$MrDG = str_replace('d', '۰۪۫D۪۫۰', $MrDG);
$MrDG = str_replace('e', '۰۪۫E۪۫۰', $MrDG);
$MrDG = str_replace('f', '۰۪۫F۪۫۰', $MrDG);
$MrDG = str_replace('g', '۰۪۫G۪۫۰', $MrDG);
$MrDG = str_replace('h', '۰۪۫H۪۫۰', $MrDG);
$MrDG = str_replace('i', '۰۪۫I۪۫۰', $MrDG);
$MrDG = str_replace('j', '۰۪۫J۪۫۰', $MrDG);
$MrDG = str_replace('k', '۰۪۫K۪۫۰', $MrDG);
$MrDG = str_replace('l', '۰۪۫L۪۫۰', $MrDG);
$MrDG = str_replace('m', '۰۪۫M۪۫۰', $MrDG);
$MrDG = str_replace('n', '۰۪۫N۪۫۰', $MrDG);
$MrDG = str_replace('o', '۰۪۫O۪۫۰', $MrDG);
$MrDG = str_replace('p', '۰۪۫P۪۫۰', $MrDG);
$MrDG = str_replace('q', '۰۪۫Q۪۫۰', $MrDG);
$MrDG = str_replace('r', '۰۪۫R۪۫۰', $MrDG);
$MrDG = str_replace('s', '۰۪۫S۪۫۰', $MrDG);
$MrDG = str_replace('t', '۰۪۫T۪۫۰', $MrDG);
$MrDG = str_replace('u', '۰۪۫U۪۫۰', $MrDG);
$MrDG = str_replace('v', '۰۪۫V۪۫۰', $MrDG);
$MrDG = str_replace('w', '۰۪۫W۪۫۰', $MrDG);
$MrDG = str_replace('x', '۰۪۫X۪۫۰', $MrDG);
$MrDG = str_replace('y', '۰۪۫Y۪۫۰', $MrDG);
$MrDG = str_replace('z', '۰۪۫Z۪۫۰', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-18)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', '̅α', $MrDG);
$MrDG = str_replace('b', '̅в', $MrDG);
$MrDG = str_replace('c', '̅c', $MrDG);
$MrDG = str_replace('d', '̅ɒ', $MrDG);
$MrDG = str_replace('e', '̅є', $MrDG);
$MrDG = str_replace('f', '̅f', $MrDG);
$MrDG = str_replace('g', '̅ɢ', $MrDG);
$MrDG = str_replace('h', '̅н', $MrDG);
$MrDG = str_replace('i', '̅ɪ', $MrDG);
$MrDG = str_replace('j', '̅ᴊ', $MrDG);
$MrDG = str_replace('k', '̅ĸ', $MrDG);
$MrDG = str_replace('l', '̅ℓ', $MrDG);
$MrDG = str_replace('m', '̅м', $MrDG);
$MrDG = str_replace('n', '̅и', $MrDG);
$MrDG = str_replace('o', '̅σ', $MrDG);
$MrDG = str_replace('p', '̅ρ', $MrDG);
$MrDG = str_replace('q', '̅q', $MrDG);
$MrDG = str_replace('r', '̅я', $MrDG);
$MrDG = str_replace('s', '̅s', $MrDG);
$MrDG = str_replace('t', '̅τ', $MrDG);
$MrDG = str_replace('u', '̅υ', $MrDG);
$MrDG = str_replace('v', '̅v', $MrDG);
$MrDG = str_replace('w', '̅ω', $MrDG);
$MrDG = str_replace('x', '̅x', $MrDG);
$MrDG = str_replace('y', '̅y', $MrDG);
$MrDG = str_replace('z', '̅z', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-19)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', '🄰', $MrDG);
$MrDG = str_replace('b', '🄱', $MrDG);
$MrDG = str_replace('c', '🄲', $MrDG);
$MrDG = str_replace('d', '🄳', $MrDG);
$MrDG = str_replace('e', '🄴', $MrDG);
$MrDG = str_replace('f', '🄵', $MrDG);
$MrDG = str_replace('g', '🄶', $MrDG);
$MrDG = str_replace('h', '🄷', $MrDG);
$MrDG = str_replace('i', '🄸', $MrDG);
$MrDG = str_replace('j', '🄹', $MrDG);
$MrDG = str_replace('k', '🄺', $MrDG);
$MrDG = str_replace('l', '🄻', $MrDG);
$MrDG = str_replace('m', '🄼', $MrDG);
$MrDG = str_replace('n', '🄽', $MrDG);
$MrDG = str_replace('o', '🄾', $MrDG);
$MrDG = str_replace('p', '🄿', $MrDG);
$MrDG = str_replace('q', '🅀', $MrDG);
$MrDG = str_replace('r', '🅁', $MrDG);
$MrDG = str_replace('s', '🅂', $MrDG);
$MrDG = str_replace('t', '🅃', $MrDG);
$MrDG = str_replace('u', '🅄', $MrDG);
$MrDG = str_replace('v', '🅅', $MrDG);
$MrDG = str_replace('w', '🅆', $MrDG);
$MrDG = str_replace('x', '🅇', $MrDG);
$MrDG = str_replace('y', '🅈', $MrDG);
$MrDG = str_replace('z', '🅉', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-20)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'a', $MrDG);
$MrDG = str_replace('b', 'b', $MrDG);
$MrDG = str_replace('c', '🅲', $MrDG);
$MrDG = str_replace('d', '🅳', $MrDG);
$MrDG = str_replace('e', '🅴', $MrDG);
$MrDG = str_replace('f', '🅵', $MrDG);
$MrDG = str_replace('g', '🅶', $MrDG);
$MrDG = str_replace('h', '🅷', $MrDG);
$MrDG = str_replace('i', '🅸', $MrDG);
$MrDG = str_replace('j', '🅹', $MrDG);
$MrDG = str_replace('k', '🅺', $MrDG);
$MrDG = str_replace('l', '🅻', $MrDG);
$MrDG = str_replace('m', '🅼', $MrDG);
$MrDG = str_replace('n', '🅽', $MrDG);
$MrDG = str_replace('o', 'o', $MrDG);
$MrDG = str_replace('p', 'p', $MrDG);
$MrDG = str_replace('q', '🆀', $MrDG);
$MrDG = str_replace('r', '🆁', $MrDG);
$MrDG = str_replace('s', 's', $MrDG);
$MrDG = str_replace('t', '🆃', $MrDG);
$MrDG = str_replace('u', '🆄', $MrDG);
$MrDG = str_replace('v', '🆅', $MrDG);
$MrDG = str_replace('w', '🆆', $MrDG);
$MrDG = str_replace('x', '🆇', $MrDG);
$MrDG = str_replace('y', '🆈', $MrDG);
$MrDG = str_replace('z', '🆉', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-21)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'a̷', $MrDG);
$MrDG = str_replace('b', 'b̷', $MrDG);
$MrDG = str_replace('c', 'c̷', $MrDG);
$MrDG = str_replace('d', 'd̷', $MrDG);
$MrDG = str_replace('e', 'e̷', $MrDG);
$MrDG = str_replace('f', 'f̷', $MrDG);
$MrDG = str_replace('g', 'g̷', $MrDG);
$MrDG = str_replace('h', 'h̷', $MrDG);
$MrDG = str_replace('i', 'i̷', $MrDG);
$MrDG = str_replace('j', 'j̷', $MrDG);
$MrDG = str_replace('k', 'k̷', $MrDG);
$MrDG = str_replace('l', 'l̷', $MrDG);
$MrDG = str_replace('m', 'm̷', $MrDG);
$MrDG = str_replace('n', 'n̷', $MrDG);
$MrDG = str_replace('o', 'o̷', $MrDG);
$MrDG = str_replace('p', 'p̷', $MrDG);
$MrDG = str_replace('q', 'q̷', $MrDG);
$MrDG = str_replace('r', 'r̷', $MrDG);
$MrDG = str_replace('s', 's̷', $MrDG);
$MrDG = str_replace('t', 't̷', $MrDG);
$MrDG = str_replace('u', 'u̷', $MrDG);
$MrDG = str_replace('v', 'v̷', $MrDG);
$MrDG = str_replace('w', 'w̷', $MrDG);
$MrDG = str_replace('x', 'x̷', $MrDG);
$MrDG = str_replace('y', 'y̷', $MrDG);
$MrDG = str_replace('z', 'z̷', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MrDG." ".$smile
]);
#-----------------(Mroan-22)--------------------#
$MrDG = $text;
$MrDG = str_replace('a', 'ᴀ', $MrDG);
$MrDG = str_replace('b', 'ʙ', $MrDG);
$MrDG = str_replace('c', 'ᴄ', $MrDG);
$MrDG = str_replace('d', 'ᴅ', $MrDG);
$MrDG = str_replace('e', 'ᴇ', $MrDG);
$MrDG = str_replace('f', 'ᴈ', $MrDG);
$MrDG = str_replace('g', 'ɢ', $MrDG);
$MrDG = str_replace('h', 'ʜ', $MrDG);
$MrDG = str_replace('i', 'ɪ', $MrDG);
$MrDG = str_replace('j', 'ᴊ', $MrDG);
$MrDG = str_replace('k', 'ᴋ', $MrDG);
$MrDG = str_replace('l', 'ʟ', $MrDG);
$MrDG = str_replace('m', 'ᴍ', $MrDG);
$MrDG = str_replace('n', 'ɴ', $MrDG);
$MrDG = str_replace('o', 'ᴏ', $MrDG);
$MrDG = str_replace('p', 'ᴘ', $MrDG);
$MrDG = str_replace('q', 'ᴓ', $MrDG);
$MrDG = str_replace('r', 'ʀ', $MrDG);
$MrDG = str_replace('s', 'ᴤ', $MrDG);
$MrDG = str_replace('t', 'ᴛ', $MrDG);
$MrDG = str_replace('u', 'ᴜ', $MrDG);
$MrDG = str_replace('v', 'ᴠ', $MrDG);
$MrDG = str_replace('w', 'ᴡ', $MrDG);
$MrDG = str_replace('x', 'ᴥ', $MrDG);
$MrDG = str_replace('y', 'ʏ', $MrDG);
$MrDG = str_replace('z', 'ᴢ', $MrDG);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"Markdown",
'text'=>$MrDG." ".$smile
]);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'
',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);
}}
