@extends('layouts.app')

@section('title', 'Data Master Ruangan')

@section('content')
<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
    }
    .page-title h1 {
        font-size: 1.6rem;
        font-weight: 700;
        color: #f8fafc;
    }
    .page-title p {
        font-size: 0.875rem;
        color: #94a3b8;
        margin-top: 4px;
    }
    .btn-primary {
        background: linear-gradient(135deg, #6366f1, #4f46e5);
        color: #ffffff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 10px;
        font-size: 0.875rem;
        font-weight: 600;
        box-shadow: 0 4px 14px rgba(99, 102, 241, 0.35);
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(99, 102, 241, 0.5);
    }
    .table-card {
        background: rgba(30, 41, 59, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        overflow: hidden;
        backdrop-filter: blur(12px);
    }
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }
    th {
        background: rgba(15, 23, 42, 0.6);
        color: #94a3b8;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        padding: 16px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }
    td {
        padding: 18px 20px;
        color: #e2e8f0;
        font-size: 0.9rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }
    tr:last-child td {
        border-bottom: none;
    }
    tr:hover td {
        background: rgba(255, 255, 255, 0.02);
    }
    .code-badge {
        background: rgba(99, 102, 241, 0.15);
        color: #818cf8;
        padding: 4px 10px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 0.85rem;
        font-family: monospace;
    }
    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-block;
    }
    .status-available {
        background: rgba(34, 197, 94, 0.15);
        color: #4ade80;
        border: 1px solid rgba(34, 197, 94, 0.3);
    }
    .status-occupied {
        background: rgba(239, 68, 68, 0.15);
        color: #f87171;
        border: 1px solid rgba(239, 68, 68, 0.3);
    }
    .action-links a {
        text-decoration: none;
        font-size: 0.85rem;
        font-weight: 500;
        margin-right: 10px;
        transition: color 0.2s;
    }
    .link-detail { color: #38bdf8; }
    .link-detail:hover { color: #7dd3fc; }
    .link-edit { color: #fbbf24; }
    .link-edit:hover { color: #fde047; }
</style>

<div class="page-header">
    <div class="page-title">
        <h1>Data Master Ruangan</h1>
        <p>Kelola ketersediaan ruang kelas dan laboratorium perkuliahan</p>
    </div>
    <a href="{{ route('rooms.create') }}" class="btn-primary">
        + Tambah Ruangan Baru
    </a>
</div>

<div class="table-card">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Ruang</th>
                <th>Nama Ruangan</th>
                <th>Gedung</th>
                <th>Kapasitas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rooms as $index => $room)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><span class="code-badge">{{ $room['code'] }}</span></td>
                    <td><strong>{{ $room['name'] }}</strong></td>
                    <td>{{ $room['building'] }}</td>
                    <td>{{ $room['capacity'] }} Kursi</td>
                    <td>
                        <span class="status-badge {{ $room['status'] == 'Tersedia' ? 'status-available' : 'status-occupied' }}">
                            {{ $room['status'] }}
                        </span>
                    </td>
                    <td class="action-links">
                        <a href="{{ route('rooms.show', $room['id']) }}" class="link-detail">Detail</a>
                        <a href="{{ route('rooms.edit', $room['id']) }}" class="link-edit">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center; color: #64748b;">Belum ada data ruangan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection