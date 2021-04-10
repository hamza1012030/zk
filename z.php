<?php 


ob_start();
$API_KEY = "1787124452:AAEmnZDi-u04T9qT1nRifJBEf0Yru6yBZPU" ;
define('API_KEY',$API_KEY);
echo "<a href='https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>setwebhook</a>";
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}
#         mroan        #
$update   = json_decode(file_get_contents('php://input'));
$message  = $update->message;
$text     = $message->text;
$chat_id  = $message->chat->id;
$name     = $message->from->first_name;
$user     = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
/*
تم كتابة الأكواد بواسطة 🅂 🄰 🄸 🄴 🄳 ㋡ | @T4TTTT

- Follow our new 🖤✨! | تابع جديدنا 💭✔️..

- @SAIEDCH ✅..
*/
/*
تنقل اذكر المصدر 🌚
صير فرخ واخمط 🌚😹
*/
$T4TTTT = 296369326; //ايديك
$SAIED = file_get_contents("SAIED.txt");
$SAIED0 = file_get_contents("SAIED0.txt");
$SAIED1= file_get_contents("SAIED1.txt");
$SAIED5 = file_get_contents("SAIED2.txt");
$SAIED6 = file_get_contents("SAIED3.txt");
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $update->message;
$SAIED13 = $SAIED18->chat->id;
$SAIED17 = $SAIED18->text;
$SAIED19 = $SAIED20->callback_query->data;
$SAIED12 = $SAIED20->callback_query->message->chat->id;
$SAIED14 =  $SAIED20->callback_query->message->message_id;
$SAIED15 = $SAIED18->from->first_name;
$SAIED16 = $SAIED18->from->username;
$SAIED11 = $SAIED18->from->id;
$SAIED2 = explode("\n",file_get_contents("SAIED4.txt"));
$SAIED3 = count($SAIED2)-1;
if ($SAIED18 && !in_array($SAIED11, $SAIED2)) {
    file_put_contents("SAIED4.txt", $SAIED11."\n",FILE_APPEND);
  }
$SAIED9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED0&user_id=".$SAIED11);
$SAIED10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED1&user_id=".$SAIED11);
if($SAIED18 && (strpos($SAIED9,'"status":"left"') or strpos($SAIED9,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED9,'"status":"kicked"') or strpos($SAIED10,'"status":"left"') or strpos($SAIED10,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$SAIED13,
'text'=>'- اشترك في قنوات البوت أولا لتتمكن من إستخدامه 🤖".

'.$SAIED0.'
'.$SAIED1,
]);return false;}
if($SAIED17 == "/start" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"SAIED4"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل للتوجيه 🔃✅".' ,'callback_data'=>"SAIED11"],['text'=>'- تعطيل للتوجيه 🔃❎".' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
}
if($SAIED19 == "/start" ){
bot('EditMessageText',[
'chat_id'=>$SAIED12,
'message_id'=>$SAIED14,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"SAIED4"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل للتوجيه 🔃✅".' ,'callback_data'=>"SAIED11"],['text'=>'- تعطيل للتوجيه 🔃❎".' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED0"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED0");
}
if($SAIED17 and $SAIED == "SAIED0" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED0.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED1"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED0.txt");
}
if($SAIED19 == "SAIED2"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED1");
}
if($SAIED17 and $SAIED == "SAIED1" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED1.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED3"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED1.txt");
}
if($SAIED19 == "SAIED4"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- هذه هي قائمة قنوات الإشتراك الإجباري 📜".

- القناة الأولى '.$SAIED0.' 📡".

- القناة الثانية '.$SAIED1.' 📢".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED5"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل رسالتك ليتم نشرها توجيه لجميع الأعضاء ↪️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}
if($SAIED18 and $SAIED == "SAIED2" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم التوجيه بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('forwardMessage', [
'chat_id'=>$SAIED2[$i],
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED6"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل رسالتك ليتم نشرها رسالة لجميع الأعضاء 📝".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($SAIED17 and $SAIED == "SAIED3" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم النشر بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('sendMessage', [
'chat_id'=>$SAIED2[$i],
'text'=>$SAIED17
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED7"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- عدد مشتركين البوت هو '.$SAIED3.' 👥".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED9"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل تنبيه دخول الأعضاء 🚸✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($SAIED17 == "/start" and $SAIED5 == "SAIED" and $SAIED11 != $T4TTTT){
bot("sendmessage",[
"chat_id"=>$T4TTTT,
"text"=>'- دخل شخص إلى البوت 🚶‍♂".

- اسمه '.$SAIED15.' 🔠".

- معرفه @'.$SAIED16.' Ⓜ️".

- ايديه '.$SAIED11.' 🆔".',
]);
}
if($SAIED19 == "SAIED10"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل تنبيه دخول الأعضاء 🚸❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($SAIED19 == "SAIED11"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل توجيه الرسائل 🔃✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 != $T4TTTT){
bot('forwardMessage', [
'chat_id'=>$T4TTTT,
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 == $T4TTTT){
bot('sendMessage',[
'chat_id'=>$SAIED18->reply_to_message->forward_from->id,
    'text'=>$SAIED17,
    ]);
}
if($SAIED19 == "SAIED12"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل توجيه الرسائل 🔃❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}
/*
تم كتابة الأكواد بواسطة  ㋡ | @CoVaN

- Follow our new 🖤✨! | تابع جديدنا 💭✔️..

- @SAIEDCH ✅..
*/
/*
تنقل اذكر المصدر 🌚
صير فرخ واخمط 🌚😹
*/


if ($text == '/start' && !in_array($chat_id, $band)){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
         'text' => "- اهلا بك ؛ [$name](tg://user?id=$chat_id)
- ارسل اسمك بالانكليزيةه وانتظر قليلا ، 🕊 '
- يمنع استخدام الاحرف العربية او الرموز ، 📄'
- ارسل اسمك وقم بتجربته بنفسك ، 🌼'
• يتم اضافةه حروف جديد كل يوم ،♥!' 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا ، 📢 '](https://t.me/s_333)",
'parse_mode' => "MarkDown", 'disable_web_page_preview' => true, 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• اضغط هنا وتابع قناة البوت ، 🔰'", 'url' => "https://t.me/s_333"]], ]]) ]);
}
if($_GET['s']){
    $text = 'sssasa';
    echo $count = count($text); 
}
if($text != '/start'and$text!='/us'){
  $items = ['♫','𖢌','𖣀','𖤐','𖣐','𖤓','☽','↷','↶','','𖠳','୰𓄼𓂁⋆☼','∵𓂐𓇼𐄬𖡼','☤⤶⚘','𖤏∭𖡗','♙𖧯','⦅','ꕥ','𖥤','𖧷','𖦥','𖡩𖠲','𖠕','⿻⌱','𖨬𖧷','𖢇ϗ',' ◡̈⃝','  ⠉̮⃝ ',' ⍢⃝ ‏ ‏ɵ̷̥ˬɵ̷̥ ',' ɵ᷄ˬɵ᷅','  o̴̶‸o̴̶',' ☬ ','𓆩 𓀒𓆪 ','▽',' 𖤍',' 𓅔',' 𓅓',' 𓃠',' 𓆩 𓆪 ','® ','𓅟','  ⁶⁹ ʷʰʸ ௸','↺ ↻',' ☊ ☋ ☤',' ‌‏𓈊',' ⚚','❈ ','ま ঌ ','⁶³✦ ','☤ ♘ 𖤍 ','☬',' ▽ ⁶³','𓅔',' 𓅓 𓃠 ','𓆩𓆪⁶³','🏴 ® ','𓅟 ☽ ','⁶⁹',' ʷʰʸ ','௸  ',' ⁰¹²³⁴⁵⁶⁸⁹ ','𖤐 ','𐂂',' 𓃞 ','𓃟 ','𓃡 ','⁶³𓆈 ','Ꭰ Ꭱ Ꭰ ','☤☽','↷↶ ‏ϟ  ',' ☉ ','☼ ','☽ ☾   ','❅ ❆','  ☬',' 𓆩 𓀒𓆪 ',' ▽ ','𖤍 𓃠 ','𓆩 𓆪 ',' ® 𓅟 ☽','𖠰 ','𖠱 𖠲 ',' 𖠳 𖠴',' 𖠵 𖠶','  𖠷 ','𖠸 ',' 𖡗 𖡘 ','𖡙 ',' 𖡚 𖡛 ','𖡜 ',' 𖡝 𖡞',' 𖡟 𖡠 𖡡',' 𖡢 ','𖡣 ',' 𖡤 𖡥 ','𖡦 𖡧 ',' 𖡨 𖡩',' 𖡪 ',' 𖡫 𖡬',' 𖡭 ',' 𖡮 𖡯 ','𖡰 ',' 𖡱 𖡲 ','𓅅 ',' 𓅆 𓅇 ','𓅈 𓅉 𓅊 ','𓅋 𓄆 ',' 𓄇 𓄈 𓄉 𓄊 ','𓄋 ',' 𓄌 𓄍','  𓄎 𓄏','  𓄐 𓄑 𓄒 ','𓄓 ',' 𓄔 𓄕','  𓄖 𓄙 ',' 𓄚 𓄛 ',' 𓄜 𓄝 ',' 𓄞','  𓄟 𓄠 ','𓄡 𓄢 ',' 𓄣 ',' 𓄤 𓄥 ',' 𓄦 ',' 𓄧 ',' 𓄨 𓄩',' 𓄮','  𓄯 𓄰','  𓄱 ',' 𓄲','  𓄳','  𓄴 ',' 𓄵 𓄶 ',' 𓄷 𓄸',' 𓄹 𓄼 𓄽','   𓅃','  𓅄 ','𓅅𓅐 ','𓅑  𓅙 ',' 𓅧','  𓆃 𓆄  ',' 𓆍','  𓆎 𓆐 ',' 𓆑 ',' 𓆒 𓆓 ',' 𓆔 𓆕 ','𓆖 ',' 𓆗 𓆘 𓆙 ',' 𓆚 𓆛 ',' 𓆜 𓆝 ',' 𓆞 ',' 𓆟 𓆠 ',' 𓆡','  𓆢 ',' 𓆣','  𓆤 ',' 𓆥','  𓆦 ',' 𓆧 ',' 𓆨 ',' 𓆩𓆪 ','𓆫 ',' 𓆬 𓆮 ',' 𓆯 𓆰 ',' 𓆱 𓆲','  𓆳 𓆴 𓆵 𓆶 ',' 𓆷 𓆸 𓆹 ','𓆺 ',' 𓆻 ',' 𓆼 𓆽 ',' 𓆾','  𓆿 ',' 𓇀 ','𓇁 𓇂 ',' 𓇃','  𓇄 𓇅 ',' 𓇆 𓇇 ',' 𓇈 𓇉 𓇊 ','𓇋 𓇌𓇕 ','𓇖 𓇣 ','𓇤  𓇪 ','𓇫 ',' 𓇬 ',' 𓇭 ',' 𓇮 𓇯 ',' 𓇰 𓇱 ',' 𓇲 𓇳 𓇴 ','𓇵 𓇶','  𓇷 𓇸 ',' 𓇹 𓇺 ','𓇻 𓇼 ',' 𓈋 ',' 𓈌 ',' 𓈍 ',' 𓈎 ',' 𓈏 𓈐','  𓈑','  𓈒 𓈓','  𓈔','  𓈕',' 𓈖','  𓈢 𓈩 ','𓈪  𓈰 ','𓈷 ','𓈸 𓈹 𓈺','  𓈻 ',' 𓈼 ',' 𓈽 𓈾 ','𓈿 ',' 𓉀','  𓉁','  𓉂 ',' 𓉃 ',' 𓉄','  𓉅 ',' 𓉆','  𓉇 ',' 𓉈 ',' 𓉉 ',' 𓉊 ',' 𓉋 ',' 𓉌 ',' 𓉍','  𓉎 ','𓉕 ','𓉖  ','𓉫 ','𓉬','𓉴 𓉻','  𓉼 𓉽',' 𓉾 ',' 𓉿 ',' 𓊀','  𓊁',' 𓊂 ',' 𓊃 ',' 𓊄 𓊅 𓊈',' 𓊉 𓊊 𓊋 ','𓊌 𓊍 ',' 𓊎 ',' 𓊏 ',' 𓊐','  𓊑 ','𓊒','  𓊓 ?',' ? 𓊕 ',' 𓊖 𓊗','  𓊘 𓊙 ','𓊚 ',' 𓊛','  𓊜','  𓊝 ','𓊞  ',' 𓊦 ',' 𓊧 𓊨 ',' 𓊩 𓊪 ',' 𓊫 ','𓊬 ',' 𓊭 ',' 𓊮 ','𓊯 ',' 𓊰 ',' 𓊱 ',' 𓊲 ','𓊳 ',' 𓊴 ',' 𓊵 ',' 𓊶','  𓊷 𓊸 ',' 𓊹 𓊺','  𓊻 ',' 𓊼','  𓊽 𓊾 ',' 𓊿 𓋀 ',' 𓋁 𓋂 ',' 𓋃 𓋄 ',' 𓋅 𓋆 ',' 𓋇','  𓋈',' 𓋉 ',' 𓋊',' 𓋋','  𓋌 ','𓋍 𓋎 ',' 𓋏 𓋐',' 𓋑 ',' 𓋒','  𓋓 ',' 𓋔',' 𓋕 ',' 𓋖 ',' 𓋗 ',' 𓋘 ','𓋙','  𓋚 ',' 𓋛 ',' 𓋜 ','𓋝𓋠 ','𓋡 ',' 𓋢 ',' 𓋣 ',' 𓋤','  𓋥',' 𓋦 ',' 𓋧','  𓋨 ','𓋩 𓋪 ',' 𓋫','  𓋬',' 𓋭 ',' 𓋮 ',' 𓋯 ','𓋰','  𓋱 𓋲','  𓋳 𓋴',' 𓋵 𓋶 ','𓋷 𓋸 𓋹 ','𓋺 𓋻 ','𓋼 𓋽 𓋾 𓋿 ',' 𓌀 𓌁 𓌂 𓌃',' 𓌄','  𓌅','  𓌆',' 𓌒 ',' 𓌓 ','𓌔𓌚 ',' 𓌜 ',' 𓌝','  𓌞 ',' 𓌟','  𓌤  ','𓍋 ',' 𓍌','  𓍍 ',' 𓍎 ',' 𓍏 𓍐 ','𓍑 ',' 𓍒','  𓍓 𓍔','  𓍕 ',' 𓍖 ',' 𓍗 𓍘 ',' 𓍙 ',' 𓍚 ',' 𓍛 ',' 𓍜 𓍝',' 𓍞 ',' 𓍟 ',' 𓍠 𓍡','  𓍢 𓍣 ',' 𓍤 ',' 𓍥 ',' 𓍦 ','𓍧 ',' 𓍫 ',' 𓍬 ',' 𓍭 ','𓍮 ',' 𓍯 ',' 𓍰 𓍱','  𓍲 𓍳 ',' 𓍴 ',' 𓍵 ',' 𓍶','  𓍷 ',' 𓍸 𓍹 𓍺 ','𓍻 ',' 𓍼 𓍽','  𓍾 𓍿 ','  𓎁 ',' 𓎂 𓎃 ','𓎄 𓎅 𓎆𓎋 ',' 𓎎 𓎏',' 𓎐 𓎑 𓎒 𓎓 𓎔 𓎕 𓎖 𓎗 𓎘 𓎙 ','𓎚 𓎛 𓎜 𓎝 𓎞 𓎟 𓎠 𓎡 𓏋 𓏌 ','𓏍 ','𓏎 ',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $armof = strtolower('a','𝐴',$armof); 
 $a = str_replace('b','𝐵',$armof); 
 $armof = str_replace('c','𝐶',$armof); 
 $armof = str_replace('d','𝐷',$armof); 
 $armof = str_replace('e','𝐸',$armof); 
 $armof = str_replace('f','𝐹',$armof); 
 $armof = str_replace('g','𝐺',$armof); 
 $armof = str_replace('h','𝐻',$armof); 
 $armof = str_replace('i','𝐼',$armof); 
 $armof = str_replace('j','𝐽',$armof); 
 $armof = str_replace('k','𝐾',$armof); 
 $armof = str_replace('l','𝐿',$armof); 
 $armof = str_replace('m','𝑀',$armof); 
 $armof = str_replace('n','𝑁',$armof); 
 $armof = str_replace('o','𝑂',$armof); 
 $armof = str_replace('p','𝑃',$armof); 
 $armof = str_replace('q','𝑄',$armof); 
 $armof = str_replace('r','𝑅',$armof); 
 $armof = str_replace('s','𝑆',$armof); 
 $armof = str_replace('t','𝑇',$armof); 
 $armof = str_replace('u','𝑈',$armof); 
 $armof = str_replace('v','𝑉',$armof); 
 $armof = str_replace('w','𝑊',$armof); 
 $armof = str_replace('x','𝑋',$armof); 
 $armof = str_replace('y','𝑌',$armof); 
 $armof = str_replace('z','𝑍',$armof);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]); 
   $armof = $text;
$armof = str_replace('a','𝐀',$text); 
 $armof = str_replace('b','𝐁',$armof); 
 $armof = str_replace('c','𝐂',$armof); 
 $armof = str_replace('d','𝐃',$armof); 
 $armof = str_replace('e','𝐄',$armof); 
 $armof = str_replace('f','𝐅',$armof); 
 $armof = str_replace('g','𝐆',$armof); 
 $armof = str_replace('h','𝐇',$armof); 
 $armof = str_replace('i','𝐈',$armof); 
 $armof = str_replace('j','𝐉',$armof); 
 $armof = str_replace('k','𝐊',$armof); 
 $armof = str_replace('l','𝐋',$armof); 
 $armof = str_replace('m','𝐌',$armof); 
 $armof = str_replace('n','𝐍',$armof); 
 $armof = str_replace('o','𝐎',$armof); 
 $armof = str_replace('p','𝐏',$armof); 
 $armof = str_replace('q','𝐐',$armof); 
 $armof = str_replace('r','𝐑',$armof); 
 $armof = str_replace('s','𝐒',$armof); 
 $armof = str_replace('t','𝐓',$armof); 
 $armof = str_replace('u','𝐔',$armof); 
 $armof = str_replace('v','𝐕',$armof); 
 $armof = str_replace('w','𝐖',$armof); 
 $armof = str_replace('x','𝐗',$armof); 
 $armof = str_replace('y','𝐘',$armof); 
 $armof = str_replace('z','𝐙',$armof);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]); 
   $armof = $text;
   $armof = str_replace('a','𝖆',$text); 
 $armof = str_replace('b','𝖇',$armof); 
 $armof = str_replace('c','𝖈',$armof); 
 $armof = str_replace('d','𝖉',$armof); 
 $armof = str_replace('e','𝖊',$armof); 
 $armof = str_replace('f','𝖋',$armof); 
 $armof = str_replace('g','𝖌',$armof); 
 $armof = str_replace('h','𝖍',$armof); 
 $armof = str_replace('i','𝖎',$armof); 
 $armof = str_replace('j','𝖏',$armof); 
 $armof = str_replace('k','𝖐',$armof); 
 $armof = str_replace('l','𝖑',$armof); 
 $armof = str_replace('m','𝖒',$armof); 
 $armof = str_replace('n','𝖓',$armof); 
 $armof = str_replace('o','𝖔',$armof); 
 $armof = str_replace('p','𝖕',$armof); 
 $armof = str_replace('q','𝖖',$armof); 
 $armof = str_replace('r','𝖗',$armof); 
 $armof = str_replace('s','𝖘',$armof); 
 $armof = str_replace('t','𝖙',$armof); 
 $armof = str_replace('u','𝖚',$armof); 
 $armof = str_replace('v','𝖛',$armof); 
 $armof = str_replace('w','𝖜',$armof); 
 $armof = str_replace('x','𝖝',$armof); 
 $armof = str_replace('y','𝖞',$armof); 
 $armof = str_replace('z','𝖟',$armof);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]); 
   $armof = $text;
   $armof = str_replace('a','𝙰',$text); 
 $armof = str_replace('b','𝙱',$armof); 
 $armof = str_replace('c','𝙲',$armof); 
 $armof = str_replace('d','𝙳',$armof); 
 $armof = str_replace('e','𝙴',$armof); 
 $armof = str_replace('f','𝙵',$armof); 
 $armof = str_replace('g','𝙶',$armof); 
 $armof = str_replace('h','𝙷',$armof); 
 $armof = str_replace('i','𝙸',$armof); 
 $armof = str_replace('j','𝙹',$armof); 
 $armof = str_replace('k','𝙺',$armof); 
 $armof = str_replace('l','𝙻',$armof); 
 $armof = str_replace('m','𝙼',$armof); 
 $armof = str_replace('n','𝙽',$armof); 
 $armof = str_replace('o','𝙾',$armof); 
 $armof = str_replace('p','𝙿',$armof); 
 $armof = str_replace('q','𝚀',$armof); 
 $armof = str_replace('r','𝚁',$armof); 
 $armof = str_replace('s','𝚂',$armof); 
 $armof = str_replace('t','𝚃',$armof); 
 $armof = str_replace('v','𝚅',$armof); 
 $armof = str_replace('w','𝚆',$armof); 
 $armof = str_replace('x','𝚇',$armof); 
 $armof = str_replace('y','𝚈',$armof); 
 $armof = str_replace('z','𝚉',$armof);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   
   ]); 
   $armof = $text;
$armof=str_replace('қ','k',$armof);
$armof=str_replace('я','R',$armof);
$armof=str_replace('е','e​',$armof);
$armof=str_replace('р','p',$armof);
$armof=str_replace('т','t​',$armof);
$armof=str_replace('й','y​',$armof);
$armof=str_replace('у','Y',$armof);
$armof=str_replace('и','N',$armof);
$armof=str_replace('о','o​',$armof);
$armof=str_replace('п','N',$armof);
$armof=str_replace('а','a​',$armof);
$armof=str_replace('д','A',$armof);
$armof=str_replace('ф','Q',$armof);
$armof=str_replace('г','r',$armof);
$armof=str_replace('ж','X',$armof);
$armof=str_replace('к','​k',$armof);
$armof=str_replace('л','n',$armof);
$armof=str_replace('з','b',$armof);
$armof=str_replace('ҳ','x',$armof);
$armof=str_replace('с','c​',$armof);
$armof=str_replace('в','B',$armof);
$armof=str_replace('б','b​',$armof);
$armof=str_replace('н','H',$armof);
$armof=str_replace('м','m​',$armof);
$armof=str_replace('ё','e',$armof);
$armof=str_replace('ғ','f‘​',$armof);
$armof=str_replace('ъ','‘​b',$armof);
$armof=str_replace('ш','w',$armof);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]); 
   $armof = $text;
