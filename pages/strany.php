<?php   
/*
$off=16;                    
for ($i=1;$i<=301;$i++){ 
  echo 'if ($strana'.$i.'){
          $offset = '.$off.';
          $stranka_aktual = '.$i.';
        }
        else {
        
        }
  ';
$off=($i*16);  
}   
*/               
/*                    
for ($i=1;$i<=301;$i++){
  echo '$strana'.$i.' = isset($_POST['."'".$i."'".'])?true:false;<br>';
}   
*/
$strana1 = isset($_POST['1'])?true:false;
$strana2 = isset($_POST['2'])?true:false;
$strana3 = isset($_POST['3'])?true:false;
$strana4 = isset($_POST['4'])?true:false;
$strana5 = isset($_POST['5'])?true:false;
$strana6 = isset($_POST['6'])?true:false;
$strana7 = isset($_POST['7'])?true:false;
$strana8 = isset($_POST['8'])?true:false;
$strana9 = isset($_POST['9'])?true:false;
$strana10 = isset($_POST['10'])?true:false;
$strana11 = isset($_POST['11'])?true:false;
$strana12 = isset($_POST['12'])?true:false;
$strana13 = isset($_POST['13'])?true:false;
$strana14 = isset($_POST['14'])?true:false;
$strana15 = isset($_POST['15'])?true:false;
$strana16 = isset($_POST['16'])?true:false;
$strana17 = isset($_POST['17'])?true:false;
$strana18 = isset($_POST['18'])?true:false;
$strana19 = isset($_POST['19'])?true:false;
$strana20 = isset($_POST['20'])?true:false;
$strana21 = isset($_POST['21'])?true:false;
$strana22 = isset($_POST['22'])?true:false;
$strana23 = isset($_POST['23'])?true:false;
$strana24 = isset($_POST['24'])?true:false;
$strana25 = isset($_POST['25'])?true:false;
$strana26 = isset($_POST['26'])?true:false;
$strana27 = isset($_POST['27'])?true:false;
$strana28 = isset($_POST['28'])?true:false;
$strana29 = isset($_POST['29'])?true:false;
$strana30 = isset($_POST['30'])?true:false;
$strana31 = isset($_POST['31'])?true:false;
$strana32 = isset($_POST['32'])?true:false;
$strana33 = isset($_POST['33'])?true:false;
$strana34 = isset($_POST['34'])?true:false;
$strana35 = isset($_POST['35'])?true:false;
$strana36 = isset($_POST['36'])?true:false;
$strana37 = isset($_POST['37'])?true:false;
$strana38 = isset($_POST['38'])?true:false;
$strana39 = isset($_POST['39'])?true:false;
$strana40 = isset($_POST['40'])?true:false;
$strana41 = isset($_POST['41'])?true:false;
$strana42 = isset($_POST['42'])?true:false;
$strana43 = isset($_POST['43'])?true:false;
$strana44 = isset($_POST['44'])?true:false;
$strana45 = isset($_POST['45'])?true:false;
$strana46 = isset($_POST['46'])?true:false;
$strana47 = isset($_POST['47'])?true:false;
$strana48 = isset($_POST['48'])?true:false;
$strana49 = isset($_POST['49'])?true:false;
$strana50 = isset($_POST['50'])?true:false;
$strana51 = isset($_POST['51'])?true:false;
$strana52 = isset($_POST['52'])?true:false;
$strana53 = isset($_POST['53'])?true:false;
$strana54 = isset($_POST['54'])?true:false;
$strana55 = isset($_POST['55'])?true:false;
$strana56 = isset($_POST['56'])?true:false;
$strana57 = isset($_POST['57'])?true:false;
$strana58 = isset($_POST['58'])?true:false;
$strana59 = isset($_POST['59'])?true:false;
$strana60 = isset($_POST['60'])?true:false;
$strana61 = isset($_POST['61'])?true:false;
$strana62 = isset($_POST['62'])?true:false;
$strana63 = isset($_POST['63'])?true:false;
$strana64 = isset($_POST['64'])?true:false;
$strana65 = isset($_POST['65'])?true:false;
$strana66 = isset($_POST['66'])?true:false;
$strana67 = isset($_POST['67'])?true:false;
$strana68 = isset($_POST['68'])?true:false;
$strana69 = isset($_POST['69'])?true:false;
$strana70 = isset($_POST['70'])?true:false;
$strana71 = isset($_POST['71'])?true:false;
$strana72 = isset($_POST['72'])?true:false;
$strana73 = isset($_POST['73'])?true:false;
$strana74 = isset($_POST['74'])?true:false;
$strana75 = isset($_POST['75'])?true:false;
$strana76 = isset($_POST['76'])?true:false;
$strana77 = isset($_POST['77'])?true:false;
$strana78 = isset($_POST['78'])?true:false;
$strana79 = isset($_POST['79'])?true:false;
$strana80 = isset($_POST['80'])?true:false;
$strana81 = isset($_POST['81'])?true:false;
$strana82 = isset($_POST['82'])?true:false;
$strana83 = isset($_POST['83'])?true:false;
$strana84 = isset($_POST['84'])?true:false;
$strana85 = isset($_POST['85'])?true:false;
$strana86 = isset($_POST['86'])?true:false;
$strana87 = isset($_POST['87'])?true:false;
$strana88 = isset($_POST['88'])?true:false;
$strana89 = isset($_POST['89'])?true:false;
$strana90 = isset($_POST['90'])?true:false;
$strana91 = isset($_POST['91'])?true:false;
$strana92 = isset($_POST['92'])?true:false;
$strana93 = isset($_POST['93'])?true:false;
$strana94 = isset($_POST['94'])?true:false;
$strana95 = isset($_POST['95'])?true:false;
$strana96 = isset($_POST['96'])?true:false;
$strana97 = isset($_POST['97'])?true:false;
$strana98 = isset($_POST['98'])?true:false;
$strana99 = isset($_POST['99'])?true:false;
$strana100 = isset($_POST['100'])?true:false;
$strana101 = isset($_POST['101'])?true:false;
$strana102 = isset($_POST['102'])?true:false;
$strana103 = isset($_POST['103'])?true:false;
$strana104 = isset($_POST['104'])?true:false;
$strana105 = isset($_POST['105'])?true:false;
$strana106 = isset($_POST['106'])?true:false;
$strana107 = isset($_POST['107'])?true:false;
$strana108 = isset($_POST['108'])?true:false;
$strana109 = isset($_POST['109'])?true:false;
$strana110 = isset($_POST['110'])?true:false;
$strana111 = isset($_POST['111'])?true:false;
$strana112 = isset($_POST['112'])?true:false;
$strana113 = isset($_POST['113'])?true:false;
$strana114 = isset($_POST['114'])?true:false;
$strana115 = isset($_POST['115'])?true:false;
$strana116 = isset($_POST['116'])?true:false;
$strana117 = isset($_POST['117'])?true:false;
$strana118 = isset($_POST['118'])?true:false;
$strana119 = isset($_POST['119'])?true:false;
$strana120 = isset($_POST['120'])?true:false;
$strana121 = isset($_POST['121'])?true:false;
$strana122 = isset($_POST['122'])?true:false;
$strana123 = isset($_POST['123'])?true:false;
$strana124 = isset($_POST['124'])?true:false;
$strana125 = isset($_POST['125'])?true:false;
$strana126 = isset($_POST['126'])?true:false;
$strana127 = isset($_POST['127'])?true:false;
$strana128 = isset($_POST['128'])?true:false;
$strana129 = isset($_POST['129'])?true:false;
$strana130 = isset($_POST['130'])?true:false;
$strana131 = isset($_POST['131'])?true:false;
$strana132 = isset($_POST['132'])?true:false;
$strana133 = isset($_POST['133'])?true:false;
$strana134 = isset($_POST['134'])?true:false;
$strana135 = isset($_POST['135'])?true:false;
$strana136 = isset($_POST['136'])?true:false;
$strana137 = isset($_POST['137'])?true:false;
$strana138 = isset($_POST['138'])?true:false;
$strana139 = isset($_POST['139'])?true:false;
$strana140 = isset($_POST['140'])?true:false;
$strana141 = isset($_POST['141'])?true:false;
$strana142 = isset($_POST['142'])?true:false;
$strana143 = isset($_POST['143'])?true:false;
$strana144 = isset($_POST['144'])?true:false;
$strana145 = isset($_POST['145'])?true:false;
$strana146 = isset($_POST['146'])?true:false;
$strana147 = isset($_POST['147'])?true:false;
$strana148 = isset($_POST['148'])?true:false;
$strana149 = isset($_POST['149'])?true:false;
$strana150 = isset($_POST['150'])?true:false;
$strana151 = isset($_POST['151'])?true:false;
$strana152 = isset($_POST['152'])?true:false;
$strana153 = isset($_POST['153'])?true:false;
$strana154 = isset($_POST['154'])?true:false;
$strana155 = isset($_POST['155'])?true:false;
$strana156 = isset($_POST['156'])?true:false;
$strana157 = isset($_POST['157'])?true:false;
$strana158 = isset($_POST['158'])?true:false;
$strana159 = isset($_POST['159'])?true:false;
$strana160 = isset($_POST['160'])?true:false;
$strana161 = isset($_POST['161'])?true:false;
$strana162 = isset($_POST['162'])?true:false;
$strana163 = isset($_POST['163'])?true:false;
$strana164 = isset($_POST['164'])?true:false;
$strana165 = isset($_POST['165'])?true:false;
$strana166 = isset($_POST['166'])?true:false;
$strana167 = isset($_POST['167'])?true:false;
$strana168 = isset($_POST['168'])?true:false;
$strana169 = isset($_POST['169'])?true:false;
$strana170 = isset($_POST['170'])?true:false;
$strana171 = isset($_POST['171'])?true:false;
$strana172 = isset($_POST['172'])?true:false;
$strana173 = isset($_POST['173'])?true:false;
$strana174 = isset($_POST['174'])?true:false;
$strana175 = isset($_POST['175'])?true:false;
$strana176 = isset($_POST['176'])?true:false;
$strana177 = isset($_POST['177'])?true:false;
$strana178 = isset($_POST['178'])?true:false;
$strana179 = isset($_POST['179'])?true:false;
$strana180 = isset($_POST['180'])?true:false;
$strana181 = isset($_POST['181'])?true:false;
$strana182 = isset($_POST['182'])?true:false;
$strana183 = isset($_POST['183'])?true:false;
$strana184 = isset($_POST['184'])?true:false;
$strana185 = isset($_POST['185'])?true:false;
$strana186 = isset($_POST['186'])?true:false;
$strana187 = isset($_POST['187'])?true:false;
$strana188 = isset($_POST['188'])?true:false;
$strana189 = isset($_POST['189'])?true:false;
$strana190 = isset($_POST['190'])?true:false;
$strana191 = isset($_POST['191'])?true:false;
$strana192 = isset($_POST['192'])?true:false;
$strana193 = isset($_POST['193'])?true:false;
$strana194 = isset($_POST['194'])?true:false;
$strana195 = isset($_POST['195'])?true:false;
$strana196 = isset($_POST['196'])?true:false;
$strana197 = isset($_POST['197'])?true:false;
$strana198 = isset($_POST['198'])?true:false;
$strana199 = isset($_POST['199'])?true:false;
$strana200 = isset($_POST['200'])?true:false;
$strana201 = isset($_POST['201'])?true:false;
$strana202 = isset($_POST['202'])?true:false;
$strana203 = isset($_POST['203'])?true:false;
$strana204 = isset($_POST['204'])?true:false;
$strana205 = isset($_POST['205'])?true:false;
$strana206 = isset($_POST['206'])?true:false;
$strana207 = isset($_POST['207'])?true:false;
$strana208 = isset($_POST['208'])?true:false;
$strana209 = isset($_POST['209'])?true:false;
$strana210 = isset($_POST['210'])?true:false;
$strana211 = isset($_POST['211'])?true:false;
$strana212 = isset($_POST['212'])?true:false;
$strana213 = isset($_POST['213'])?true:false;
$strana214 = isset($_POST['214'])?true:false;
$strana215 = isset($_POST['215'])?true:false;
$strana216 = isset($_POST['216'])?true:false;
$strana217 = isset($_POST['217'])?true:false;
$strana218 = isset($_POST['218'])?true:false;
$strana219 = isset($_POST['219'])?true:false;
$strana220 = isset($_POST['220'])?true:false;
$strana221 = isset($_POST['221'])?true:false;
$strana222 = isset($_POST['222'])?true:false;
$strana223 = isset($_POST['223'])?true:false;
$strana224 = isset($_POST['224'])?true:false;
$strana225 = isset($_POST['225'])?true:false;
$strana226 = isset($_POST['226'])?true:false;
$strana227 = isset($_POST['227'])?true:false;
$strana228 = isset($_POST['228'])?true:false;
$strana229 = isset($_POST['229'])?true:false;
$strana230 = isset($_POST['230'])?true:false;
$strana231 = isset($_POST['231'])?true:false;
$strana232 = isset($_POST['232'])?true:false;
$strana233 = isset($_POST['233'])?true:false;
$strana234 = isset($_POST['234'])?true:false;
$strana235 = isset($_POST['235'])?true:false;
$strana236 = isset($_POST['236'])?true:false;
$strana237 = isset($_POST['237'])?true:false;
$strana238 = isset($_POST['238'])?true:false;
$strana239 = isset($_POST['239'])?true:false;
$strana240 = isset($_POST['240'])?true:false;
$strana241 = isset($_POST['241'])?true:false;
$strana242 = isset($_POST['242'])?true:false;
$strana243 = isset($_POST['243'])?true:false;
$strana244 = isset($_POST['244'])?true:false;
$strana245 = isset($_POST['245'])?true:false;
$strana246 = isset($_POST['246'])?true:false;
$strana247 = isset($_POST['247'])?true:false;
$strana248 = isset($_POST['248'])?true:false;
$strana249 = isset($_POST['249'])?true:false;
$strana250 = isset($_POST['250'])?true:false;
$strana251 = isset($_POST['251'])?true:false;
$strana252 = isset($_POST['252'])?true:false;
$strana253 = isset($_POST['253'])?true:false;
$strana254 = isset($_POST['254'])?true:false;
$strana255 = isset($_POST['255'])?true:false;
$strana256 = isset($_POST['256'])?true:false;
$strana257 = isset($_POST['257'])?true:false;
$strana258 = isset($_POST['258'])?true:false;
$strana259 = isset($_POST['259'])?true:false;
$strana260 = isset($_POST['260'])?true:false;
$strana261 = isset($_POST['261'])?true:false;
$strana262 = isset($_POST['262'])?true:false;
$strana263 = isset($_POST['263'])?true:false;
$strana264 = isset($_POST['264'])?true:false;
$strana265 = isset($_POST['265'])?true:false;
$strana266 = isset($_POST['266'])?true:false;
$strana267 = isset($_POST['267'])?true:false;
$strana268 = isset($_POST['268'])?true:false;
$strana269 = isset($_POST['269'])?true:false;
$strana270 = isset($_POST['270'])?true:false;
$strana271 = isset($_POST['271'])?true:false;
$strana272 = isset($_POST['272'])?true:false;
$strana273 = isset($_POST['273'])?true:false;
$strana274 = isset($_POST['274'])?true:false;
$strana275 = isset($_POST['275'])?true:false;
$strana276 = isset($_POST['276'])?true:false;
$strana277 = isset($_POST['277'])?true:false;
$strana278 = isset($_POST['278'])?true:false;
$strana279 = isset($_POST['279'])?true:false;
$strana280 = isset($_POST['280'])?true:false;
$strana281 = isset($_POST['281'])?true:false;
$strana282 = isset($_POST['282'])?true:false;
$strana283 = isset($_POST['283'])?true:false;
$strana284 = isset($_POST['284'])?true:false;
$strana285 = isset($_POST['285'])?true:false;
$strana286 = isset($_POST['286'])?true:false;
$strana287 = isset($_POST['287'])?true:false;
$strana288 = isset($_POST['288'])?true:false;
$strana289 = isset($_POST['289'])?true:false;
$strana290 = isset($_POST['290'])?true:false;
$strana291 = isset($_POST['291'])?true:false;
$strana292 = isset($_POST['292'])?true:false;
$strana293 = isset($_POST['293'])?true:false;
$strana294 = isset($_POST['294'])?true:false;
$strana295 = isset($_POST['295'])?true:false;
$strana296 = isset($_POST['296'])?true:false;
$strana297 = isset($_POST['297'])?true:false;
$strana298 = isset($_POST['298'])?true:false;
$strana299 = isset($_POST['299'])?true:false;
$strana300 = isset($_POST['300'])?true:false; 
if ($strana1){ $offset = 0; $stranka_aktual = 1; } else { } if ($strana2){ $offset = 16; $stranka_aktual = 2; } else { } if ($strana3){ $offset = 32; $stranka_aktual = 3; } else { } if ($strana4){ $offset = 48; $stranka_aktual = 4; } else { } if ($strana5){ $offset = 64; $stranka_aktual = 5; } else { } if ($strana6){ $offset = 80; $stranka_aktual = 6; } else { } if ($strana7){ $offset = 96; $stranka_aktual = 7; } else { } if ($strana8){ $offset = 112; $stranka_aktual = 8; } else { } if ($strana9){ $offset = 128; $stranka_aktual = 9; } else { } if ($strana10){ $offset = 144; $stranka_aktual = 10; } else { } if ($strana11){ $offset = 160; $stranka_aktual = 11; } else { } if ($strana12){ $offset = 176; $stranka_aktual = 12; } else { } if ($strana13){ $offset = 192; $stranka_aktual = 13; } else { } if ($strana14){ $offset = 208; $stranka_aktual = 14; } else { } if ($strana15){ $offset = 224; $stranka_aktual = 15; } else { } if ($strana16){ $offset = 240; $stranka_aktual = 16; } else { } if ($strana17){ $offset = 256; $stranka_aktual = 17; } else { } if ($strana18){ $offset = 272; $stranka_aktual = 18; } else { } if ($strana19){ $offset = 288; $stranka_aktual = 19; } else { } if ($strana20){ $offset = 304; $stranka_aktual = 20; } else { } if ($strana21){ $offset = 320; $stranka_aktual = 21; } else { } if ($strana22){ $offset = 336; $stranka_aktual = 22; } else { } if ($strana23){ $offset = 352; $stranka_aktual = 23; } else { } if ($strana24){ $offset = 368; $stranka_aktual = 24; } else { } if ($strana25){ $offset = 384; $stranka_aktual = 25; } else { } if ($strana26){ $offset = 400; $stranka_aktual = 26; } else { } if ($strana27){ $offset = 416; $stranka_aktual = 27; } else { } if ($strana28){ $offset = 432; $stranka_aktual = 28; } else { } if ($strana29){ $offset = 448; $stranka_aktual = 29; } else { } if ($strana30){ $offset = 464; $stranka_aktual = 30; } else { } if ($strana31){ $offset = 480; $stranka_aktual = 31; } else { } if ($strana32){ $offset = 496; $stranka_aktual = 32; } else { } if ($strana33){ $offset = 512; $stranka_aktual = 33; } else { } if ($strana34){ $offset = 528; $stranka_aktual = 34; } else { } if ($strana35){ $offset = 544; $stranka_aktual = 35; } else { } if ($strana36){ $offset = 560; $stranka_aktual = 36; } else { } if ($strana37){ $offset = 576; $stranka_aktual = 37; } else { } if ($strana38){ $offset = 592; $stranka_aktual = 38; } else { } if ($strana39){ $offset = 608; $stranka_aktual = 39; } else { } if ($strana40){ $offset = 624; $stranka_aktual = 40; } else { } if ($strana41){ $offset = 640; $stranka_aktual = 41; } else { } if ($strana42){ $offset = 656; $stranka_aktual = 42; } else { } if ($strana43){ $offset = 672; $stranka_aktual = 43; } else { } if ($strana44){ $offset = 688; $stranka_aktual = 44; } else { } if ($strana45){ $offset = 704; $stranka_aktual = 45; } else { } if ($strana46){ $offset = 720; $stranka_aktual = 46; } else { } if ($strana47){ $offset = 736; $stranka_aktual = 47; } else { } if ($strana48){ $offset = 752; $stranka_aktual = 48; } else { } if ($strana49){ $offset = 768; $stranka_aktual = 49; } else { } if ($strana50){ $offset = 784; $stranka_aktual = 50; } else { } if ($strana51){ $offset = 800; $stranka_aktual = 51; } else { } if ($strana52){ $offset = 816; $stranka_aktual = 52; } else { } if ($strana53){ $offset = 832; $stranka_aktual = 53; } else { } if ($strana54){ $offset = 848; $stranka_aktual = 54; } else { } if ($strana55){ $offset = 864; $stranka_aktual = 55; } else { } if ($strana56){ $offset = 880; $stranka_aktual = 56; } else { } if ($strana57){ $offset = 896; $stranka_aktual = 57; } else { } if ($strana58){ $offset = 912; $stranka_aktual = 58; } else { } if ($strana59){ $offset = 928; $stranka_aktual = 59; } else { } if ($strana60){ $offset = 944; $stranka_aktual = 60; } else { } if ($strana61){ $offset = 960; $stranka_aktual = 61; } else { } if ($strana62){ $offset = 976; $stranka_aktual = 62; } else { } if ($strana63){ $offset = 992; $stranka_aktual = 63; } else { } if ($strana64){ $offset = 1008; $stranka_aktual = 64; } else { } if ($strana65){ $offset = 1024; $stranka_aktual = 65; } else { } if ($strana66){ $offset = 1040; $stranka_aktual = 66; } else { } if ($strana67){ $offset = 1056; $stranka_aktual = 67; } else { } if ($strana68){ $offset = 1072; $stranka_aktual = 68; } else { } if ($strana69){ $offset = 1088; $stranka_aktual = 69; } else { } if ($strana70){ $offset = 1104; $stranka_aktual = 70; } else { } if ($strana71){ $offset = 1120; $stranka_aktual = 71; } else { } if ($strana72){ $offset = 1136; $stranka_aktual = 72; } else { } if ($strana73){ $offset = 1152; $stranka_aktual = 73; } else { } if ($strana74){ $offset = 1168; $stranka_aktual = 74; } else { } if ($strana75){ $offset = 1184; $stranka_aktual = 75; } else { } if ($strana76){ $offset = 1200; $stranka_aktual = 76; } else { } if ($strana77){ $offset = 1216; $stranka_aktual = 77; } else { } if ($strana78){ $offset = 1232; $stranka_aktual = 78; } else { } if ($strana79){ $offset = 1248; $stranka_aktual = 79; } else { } if ($strana80){ $offset = 1264; $stranka_aktual = 80; } else { } if ($strana81){ $offset = 1280; $stranka_aktual = 81; } else { } if ($strana82){ $offset = 1296; $stranka_aktual = 82; } else { } if ($strana83){ $offset = 1312; $stranka_aktual = 83; } else { } if ($strana84){ $offset = 1328; $stranka_aktual = 84; } else { } if ($strana85){ $offset = 1344; $stranka_aktual = 85; } else { } if ($strana86){ $offset = 1360; $stranka_aktual = 86; } else { } if ($strana87){ $offset = 1376; $stranka_aktual = 87; } else { } if ($strana88){ $offset = 1392; $stranka_aktual = 88; } else { } if ($strana89){ $offset = 1408; $stranka_aktual = 89; } else { } if ($strana90){ $offset = 1424; $stranka_aktual = 90; } else { } if ($strana91){ $offset = 1440; $stranka_aktual = 91; } else { } if ($strana92){ $offset = 1456; $stranka_aktual = 92; } else { } if ($strana93){ $offset = 1472; $stranka_aktual = 93; } else { } if ($strana94){ $offset = 1488; $stranka_aktual = 94; } else { } if ($strana95){ $offset = 1504; $stranka_aktual = 95; } else { } if ($strana96){ $offset = 1520; $stranka_aktual = 96; } else { } if ($strana97){ $offset = 1536; $stranka_aktual = 97; } else { } if ($strana98){ $offset = 1552; $stranka_aktual = 98; } else { } if ($strana99){ $offset = 1568; $stranka_aktual = 99; } else { } if ($strana100){ $offset = 1584; $stranka_aktual = 100; } else { } if ($strana101){ $offset = 1600; $stranka_aktual = 101; } else { } if ($strana102){ $offset = 1616; $stranka_aktual = 102; } else { } if ($strana103){ $offset = 1632; $stranka_aktual = 103; } else { } if ($strana104){ $offset = 1648; $stranka_aktual = 104; } else { } if ($strana105){ $offset = 1664; $stranka_aktual = 105; } else { } if ($strana106){ $offset = 1680; $stranka_aktual = 106; } else { } if ($strana107){ $offset = 1696; $stranka_aktual = 107; } else { } if ($strana108){ $offset = 1712; $stranka_aktual = 108; } else { } if ($strana109){ $offset = 1728; $stranka_aktual = 109; } else { } if ($strana110){ $offset = 1744; $stranka_aktual = 110; } else { } if ($strana111){ $offset = 1760; $stranka_aktual = 111; } else { } if ($strana112){ $offset = 1776; $stranka_aktual = 112; } else { } if ($strana113){ $offset = 1792; $stranka_aktual = 113; } else { } if ($strana114){ $offset = 1808; $stranka_aktual = 114; } else { } if ($strana115){ $offset = 1824; $stranka_aktual = 115; } else { } if ($strana116){ $offset = 1840; $stranka_aktual = 116; } else { } if ($strana117){ $offset = 1856; $stranka_aktual = 117; } else { } if ($strana118){ $offset = 1872; $stranka_aktual = 118; } else { } if ($strana119){ $offset = 1888; $stranka_aktual = 119; } else { } if ($strana120){ $offset = 1904; $stranka_aktual = 120; } else { } if ($strana121){ $offset = 1920; $stranka_aktual = 121; } else { } if ($strana122){ $offset = 1936; $stranka_aktual = 122; } else { } if ($strana123){ $offset = 1952; $stranka_aktual = 123; } else { } if ($strana124){ $offset = 1968; $stranka_aktual = 124; } else { } if ($strana125){ $offset = 1984; $stranka_aktual = 125; } else { } if ($strana126){ $offset = 2000; $stranka_aktual = 126; } else { } if ($strana127){ $offset = 2016; $stranka_aktual = 127; } else { } if ($strana128){ $offset = 2032; $stranka_aktual = 128; } else { } if ($strana129){ $offset = 2048; $stranka_aktual = 129; } else { } if ($strana130){ $offset = 2064; $stranka_aktual = 130; } else { } if ($strana131){ $offset = 2080; $stranka_aktual = 131; } else { } if ($strana132){ $offset = 2096; $stranka_aktual = 132; } else { } if ($strana133){ $offset = 2112; $stranka_aktual = 133; } else { } if ($strana134){ $offset = 2128; $stranka_aktual = 134; } else { } if ($strana135){ $offset = 2144; $stranka_aktual = 135; } else { } if ($strana136){ $offset = 2160; $stranka_aktual = 136; } else { } if ($strana137){ $offset = 2176; $stranka_aktual = 137; } else { } if ($strana138){ $offset = 2192; $stranka_aktual = 138; } else { } if ($strana139){ $offset = 2208; $stranka_aktual = 139; } else { } if ($strana140){ $offset = 2224; $stranka_aktual = 140; } else { } if ($strana141){ $offset = 2240; $stranka_aktual = 141; } else { } if ($strana142){ $offset = 2256; $stranka_aktual = 142; } else { } if ($strana143){ $offset = 2272; $stranka_aktual = 143; } else { } if ($strana144){ $offset = 2288; $stranka_aktual = 144; } else { } if ($strana145){ $offset = 2304; $stranka_aktual = 145; } else { } if ($strana146){ $offset = 2320; $stranka_aktual = 146; } else { } if ($strana147){ $offset = 2336; $stranka_aktual = 147; } else { } if ($strana148){ $offset = 2352; $stranka_aktual = 148; } else { } if ($strana149){ $offset = 2368; $stranka_aktual = 149; } else { } if ($strana150){ $offset = 2384; $stranka_aktual = 150; } else { } if ($strana151){ $offset = 2400; $stranka_aktual = 151; } else { } if ($strana152){ $offset = 2416; $stranka_aktual = 152; } else { } if ($strana153){ $offset = 2432; $stranka_aktual = 153; } else { } if ($strana154){ $offset = 2448; $stranka_aktual = 154; } else { } if ($strana155){ $offset = 2464; $stranka_aktual = 155; } else { } if ($strana156){ $offset = 2480; $stranka_aktual = 156; } else { } if ($strana157){ $offset = 2496; $stranka_aktual = 157; } else { } if ($strana158){ $offset = 2512; $stranka_aktual = 158; } else { } if ($strana159){ $offset = 2528; $stranka_aktual = 159; } else { } if ($strana160){ $offset = 2544; $stranka_aktual = 160; } else { } if ($strana161){ $offset = 2560; $stranka_aktual = 161; } else { } if ($strana162){ $offset = 2576; $stranka_aktual = 162; } else { } if ($strana163){ $offset = 2592; $stranka_aktual = 163; } else { } if ($strana164){ $offset = 2608; $stranka_aktual = 164; } else { } if ($strana165){ $offset = 2624; $stranka_aktual = 165; } else { } if ($strana166){ $offset = 2640; $stranka_aktual = 166; } else { } if ($strana167){ $offset = 2656; $stranka_aktual = 167; } else { } if ($strana168){ $offset = 2672; $stranka_aktual = 168; } else { } if ($strana169){ $offset = 2688; $stranka_aktual = 169; } else { } if ($strana170){ $offset = 2704; $stranka_aktual = 170; } else { } if ($strana171){ $offset = 2720; $stranka_aktual = 171; } else { } if ($strana172){ $offset = 2736; $stranka_aktual = 172; } else { } if ($strana173){ $offset = 2752; $stranka_aktual = 173; } else { } if ($strana174){ $offset = 2768; $stranka_aktual = 174; } else { } if ($strana175){ $offset = 2784; $stranka_aktual = 175; } else { } if ($strana176){ $offset = 2800; $stranka_aktual = 176; } else { } if ($strana177){ $offset = 2816; $stranka_aktual = 177; } else { } if ($strana178){ $offset = 2832; $stranka_aktual = 178; } else { } if ($strana179){ $offset = 2848; $stranka_aktual = 179; } else { } if ($strana180){ $offset = 2864; $stranka_aktual = 180; } else { } if ($strana181){ $offset = 2880; $stranka_aktual = 181; } else { } if ($strana182){ $offset = 2896; $stranka_aktual = 182; } else { } if ($strana183){ $offset = 2912; $stranka_aktual = 183; } else { } if ($strana184){ $offset = 2928; $stranka_aktual = 184; } else { } if ($strana185){ $offset = 2944; $stranka_aktual = 185; } else { } if ($strana186){ $offset = 2960; $stranka_aktual = 186; } else { } if ($strana187){ $offset = 2976; $stranka_aktual = 187; } else { } if ($strana188){ $offset = 2992; $stranka_aktual = 188; } else { } if ($strana189){ $offset = 3008; $stranka_aktual = 189; } else { } if ($strana190){ $offset = 3024; $stranka_aktual = 190; } else { } if ($strana191){ $offset = 3040; $stranka_aktual = 191; } else { } if ($strana192){ $offset = 3056; $stranka_aktual = 192; } else { } if ($strana193){ $offset = 3072; $stranka_aktual = 193; } else { } if ($strana194){ $offset = 3088; $stranka_aktual = 194; } else { } if ($strana195){ $offset = 3104; $stranka_aktual = 195; } else { } if ($strana196){ $offset = 3120; $stranka_aktual = 196; } else { } if ($strana197){ $offset = 3136; $stranka_aktual = 197; } else { } if ($strana198){ $offset = 3152; $stranka_aktual = 198; } else { } if ($strana199){ $offset = 3168; $stranka_aktual = 199; } else { } if ($strana200){ $offset = 3184; $stranka_aktual = 200; } else { } if ($strana201){ $offset = 3200; $stranka_aktual = 201; } else { } if ($strana202){ $offset = 3216; $stranka_aktual = 202; } else { } if ($strana203){ $offset = 3232; $stranka_aktual = 203; } else { } if ($strana204){ $offset = 3248; $stranka_aktual = 204; } else { } if ($strana205){ $offset = 3264; $stranka_aktual = 205; } else { } if ($strana206){ $offset = 3280; $stranka_aktual = 206; } else { } if ($strana207){ $offset = 3296; $stranka_aktual = 207; } else { } if ($strana208){ $offset = 3312; $stranka_aktual = 208; } else { } if ($strana209){ $offset = 3328; $stranka_aktual = 209; } else { } if ($strana210){ $offset = 3344; $stranka_aktual = 210; } else { } if ($strana211){ $offset = 3360; $stranka_aktual = 211; } else { } if ($strana212){ $offset = 3376; $stranka_aktual = 212; } else { } if ($strana213){ $offset = 3392; $stranka_aktual = 213; } else { } if ($strana214){ $offset = 3408; $stranka_aktual = 214; } else { } if ($strana215){ $offset = 3424; $stranka_aktual = 215; } else { } if ($strana216){ $offset = 3440; $stranka_aktual = 216; } else { } if ($strana217){ $offset = 3456; $stranka_aktual = 217; } else { } if ($strana218){ $offset = 3472; $stranka_aktual = 218; } else { } if ($strana219){ $offset = 3488; $stranka_aktual = 219; } else { } if ($strana220){ $offset = 3504; $stranka_aktual = 220; } else { } if ($strana221){ $offset = 3520; $stranka_aktual = 221; } else { } if ($strana222){ $offset = 3536; $stranka_aktual = 222; } else { } if ($strana223){ $offset = 3552; $stranka_aktual = 223; } else { } if ($strana224){ $offset = 3568; $stranka_aktual = 224; } else { } if ($strana225){ $offset = 3584; $stranka_aktual = 225; } else { } if ($strana226){ $offset = 3600; $stranka_aktual = 226; } else { } if ($strana227){ $offset = 3616; $stranka_aktual = 227; } else { } if ($strana228){ $offset = 3632; $stranka_aktual = 228; } else { } if ($strana229){ $offset = 3648; $stranka_aktual = 229; } else { } if ($strana230){ $offset = 3664; $stranka_aktual = 230; } else { } if ($strana231){ $offset = 3680; $stranka_aktual = 231; } else { } if ($strana232){ $offset = 3696; $stranka_aktual = 232; } else { } if ($strana233){ $offset = 3712; $stranka_aktual = 233; } else { } if ($strana234){ $offset = 3728; $stranka_aktual = 234; } else { } if ($strana235){ $offset = 3744; $stranka_aktual = 235; } else { } if ($strana236){ $offset = 3760; $stranka_aktual = 236; } else { } if ($strana237){ $offset = 3776; $stranka_aktual = 237; } else { } if ($strana238){ $offset = 3792; $stranka_aktual = 238; } else { } if ($strana239){ $offset = 3808; $stranka_aktual = 239; } else { } if ($strana240){ $offset = 3824; $stranka_aktual = 240; } else { } if ($strana241){ $offset = 3840; $stranka_aktual = 241; } else { } if ($strana242){ $offset = 3856; $stranka_aktual = 242; } else { } if ($strana243){ $offset = 3872; $stranka_aktual = 243; } else { } if ($strana244){ $offset = 3888; $stranka_aktual = 244; } else { } if ($strana245){ $offset = 3904; $stranka_aktual = 245; } else { } if ($strana246){ $offset = 3920; $stranka_aktual = 246; } else { } if ($strana247){ $offset = 3936; $stranka_aktual = 247; } else { } if ($strana248){ $offset = 3952; $stranka_aktual = 248; } else { } if ($strana249){ $offset = 3968; $stranka_aktual = 249; } else { } if ($strana250){ $offset = 3984; $stranka_aktual = 250; } else { } if ($strana251){ $offset = 4000; $stranka_aktual = 251; } else { } if ($strana252){ $offset = 4016; $stranka_aktual = 252; } else { } if ($strana253){ $offset = 4032; $stranka_aktual = 253; } else { } if ($strana254){ $offset = 4048; $stranka_aktual = 254; } else { } if ($strana255){ $offset = 4064; $stranka_aktual = 255; } else { } if ($strana256){ $offset = 4080; $stranka_aktual = 256; } else { } if ($strana257){ $offset = 4096; $stranka_aktual = 257; } else { } if ($strana258){ $offset = 4112; $stranka_aktual = 258; } else { } if ($strana259){ $offset = 4128; $stranka_aktual = 259; } else { } if ($strana260){ $offset = 4144; $stranka_aktual = 260; } else { } if ($strana261){ $offset = 4160; $stranka_aktual = 261; } else { } if ($strana262){ $offset = 4176; $stranka_aktual = 262; } else { } if ($strana263){ $offset = 4192; $stranka_aktual = 263; } else { } if ($strana264){ $offset = 4208; $stranka_aktual = 264; } else { } if ($strana265){ $offset = 4224; $stranka_aktual = 265; } else { } if ($strana266){ $offset = 4240; $stranka_aktual = 266; } else { } if ($strana267){ $offset = 4256; $stranka_aktual = 267; } else { } if ($strana268){ $offset = 4272; $stranka_aktual = 268; } else { } if ($strana269){ $offset = 4288; $stranka_aktual = 269; } else { } if ($strana270){ $offset = 4304; $stranka_aktual = 270; } else { } if ($strana271){ $offset = 4320; $stranka_aktual = 271; } else { } if ($strana272){ $offset = 4336; $stranka_aktual = 272; } else { } if ($strana273){ $offset = 4352; $stranka_aktual = 273; } else { } if ($strana274){ $offset = 4368; $stranka_aktual = 274; } else { } if ($strana275){ $offset = 4384; $stranka_aktual = 275; } else { } if ($strana276){ $offset = 4400; $stranka_aktual = 276; } else { } if ($strana277){ $offset = 4416; $stranka_aktual = 277; } else { } if ($strana278){ $offset = 4432; $stranka_aktual = 278; } else { } if ($strana279){ $offset = 4448; $stranka_aktual = 279; } else { } if ($strana280){ $offset = 4464; $stranka_aktual = 280; } else { } if ($strana281){ $offset = 4480; $stranka_aktual = 281; } else { } if ($strana282){ $offset = 4496; $stranka_aktual = 282; } else { } if ($strana283){ $offset = 4512; $stranka_aktual = 283; } else { } if ($strana284){ $offset = 4528; $stranka_aktual = 284; } else { } if ($strana285){ $offset = 4544; $stranka_aktual = 285; } else { } if ($strana286){ $offset = 4560; $stranka_aktual = 286; } else { } if ($strana287){ $offset = 4576; $stranka_aktual = 287; } else { } if ($strana288){ $offset = 4592; $stranka_aktual = 288; } else { } if ($strana289){ $offset = 4608; $stranka_aktual = 289; } else { } if ($strana290){ $offset = 4624; $stranka_aktual = 290; } else { } if ($strana291){ $offset = 4640; $stranka_aktual = 291; } else { } if ($strana292){ $offset = 4656; $stranka_aktual = 292; } else { } if ($strana293){ $offset = 4672; $stranka_aktual = 293; } else { } if ($strana294){ $offset = 4688; $stranka_aktual = 294; } else { } if ($strana295){ $offset = 4704; $stranka_aktual = 295; } else { } if ($strana296){ $offset = 4720; $stranka_aktual = 296; } else { } if ($strana297){ $offset = 4736; $stranka_aktual = 297; } else { } if ($strana298){ $offset = 4752; $stranka_aktual = 298; } else { } if ($strana299){ $offset = 4768; $stranka_aktual = 299; } else { } if ($strana300){ $offset = 4784; $stranka_aktual = 300; } else { }            
?>