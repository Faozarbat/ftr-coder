<?php
// Perantara remote sementara. GANTI PIN sebelum upload.
const PIN = '2026';

header('Content-Type: application/json');
header('Cache-Control: no-store');

$f = fopen(__DIR__ . '/state.json', 'c+');
if (!$f) { http_response_code(500); echo '{"error":"folder tidak bisa ditulis"}'; exit; }
flock($f, LOCK_EX);
$s = json_decode(stream_get_contents($f), true) ?: ['seq' => 0, 'q' => [], 'slide' => 1, 'total' => 0];
$w = false;

if (isset($_POST['cmd'])) {
    if (($_POST['pin'] ?? '') !== PIN) { http_response_code(403); echo '{"error":"pin"}'; exit; }
    $c = $_POST['cmd'];
    if (in_array($c, ['next', 'prev', 'play', 'reset', 'save', 'bracket', 'back'], true)) {
        $s['seq']++;
        $s['q'][] = ['n' => $s['seq'], 'c' => $c];
        $s['q'] = array_slice($s['q'], -10);
        $w = true;
    }
}
if (isset($_POST['slide'])) {
    $s['slide'] = (int)$_POST['slide'];
    $s['total'] = (int)($_POST['total'] ?? 0);
    $w = true;
}
if (isset($_POST['info'])) { $s['info'] = substr($_POST['info'], 0, 300); $w = true; }
if ($w) { ftruncate($f, 0); rewind($f); fwrite($f, json_encode($s)); }
echo json_encode($s);