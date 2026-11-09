<?php
date_default_timezone_set('Asia/Jakarta'); session_start();
const ADMIN_PIN = '2026'; // GANTI sebelum dipakai
const TEAMS = ['A'=>[['016','Alex'],['025','Bassri']],'B'=>[['002','Sapta'],['006','Pak Iren']],'C'=>[['013','Kevin'],['022','Pak Grizel']],'D'=>[['010','Ingat'],['023','Pak Putra']],'E'=>[['004','Pak Chesa'],['026','Pak Cheril']],'F'=>[['015','Arjun'],['017','Pak Ezra']],'G'=>[['009','Eki'],['012','Darman']],'H'=>[['007','Yoel'],['008','Pak Wilman']],'I'=>[['020','Pak Lois'],['028','Zaman']],'J'=>[['005','Pak Gembala'],['014','Agus']],'K'=>[['018','Pak Hagai'],['021','Pak Rafael']],'L'=>[['011','Frisky'],['027','Damai']],'M'=>[['019','Pak Grace Zai'],['024','Pak Gabriel']],'N'=>[['001','Faozar'],['003','Marfan']]];
// T=tim awal, W=pemenang match, L=yang kalah di match
const DEF = [1=>['T:C','T:G'],2=>['T:I','T:E'],3=>['T:B','T:M'],4=>['T:J','T:L'],5=>['T:N','T:A'],6=>['T:D','T:H'],7=>['T:K','T:F'],
 8=>['W:1','W:2'],9=>['W:3','W:4'],10=>['W:6','W:7'],11=>['L:1','L:2'],12=>['L:3','L:4'],13=>['L:6','L:7'],
 14=>['W:11','L:8'],15=>['W:12','L:9'],16=>['L:5','L:10'],17=>['W:8','W:9'],18=>['W:10','W:5'],
 19=>['W:14','W:15'],20=>['W:16','W:13'],21=>['W:19','L:17'],22=>['W:20','L:18'],
 23=>['W:17','W:18'],24=>['W:21','W:22'],25=>['L:23','W:24'],26=>['W:23','W:25'],27=>['W:23','W:25']];
function env(){static $e; if($e) return $e; $e=[]; $f=__DIR__.'/../../.env';
 foreach(is_file($f)?file($f,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES):[] as $l){ if($l[0]==='#'||!str_contains($l,'=')) continue; [$k,$v]=explode('=',$l,2); $e[trim($k)]=trim($v," \"'"); } return $e; }
function db(){static $p; if(!$p){ $e=env(); $p=new PDO('mysql:host='.($e['DB_HOST']??'127.0.0.1').';port='.($e['DB_PORT']??3306).';dbname='.$e['DB_DATABASE'].';charset=utf8mb4',$e['DB_USERNAME'],$e['DB_PASSWORD']??'',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]); $p->exec('CREATE TABLE IF NOT EXISTS gs_scores(no TINYINT PRIMARY KEY,state TEXT NOT NULL,upd TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
  try{ if(!$p->query("SHOW COLUMNS FROM gs_avail LIKE 'wk'")->fetch()){ $p->exec("ALTER TABLE gs_avail ADD COLUMN wk DATE NOT NULL DEFAULT '2000-01-01'"); $p->exec('ALTER TABLE gs_avail DROP PRIMARY KEY, ADD PRIMARY KEY(player,wk,dow,hr)'); $p->prepare('UPDATE gs_avail SET wk=?')->execute([weekStart()]); } }catch(Throwable $e){} } return $p; }
function winners(){ $w=[]; foreach(db()->query('SELECT no,winner FROM gs_matches WHERE winner IS NOT NULL') as $r) $w[(int)$r['no']]=$r['winner']; return $w; }
function slot($s,$w){ [$t,$v]=explode(':',$s); if($t==='T') return $v; $v=(int)$v; if($t==='W') return $w[$v]??null;
 if(!isset($w[$v])) return null; [$a,$b]=teams($v,$w); return $w[$v]===$a?$b:$a; }
function teams($n,$w){ if($n===27){ if(!isset($w[26])||$w[26]!==($w[25]??null)) return [null,null]; return teams(26,$w); } return [slot(DEF[$n][0],$w),slot(DEF[$n][1],$w)]; }
function normalize(){ $w=winners(); for($n=1;$n<=27;$n++){ if(!isset($w[$n])) continue; [$a,$b]=teams($n,$w);
  if(!$a||!$b||!in_array($w[$n],[$a,$b])){ unset($w[$n]); db()->prepare('UPDATE gs_matches SET winner=NULL WHERE no=?')->execute([$n]); } } return $w; }
