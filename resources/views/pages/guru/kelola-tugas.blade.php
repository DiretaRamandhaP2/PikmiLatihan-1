@extends('layout.main-guru')
@section('content')
<div class="space-y-8"> <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Kelola Tugas</h2>
            <p class="text-slate-500 font-medium mt-1">Manajemen penugasan dan evaluasi belajar siswa.</p>
        </div>
        <a href="{{ route('guru.create-tugas') }}">
            <button class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-2xl font-bold transition-all shadow-lg shadow-blue-200 group w-full md:w-auto">
                <i data-lucide="plus-circle" class="w-5 h-5 group-hover:rotate-90 transition-transform"></i>
                Buat Tugas Baru
            </button>
        </a>
    </div>

    <div class="glass-card rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50/50 border-b border-slate-100">
                    <tr>
                        <th class="px-8 py-5 text-slate-400 font-bold text-xs uppercase tracking-widest">ID</th>
                        <th class="px-8 py-5 text-slate-400 font-bold text-xs uppercase tracking-widest">Judul Tugas</th>
                        <th class="px-8 py-5 text-slate-400 font-bold text-xs uppercase tracking-widest text-center">Kelas</th>
                        <th class="px-8 py-5 text-slate-400 font-bold text-xs uppercase tracking-widest">Deadline</th>
                        <th class="px-8 py-5 text-slate-400 font-bold text-xs uppercase tracking-widest text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    <tr class="hover:bg-blue-50/30 transition-colors group">
                        <td class="px-8 py-6 text-slate-400 font-medium">#01</td>
                        <td class="px-8 py-6">
                            <span class="font-bold text-slate-700 block group-hover:text-blue-600 transition-colors">Laporan Praktikum IPA</span>
                            <span class="text-xs text-slate-400 italic">Materi: Struktur Sel</span>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <span class="bg-indigo-50 text-indigo-600 px-4 py-1.5 rounded-xl text-xs font-bold ring-1 ring-indigo-100">8A</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-2 text-slate-600 font-semibold text-sm">
                                <i data-lucide="calendar" class="w-4 h-4 text-rose-500"></i>
                                10 Mei 2026
                            </div>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <a href="#" class="inline-flex items-center gap-2 bg-white border border-slate-200 text-slate-600 hover:text-blue-600 hover:border-blue-600 px-4 py-2 rounded-xl text-sm font-bold transition-all shadow-sm">
                                Lihat Pengumpulan
                                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