$armof=str_replace('k','қ ​',$armof);
$armof=str_replace('R','я',$armof);
$armof=str_replace('e','е​',$armof);
$armof=str_replace('p','р​',$armof);
$armof=str_replace('t','т​',$armof);
$armof=str_replace('y','й​',$armof);
$armof=str_replace('Y','у​',$armof);
$armof=str_replace('N','и​',$armof);
$armof=str_replace('o','о​',$armof);
$armof=str_replace('N','п​',$armof);
$armof=str_replace('a','а​',$armof);
$armof=str_replace('A','д​',$armof);
$armof=str_replace('Q','ф​',$armof);
$armof=str_replace('r','г​',$armof);
$armof=str_replace('X','ж​',$armof);
$armof=str_replace('k','​к',$armof);
$armof=str_replace('n','л​',$armof);
$armof=str_replace('b','з​',$armof);
$armof=str_replace('x','ҳ',$armof);
$armof=str_replace('c','с​',$armof);
$armof=str_replace('B','в',$armof);
$armof=str_replace('b','б​',$armof);
$armof=str_replace('H','н​',$armof);
$armof=str_replace('m','м​',$armof);
$armof=str_replace('e','ё​',$armof);
$armof=str_replace('f‘','ғ​',$armof);
$armof=str_replace('b‘','ъ​',$armof);
$armof=str_replace('w','ш',$armof);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]); 
   $armof = $text;
