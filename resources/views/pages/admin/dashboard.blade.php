@extends('layout.main')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
        <div
            class="glass-card p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 border-b-4 border-b-blue-600">
            <div class="flex items-center justify-between mb-6">
                <div class="p-4 rounded-2xl bg-blue-50 text-blue-600">
                    <i data-lucide="user-round" class="w-8 h-8"></i>
                </div>
                <span class="bg-blue-100 text-blue-600 text-xs font-bold px-3 py-1 rounded-full text-center">Aktif</span>
            </div>
            <p class="text-slate-500 text-sm font-semibold uppercase tracking-wider">Total Guru</p>
            <h3 class="text-4xl font-extrabold text-slate-800 mt-1">42</h3>
        </div>

        <div
            class="glass-card p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 border-b-4 border-b-indigo-600">
            <div class="flex items-center justify-between mb-6">
                <div class="p-4 rounded-2xl bg-indigo-50 text-indigo-600">
                    <i data-lucide="users" class="w-8 h-8"></i>
                </div>
                <span
                    class="bg-indigo-100 text-indigo-600 text-xs font-bold px-3 py-1 rounded-full text-center">Terdaftar</span>
            </div>
            <p class="text-slate-500 text-sm font-semibold uppercase tracking-wider">Total Murid</p>
            <h3 class="text-4xl font-extrabold text-slate-800 mt-1">856</h3>
        </div>

        <div
            class="glass-card p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 border-b-4 border-b-sky-600">
            <div class="flex items-center justify-between mb-6">
                <div class="p-4 rounded-2xl bg-sky-50 text-sky-600">
                    <i data-lucide="door-open" class="w-8 h-8"></i>
                </div>
                <span class="bg-sky-100 text-sky-600 text-xs font-bold px-3 py-1 rounded-full text-center">Ruangan</span>
            </div>
            <p class="text-slate-500 text-sm font-semibold uppercase tracking-wider">Total Kelas</p>
            <h3 class="text-4xl font-extrabold text-slate-800 mt-1">24</h3>
        </div>
    </div>

    <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-1.5 h-8 bg-blue-600 rounded-full"></div>
            <h2 class="text-2xl font-bold text-slate-800">Aktivitas Terbaru</h2>
        </div>

        <div class="space-y-6">
            <div class="flex items-start gap-5 p-4 rounded-2xl hover:bg-slate-50 transition group">
                <div class="mt-1 p-3 rounded-xl bg-amber-50 text-amber-600 group-hover:scale-110 transition">
                    <i data-lucide="file-text" class="w-5 h-5"></i>
                </div>
                <div class="flex-grow border-b border-slate-100 pb-4">
                    <div class="flex justify-between items-center mb-1">
                        <h4 class="font-bold text-slate-700">Guru A (Bpk. Budi)</h4>
                        <span class="text-xs font-medium text-slate-400 italic">5 Menit yang lalu</span>
                    </div>
                    <p class="text-slate-500 text-sm italic">"Membuat tugas baru: Matematika Logaritma - Kelas XII IPA 1"
                    </p>
                </div>
            </div>

            <div class="flex items-start gap-5 p-4 rounded-2xl hover:bg-slate-50 transition group">
                <div class="mt-1 p-3 rounded-xl bg-emerald-50 text-emerald-600 group-hover:scale-110 transition">
                    <i data-lucide="check-circle" class="w-5 h-5"></i>
                </div>
                <div class="flex-grow border-b border-slate-100 pb-4">
                    <div class="flex justify-between items-center mb-1">
                        <h4 class="font-bold text-slate-700">Murid B (Siti Aminah)</h4>
                        <span class="text-xs font-medium text-slate-400 italic">15 Menit yang lalu</span>
                    </div>
                    <p class="text-slate-500 text-sm italic">"Telah mengumpulkan tugas: Bahasa Indonesia - Resensi Buku"</p>
                </div>
            </div>

            <div class="flex items-start gap-5 p-4 rounded-2xl hover:bg-slate-50 transition group">
                <div class="mt-1 p-3 rounded-xl bg-blue-50 text-blue-600 group-hover:scale-110 transition">
                    <i data-lucide="calendar" class="w-5 h-5"></i>
                </div>
                <div class="flex-grow pb-4">
                    <div class="flex justify-between items-center mb-1">
                        <h4 class="font-bold text-slate-700">Admin Sistem</h4>
                        <span class="text-xs font-medium text-slate-400 italic">1 Jam yang lalu</span>
                    </div>
                    <p class="text-slate-500 text-sm italic">"Memperbarui kalender akademik: Libur Semester Genap 2026"</p>
                </div>
            </div>
        </div>

        <button
            class="w-full mt-6 py-4 bg-slate-50 text-slate-600 font-bold rounded-2xl hover:bg-blue-600 hover:text-white transition duration-300 flex items-center justify-center gap-2 group">
            Lihat Semua Aktivitas
            <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition"></i>
        </button>
    </div>
@endsection