function lab($s){ [$t,$v]=explode(':',$s); return $t==='T'?'TIM '.$v:($t==='W'?'Menang M':'Kalah M').$v; }
function tn($t){ return implode(' & ',array_column(TEAMS[$t],1)); }
function view(){ $w=normalize(); $s=[]; foreach(db()->query('SELECT no,sched FROM gs_matches') as $r) $s[$r['no']]=$r['sched'];
 $m=[]; for($n=1;$n<=27;$n++){ [$a,$b]=teams($n,$w); $m[$n]=['a'=>$a,'b'=>$b,'la'=>lab(DEF[$n][0]),'lb'=>lab(DEF[$n][1]),'w'=>$w[$n]??null,'s'=>$s[$n]??null]; }
 $loss=array_fill_keys(array_keys(TEAMS),0); foreach($w as $n=>$t){ [$a,$b]=teams($n,$w); $l=$t===$a?$b:$a; if($l) $loss[$l]++; }
 foreach(db()->query('SELECT no,state FROM gs_scores') as $r){ $st=json_decode($r['state'],true); $n=(int)$r['no']; if($st&&!empty($st['fin'])&&isset($m[$n])&&$m[$n]['w']) $m[$n]['sc']=scoreStr($st); }
 return ['m'=>$m,'loss'=>$loss]; }
function setWinner($n,$team){ $w=normalize(); [$a,$b]=teams($n,$w); if(!$a||!$b) return 'Kedua tim belum diketahui'; if(!in_array($team,[$a,$b])) return 'Tim bukan peserta match ini';
 $before=$w; db()->prepare('UPDATE gs_matches SET winner=? WHERE no=?')->execute([$team,$n]); $after=normalize();
 $cl=[]; foreach($before as $k=>$_) if($k!==$n&&!isset($after[$k])) $cl[]=$k; return $cl; }
function avail($c){ $o=[]; $q=db()->prepare('SELECT dow,hr FROM gs_avail WHERE player=? AND wk=?'); $q->execute([$c,weekStart()]); foreach($q as $r) $o[]=$r['dow'].'-'.$r['hr']; sort($o); return $o; }
function plist($t){ $q=db()->prepare('SELECT code,name FROM gs_players WHERE team=?'); $q->execute([$t]); return $q->fetchAll(); }
function teamMatches($team){ $w=normalize(); $s=[]; foreach(db()->query('SELECT no,sched FROM gs_matches') as $r) $s[$r['no']]=$r['sched']; $o=[];
 for($n=1;$n<=27;$n++){ [$a,$b]=teams($n,$w); if($a!==$team&&$b!==$team) continue; $x=$a===$team?$b:$a;
  $o[]=['n'=>$n,'o'=>$x,'on'=>$x?tn($x):'','res'=>isset($w[$n])?($w[$n]===$team?'Menang':'Kalah'):null,'s'=>$s[$n]??null]; } return $o; }
// Jadwalkan otomatis: jam irisan keempat pemain, paling awal, 1 lapangan. Ronde 2+ baru setelah Ronde 1 tuntas.
function autoschedule(){ $db=db(); $w=normalize(); $taken=[]; foreach($db->query('SELECT sched FROM gs_matches WHERE sched IS NOT NULL') as $r) $taken[$r['sched']]=1;

 for($n=1;$n<=22;$n++){ $r=$db->query("SELECT winner,sched FROM gs_matches WHERE no=$n")->fetch(); if($r['winner']||$r['sched']) continue;
  [$a,$b]=teams($n,$w); if(!$a||!$b) continue; $common=null; $miss=false;
  foreach(array_merge(plist($a),plist($b)) as $p){ $s=avail($p['code']); if(!$s) $miss=true; $common=$common===null?$s:array_values(array_intersect($common,$s)); }
  if($miss||!$common) continue; sort($common);
  $from=max('2026-11-01',date('Y-m-d')); $to=min($n<=7?'2026-11-14':'2026-12-04',date('Y-m-d',strtotime(weekStart().' +6 days')));
  for($d=strtotime($from);$d<=strtotime($to);$d+=86400){ foreach($common as $s){ [$sd,$h]=explode('-',$s); if((int)$sd!==(int)date('N',$d)) continue;
    $dt=date('Y-m-d',$d).sprintf(' %02d:00:00',$h); if(isset($taken[$dt])||strtotime($dt)<time()) continue;
    $db->prepare('UPDATE gs_matches SET sched=? WHERE no=?')->execute([$dt,$n]); $taken[$dt]=1; continue 3; } } } }

// Aturan skor: sampai 21, selisih 2, maksimal 30. Pemenang match = 2 set.
function setWon($p,$q){ if($p>=30) return 1; if($q>=30) return -1; if($p>=21&&$p-$q>=2) return 1; if($q>=21&&$q-$p>=2) return -1; return 0; }
function matchWinner($st){ $b=$r=0; foreach(($st['sets']??[]) as $s){ $x=setWon((int)$s[0],(int)$s[1]); if($x>0) $b++; elseif($x<0) $r++; } return $b>=2?$st['blue']:($r>=2?$st['red']:null); }
function scoreStr($st){ return $st['blue'].'–'.$st['red'].': '.implode(', ',array_map(fn($s)=>$s[0].'-'.$s[1],array_filter($st['sets'],fn($s)=>setWon((int)$s[0],(int)$s[1])!==0))); }

// Senin pekan ini (ISO). Jam kosong berlaku per pekan, jadi tiap Senin baru otomatis kosong lagi.
function weekStart(){ $t=strtotime('today'); return date('Y-m-d',$t-((int)date('N',$t)-1)*86400); }