$armof=str_replace('q','🇶​',$armof);
$armof=str_replace('w','🇼​',$armof);
$armof=str_replace('e','🇪​',$armof);
$armof=str_replace('r','🇷​',$armof);
$armof=str_replace('t','🇹​',$armof);
$armof=str_replace('y','🇾​',$armof);
$armof=str_replace('v','🇺​',$armof);
$armof=str_replace('i','🇮​',$armof);
$armof=str_replace('o','🇴​',$armof);
$armof=str_replace('p','🇵​',$armof);
$armof=str_replace('a','🇦​',$armof);
$armof=str_replace('s','🇸​',$armof);
$armof=str_replace('d','🇩​',$armof);
$armof=str_replace('f','🇫​',$armof);
$armof=str_replace('g','🇬​',$armof);
$armof=str_replace('h','🇭​',$armof);
$armof=str_replace('j','🇯​',$armof);
$armof=str_replace('k','​🇰',$armof);
$armof=str_replace('l','🇱​',$armof);
$armof=str_replace('z','🇿​',$armof);
$armof=str_replace('x','🇽​',$armof);
$armof=str_replace('c','🇨​',$armof);
$armof=str_replace('u','🇻​',$armof);
$armof=str_replace('b','🇧​',$armof);
$armof=str_replace('n','🇳​',$armof);
$armof=str_replace('m','🇲​',$armof);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]); 
   $armof = $text;
