@extends('layouts.admin')

@section('title', 'Kelola Token Demo')

@section('content')
    <h1 style="margin-bottom: 1.5rem;">Kelola Token Demo</h1>

    @if (session('success'))
        <div class="success-box">✅ {{ session('success') }}</div>
    @endif

    <div class="form-box">
        <h3 style="margin-bottom: 1rem;">Generate Token Baru</h3>
        <form method="POST" action="{{ route('admin.tokens.store') }}">
            @csrf
            <label>Pilih Produk / Jenis Demo</label>
            <select name="demo_type" required>
                <option value="">-- Pilih --</option>
                @foreach ($demoTypes as $judul => $type)
                    <option value="{{ $type }}">{{ $judul }} ({{ $type }})</option>
                @endforeach
            </select>

            <label>Nama Kontak (opsional)</label>
            <input type="text" name="contact_name" placeholder="Nama visitor yang minta demo" autocomplete="off">

            <button type="submit" class="generate">Generate Token</button>
        </form>
    </div>

    <h3 style="margin-bottom: 1rem;">Riwayat Token</h3>
    <table>
        <thead>
            <tr>
                <th>Token</th>
                <th>Jenis Demo</th>
                <th>Kontak</th>
                <th>Status</th>
                <th>Expired</th>
                <th>Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tokens as $t)
                <tr>
                    <td class="token-code">{{ $t->token }}</td>
                    <td>{{ $t->demo_type }}</td>
                    <td>{{ $t->contact_name ?? '-' }}</td>
                    <td>
                        @if ($t->is_used)
                            <span class="badge badge-used">Terpakai</span>
                        @else
                            <span class="badge badge-unused">Belum Dipakai</span>
                        @endif
                    </td>
                    <td>{{ $t->expired_at->format('d/m H:i') }}</td>
                    <td>{{ $t->created_at->diffForHumans() }}</td>
                    <td>
                        @if (!$t->is_used)
                            <form method="POST" action="{{ route('admin.tokens.destroy', $t->id) }}" class="delete-form" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn-delete" onclick="confirmDelete(this, '{{ $t->token }}')">Batalkan</button>
                            </form>
                        @else
                            <span style="color: #4a4d55; font-size: 0.8rem;">-</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" style="color: var(--text-muted); text-align: center;">Belum ada token dibuat.</td></tr>
            @endforelse
        </tbody>
    </table>

    <div class="pagination">
        {{ $tokens->links() }}
    </div>

    <!-- Modal Konfirmasi -->
    <div class="confirm-overlay" id="confirmOverlay"></div>
    <div class="confirm-box" id="confirmBox">
        <h3 style="margin-bottom: 0.5rem;">Batalkan Token?</h3>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.25rem;">
            Token <span class="token-code" id="confirmTokenName"></span> akan dibatalkan dan tidak bisa dipakai lagi. Tindakan ini tidak bisa dibatalkan.
        </p>
        <div style="display: flex; gap: 0.75rem; justify-content: flex-end;">
            <button type="button" class="btn-cancel" onclick="closeConfirm()">Batal</button>
            <button type="button" class="btn-confirm" onclick="submitConfirm()">Ya, Batalkan</button>
        </div>
    </div>

    <script>
        let formToDelete = null;

        function confirmDelete(button, tokenName) {
            formToDelete = button.closest('form');
            document.getElementById('confirmTokenName').textContent = tokenName;
            document.getElementById('confirmOverlay').classList.add('show');
            document.getElementById('confirmBox').classList.add('show');
        }

        function closeConfirm() {
            formToDelete = null;
            document.getElementById('confirmOverlay').classList.remove('show');
            document.getElementById('confirmBox').classList.remove('show');
        }

        function submitConfirm() {
            if (formToDelete) formToDelete.submit();
        }

        document.getElementById('confirmOverlay').addEventListener('click', closeConfirm);
    </script>
@endsection