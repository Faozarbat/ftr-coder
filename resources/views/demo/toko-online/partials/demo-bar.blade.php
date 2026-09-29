{{-- Bar kecil "DEMO" + timer sesi + overlay kunci. Di-@include di akhir setiap demo-XX.blade.php.
     Sengaja melayang di TENGAH-BAWAH agar tidak menabrak navbar demo (fixed di atas)
     maupun tombol WA (kiri-bawah) dan back-to-top (kanan-bawah). Semua id/class berawalan "ftr". --}}
<style>
#ftrBar{position:fixed;left:50%;bottom:12px;transform:translateX(-50%);z-index:2147483000;display:flex;align-items:center;gap:10px;background:#111;color:#eee;font:600 12px/1 system-ui,-apple-system,'Segoe UI',sans-serif;padding:8px 8px 8px 14px;border-radius:999px;border:1px solid #333;box-shadow:0 8px 24px rgba(0,0,0,.45);white-space:nowrap}
#ftrBar .ftr-tag{color:#e08a3c;letter-spacing:.04em}
#ftrBar .ftr-timer{font-variant-numeric:tabular-nums}
#ftrBar a{color:#111;background:#e08a3c;text-decoration:none;padding:7px 12px;border-radius:999px;font-weight:700}
#ftrLock{position:fixed;inset:0;z-index:2147483001;background:rgba(0,0,0,.85);display:none;align-items:center;justify-content:center;padding:20px;font-family:system-ui,-apple-system,'Segoe UI',sans-serif}
#ftrLock.show{display:flex}
#ftrLock .ftr-box{background:#161616;color:#eee;border:1px solid #2f2f2f;border-radius:12px;padding:28px 24px;max-width:340px;text-align:center}
#ftrLock h3{font-size:18px;margin:8px 0}
#ftrLock p{font-size:14px;color:#a8a8a8;margin-bottom:18px;line-height:1.5}
#ftrLock a{display:inline-block;background:#e08a3c;color:#111;text-decoration:none;font-weight:700;padding:11px 20px;border-radius:8px}
@media(max-width:600px){#ftrBar .ftr-tag{display:none}#ftrBar{padding-left:12px}}
</style>

<div id="ftrBar">
  <span class="ftr-tag">DEMO · FTR-Coder</span>
  <span class="ftr-timer" id="ftrTimer"></span>
  <a href="{{ route('demo.token-form', 'toko-online') }}">← Katalog</a>
</div>

<div id="ftrLock">
  <div class="ftr-box">
    <div style="font-size:34px">⏰</div>
    <h3>Sesi Demo Berakhir</h3>
    <p>Waktu demo Anda sudah habis. Kembali ke katalog dan masukkan token baru untuk melanjutkan.</p>
    <a href="{{ route('demo.token-form', 'toko-online') }}">Kembali ke Katalog</a>
  </div>
</div>

<script>
(function () {
  var EXPIRES_AT = @json($expiresAt ?? null);
  var timerEl = document.getElementById('ftrTimer');
  var locked = false;
  function tick() {
    if (!EXPIRES_AT) { timerEl.textContent = ''; return; }
    var diff = new Date(EXPIRES_AT) - new Date();
    if (diff <= 0) {
      timerEl.textContent = 'Berakhir';
      if (!locked) {
        locked = true;
        document.getElementById('ftrLock').classList.add('show');
        document.body.style.overflow = 'hidden';
      }
      return;
    }
    var m = Math.floor(diff / 60000), s = Math.floor((diff % 60000) / 1000);
    timerEl.textContent = 'Sisa ' + m + ':' + String(s).padStart(2, '0');
  }
  tick();
  setInterval(tick, 1000);
})();
</script>