$armof=str_replace('q','q​',$armof);
$armof=str_replace('w','ω​',$armof);
$armof=str_replace('e','є​',$armof);
$armof=str_replace('r','я​',$armof);
$armof=str_replace('t','т​',$armof);
$armof=str_replace('y','у​',$armof);
$armof=str_replace('u','υ​',$armof);
$armof=str_replace('i','ι​',$armof);
$armof=str_replace('o','σ​',$armof);
$armof=str_replace('p','ρ​',$armof);
$armof=str_replace('a','α​',$armof);
$armof=str_replace('s','ѕ​',$armof);
$armof=str_replace('d','∂​',$armof);
$armof=str_replace('f','f​',$armof);
$armof=str_replace('g','g​',$armof);
$armof=str_replace('h','н​',$armof);
$armof=str_replace('j','ʝ​',$armof);
$armof=str_replace('k','​к',$armof);
$armof=str_replace('l','ℓ​',$armof);
$armof=str_replace('z','z​',$armof);
$armof=str_replace('x','χ​',$armof);
$armof=str_replace('c','¢​',$armof);
$armof=str_replace('v','ν​',$armof);
$armof=str_replace('b','в​',$armof);
$armof=str_replace('n','и​',$armof);
$armof=str_replace('m','м​',$armof);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]); 
   $armof = $text;
