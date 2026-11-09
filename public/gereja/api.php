<?php require __DIR__.'/lib.php'; header('Content-Type: application/json');
function out($d,$c=200){ http_response_code($c); echo json_encode($d); exit; }
$a=$_POST['act']??'';
if($a==='login'){ if(($_POST['pin']??'')===ADMIN_PIN){ $_SESSION['adm']=1; out(['ok'=>1]); } out(['err'=>'PIN salah'],403); }
if($a==='toggle'){ $q=db()->prepare('SELECT * FROM gs_players WHERE token=?'); $q->execute([$_POST['t']??'']); $me=$q->fetch(); if(!$me) out(['err'=>'Link tidak valid'],404);
 $d=(int)($_POST['dow']??0); $h=(int)($_POST['hr']??0); if($d<1||$d>7||$h<16||$h>21) out(['err'=>'Jam tidak valid'],400);
 $e=db()->prepare('DELETE FROM gs_avail WHERE player=? AND dow=? AND hr=?'); $e->execute([$me['code'],$d,$h]);
 if(!$e->rowCount()) db()->prepare('INSERT INTO gs_avail(player,dow,hr) VALUES(?,?,?)')->execute([$me['code'],$d,$h]);
 autoschedule(); out(['ok'=>1,'matches'=>teamMatches($me['team'])]); }
if(!isset($_SESSION['adm'])) out(['err'=>'Khusus admin'],403);
$n=(int)($_POST['no']??0); if($n<1||$n>27) out(['err'=>'Match tidak valid'],400); $cl=[];
if($a==='win'){ $r=setWinner($n,$_POST['team']??''); if(is_string($r)) out(['err'=>$r],400); $cl=$r; }
elseif($a==='clear'){ $w=normalize(); $b=$w; db()->prepare('UPDATE gs_matches SET winner=NULL WHERE no=?')->execute([$n]); $af=normalize(); foreach($b as $k=>$_) if($k!==$n&&!isset($af[$k])) $cl[]=$k; }
elseif($a==='sched'){ $s=$_POST['sched']??''; if(!preg_match('/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/',$s)) out(['err'=>'Format jadwal salah'],400); db()->prepare('UPDATE gs_matches SET sched=? WHERE no=?')->execute([$s,$n]); }
elseif($a==='unsched'){ db()->prepare('UPDATE gs_matches SET sched=NULL WHERE no=?')->execute([$n]); }
elseif($a==='sc_save'){ $st=json_decode($_POST['state']??'',true); if(!is_array($st)||!isset($st['sets'],$st['blue'],$st['red'])) out(['err'=>'State tidak valid'],400);
 [$ta,$tb]=teams($n,normalize()); if(!$ta||!$tb||!in_array($st['blue'],[$ta,$tb])||!in_array($st['red'],[$ta,$tb])||$st['blue']===$st['red']) out(['err'=>'Tim tidak cocok dengan match'],400);
 db()->prepare('REPLACE INTO gs_scores(no,state) VALUES(?,?)')->execute([$n,json_encode($st)]); out(['ok'=>1]); }
elseif($a==='sc_finish'){ $q=db()->prepare('SELECT state FROM gs_scores WHERE no=?'); $q->execute([$n]); $st=json_decode($q->fetchColumn()?:'null',true); if(!$st) out(['err'=>'Belum ada skor tersimpan'],400);
 $wn=matchWinner($st); if(!$wn) out(['err'=>'Belum ada tim yang menang 2 set'],400); $r=setWinner($n,$wn); if(is_string($r)) out(['err'=>$r],400);
 $st['fin']=true; db()->prepare('REPLACE INTO gs_scores(no,state) VALUES(?,?)')->execute([$n,json_encode($st)]); autoschedule(); out(['ok'=>1,'winner'=>$wn,'cleared'=>$r]); }
else out(['err'=>'Aksi tidak dikenal'],400);
autoschedule(); out(['ok'=>1,'cleared'=>$cl]);