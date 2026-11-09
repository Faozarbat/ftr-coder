<?php require __DIR__.'/lib.php';
if(($_GET['pin']??'')!==ADMIN_PIN){ http_response_code(403); exit('Tambahkan ?pin=PIN_ADMIN di alamat'); }
$db=db(); $o='ENGINE=InnoDB DEFAULT CHARSET=utf8mb4';
$db->exec("CREATE TABLE IF NOT EXISTS gs_players(code CHAR(3) PRIMARY KEY,team CHAR(1) NOT NULL,name VARCHAR(60) NOT NULL,token CHAR(32) NOT NULL UNIQUE)$o");
$db->exec("CREATE TABLE IF NOT EXISTS gs_matches(no TINYINT PRIMARY KEY,winner CHAR(1) NULL,sched DATETIME NULL)$o");
$db->exec("CREATE TABLE IF NOT EXISTS gs_avail(player CHAR(3) NOT NULL,wk DATE NOT NULL,dow TINYINT NOT NULL,hr TINYINT NOT NULL,PRIMARY KEY(player,wk,dow,hr))$o");
foreach(TEAMS as $t=>$ps) foreach($ps as [$c,$n]) $db->prepare('INSERT IGNORE INTO gs_players(code,team,name,token) VALUES(?,?,?,?)')->execute([$c,$t,$n,bin2hex(random_bytes(16))]);
if(!$db->query('SELECT COUNT(*) FROM gs_matches')->fetchColumn()){ $init=[1=>'G',3=>'B',6=>'H',7=>'F']; for($n=1;$n<=27;$n++) $db->prepare('INSERT INTO gs_matches(no,winner) VALUES(?,?)')->execute([$n,$init[$n]??null]); }
normalize(); autoschedule();
$base=(isset($_SERVER['HTTPS'])?'https':'http').'://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['SCRIPT_NAME']),'/');
echo '<!DOCTYPE html><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><body style="background:#000;color:#fff;font:16px system-ui;padding:16px"><h2>Setup selesai</h2><p>Bracket: <a style="color:#ffd400" href="bracket.php">bracket.php</a>. Link peserta (rahasia, bagikan satu per orang):</p><table cellpadding=6 border=1 style="border-collapse:collapse">';
foreach($db->query('SELECT * FROM gs_players ORDER BY code') as $p){ $u="$base/jadwal.php?t={$p['token']}"; $m=rawurlencode("Halo {$p['name']}, isi jam kosongmu untuk jadwal match Gloria Smash di sini: $u");
 echo "<tr><td>{$p['code']}</td><td>{$p['name']}</td><td>Tim {$p['team']}</td><td><a style='color:#2ee66b' href='$u'>buka</a></td><td><a style='color:#ffd400' target=_blank href='https://wa.me/?text=$m'>kirim WA</a></td></tr>"; }
echo '</table></body>';