$armof=str_replace('q','🍳​',$armof);
$armof=str_replace('w','👐​',$armof);
$armof=str_replace('e','📧​',$armof);
$armof=str_replace('r','®​',$armof);
$armof=str_replace('t','🌴​',$armof);
$armof=str_replace('y','🌱​',$armof);
$armof=str_replace('u','⛎​',$armof);
$armof=str_replace('i','📍',$armof);
$armof=str_replace('o','⭕​',$armof);
$armof=str_replace('p','🅿​',$armof);
$armof=str_replace('s','⚡​',$armof);
$armof=str_replace('d','👌​',$armof);
$armof=str_replace('f','🎏​',$armof);
$armof=str_replace('g','❡​',$armof);
$armof=str_replace('h','♓​',$armof);
$armof=str_replace('j','🎷​',$armof);
$armof=str_replace('k','​🎋',$armof);
$armof=str_replace('l','👢​',$armof);
$armof=str_replace('z','🍃​',$armof);
$armof=str_replace('x','❌​',$armof);
$armof=str_replace('c','🍉​',$armof);
$armof=str_replace('v','♈​',$armof);
$armof=str_replace('b','🅱​',$armof);
$armof=str_replace('n','🎵​',$armof);
$armof=str_replace('m','Ⓜ​',$armof);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]); 
   $armof = $text;
$armof=str_replace('q','q̲̅​',$armof);
$armof=str_replace('w','w̲̅​',$armof);
$armof=str_replace('e','e̲̅​',$armof);
$armof=str_replace('r','r̲̅​',$armof);
$armof=str_replace('t','t̲̅​',$armof);
$armof=str_replace('y','y̲̅​',$armof);
$armof=str_replace('u','u̲̅​',$armof);
$armof=str_replace('i','i̲̅​',$armof);
$armof=str_replace('o','o̲̅​',$armof);
$armof=str_replace('p','p̲̅​',$armof);
$armof=str_replace('a','a̲̅​',$armof);
$armof=str_replace('s','s̲̅​',$armof);
$armof=str_replace('d','d̲̅​',$armof);
$armof=str_replace('f','f̲̅​',$armof);
$armof=str_replace('g','g̲̅​',$armof);
$armof=str_replace('h','h̲̅​',$armof);
$armof=str_replace('j','j̲̅​',$armof);
$armof=str_replace('k','​k̲̅',$armof);
$armof=str_replace('l','l̲̅​',$armof);
$armof=str_replace('z','z̲̅​',$armof);
$armof=str_replace('x','x̲̅​',$armof);
$armof=str_replace('c','c̲̅​',$armof);
$armof=str_replace('v','v̲̅​',$armof);
$armof=str_replace('b','b̲̅​',$armof);
$armof=str_replace('n','n̲̅​',$armof);
$armof=str_replace('m','m̲̅​',$armof);
$armof = explode(">",$mtext);
$armof = $armof[1];
$armof=str_replace('q','ǫ​',$armof);
$armof=str_replace('w','ᴡ​',$armof);
$armof=str_replace('e','ᴇ​',$armof);
$armof=str_replace('r','ʀ​',$armof);
$armof=str_replace('t','ᴛ​',$armof);
$armof=str_replace('y','ʏ​',$armof);
$armof=str_replace('u','ᴜ​',$armof);
$armof=str_replace('i','ɪ​',$armof);
$armof=str_replace('o','ᴏ​',$armof);
$armof=str_replace('p','ᴘ​',$armof);
$armof=str_replace('a','ᴀ​',$armof);
$armof=str_replace('s','s​',$armof);
$armof=str_replace('d','ᴅ​',$armof);
$armof=str_replace('f','ғ​',$armof);
$armof=str_replace('g','ɢ​',$armof);
$armof=str_replace('h','ʜ​',$armof);
$armof=str_replace('j','ᴊ​',$armof);
$armof=str_replace('k','​ᴋ',$armof);
$armof=str_replace('l','ʟ​',$armof);
$armof=str_replace('z','ᴢ​',$armof);
$armof=str_replace('x','x​',$armof);
$armof=str_replace('c','ᴄ​',$armof);
$armof=str_replace('v','ᴠ​',$armof);
$armof=str_replace('b','ʙ​',$armof);
$armof=str_replace('n','ɴ​',$armof);
$armof=str_replace('m','ᴍ',$armof);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]); 
   $armof = $text;
$armof=str_replace('q','q͛​',$armof);
$armof=str_replace('w','w͛​',$armof);
$armof=str_replace('e','e͛​',$armof);
$armof=str_replace('r','r͛​',$armof);
$armof=str_replace('t','t͛​',$armof);
$armof=str_replace('y','y͛​',$armof);
$armof=str_replace('u','u͛​',$armof);
$armof=str_replace('i','i͛​',$armof);
$armof=str_replace('o','o͛​',$armof);
$armof=str_replace('p','p͛​',$armof);
$armof=str_replace('a','a͛​',$armof);
$armof=str_replace('s','s͛​',$armof);
$armof=str_replace('d','d͛​',$armof);
$armof=str_replace('f','f͛​',$armof);
$armof=str_replace('g','g͛​',$armof);
$armof=str_replace('h','h͛​',$armof);
$armof=str_replace('j','j͛​',$armof);
$armof=str_replace('k','​k͛',$armof);
$armof=str_replace('l','l͛​',$armof);
$armof=str_replace('z','z͛​',$armof);
$armof=str_replace('x','x͛​',$armof);
$armof=str_replace('c','c͛​',$armof);
$armof=str_replace('v','v͛​',$armof);
$armof=str_replace('b','b͛​',$armof);
$armof=str_replace('n','n͛​',$armof);
$armof=str_replace('m','m͛​',$armof);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]);

   $armof = $text;
$armof = str_replace('a','𝒂',$text); 
 $armof = str_replace('b','𝒃',$armof); 
 $armof = str_replace('c','𝒄',$armof); 
 $armof = str_replace('d','𝒅',$armof); 
 $armof = str_replace('e','𝒆',$armof); 
 $armof = str_replace('f','𝒇',$armof); 
 $armof = str_replace('g','𝒈',$armof); 
 $armof = str_replace('h','𝒉',$armof); 
 $armof = str_replace('i','𝒊',$armof); 
 $armof = str_replace('j','𝒋',$armof); 
 $armof = str_replace('k','𝒌',$armof); 
 $armof = str_replace('l','𝒍',$armof); 
 $armof = str_replace('m','𝒎',$armof); 
 $armof = str_replace('n','𝒏',$armof); 
 $armof = str_replace('o','𝒐',$armof); 
 $armof = str_replace('p','𝒑',$armof); 
 $armof = str_replace('q','𝒒',$armof); 
 $armof = str_replace('r','𝒓',$armof); 
 $armof = str_replace('s','𝒔',$armof); 
 $armof = str_replace('t','𝒕',$armof); 
 $armof = str_replace('u','𝒖',$armof); 
 $armof = str_replace('v','𝒗',$armof); 
 $armof = str_replace('w','𝒘',$armof); 
 $armof = str_replace('x','𝒙',$armof); 
 $armof = str_replace('y','𝒚',$armof); 
 $armof = str_replace('z','𝒛',$armof);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$armof." ".$smile
   ]);
} 

