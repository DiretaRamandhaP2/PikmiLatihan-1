@extends('layout.main-guru')
@section('content')
<div class="space-y-6"> <div class="mb-2">
        <a href="#" class="inline-flex items-center gap-2 text-slate-400 hover:text-blue-600 font-bold transition-colors group">
            <i data-lucide="arrow-left" class="w-5 h-5 group-hover:-translate-x-1 transition-transform"></i>
            Kembali ke Daftar Tugas
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-1">
            <div class="bg-blue-600 rounded-[2.5rem] p-8 text-white shadow-xl shadow-blue-100 h-full">
                <div class="bg-white/20 w-fit p-3 rounded-2xl mb-6">
                    <i data-lucide="file-text" class="w-8 h-8"></i>
                </div>
                <h2 class="text-2xl font-bold mb-2 tracking-tight">Laporan Praktikum IPA</h2>
                <div class="space-y-3 opacity-90">
                    <div class="flex items-center gap-3">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Kelas: 8A</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">Deadline: 10 Mei 2026</span>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-white/20">
                    <p class="text-xs font-bold uppercase tracking-widest mb-3 opacity-70">Deskripsi:</p>
                    <p class="text-sm leading-relaxed italic text-blue-50">
                        "Harap mengunggah laporan praktikum struktur sel dalam format PDF."
                    </p>
                </div>
            </div>
        </div>

        <div class="lg:col-span-2">
            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-1.5 h-8 bg-emerald-500 rounded-full"></div>
                        <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Daftar Pengumpulan</h2>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="flex flex-wrap items-center justify-between p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-blue-200 transition-all">
                        <div class="flex items-center gap-4">
                            <img src="https://ui-avatars.com/api/?name=Udin" class="w-12 h-12 rounded-xl" alt="">
                            <div>
                                <h4 class="font-bold text-slate-700">Udin Sudrajat</h4>
                                <span class="text-xs text-blue-600 flex items-center gap-1">
                                    <i data-lucide="file" class="w-3 h-3"></i> laporan_udin.pdf
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center gap-6 mt-4 md:mt-0">
                            <div class="text-right">
                                <p class="text-[10px] font-bold text-slate-400 uppercase">Nilai</p>
                                <p class="text-xl font-extrabold text-blue-600">85</p>
                            </div>
                            <button class="bg-white text-slate-700 font-bold px-5 py-2.5 rounded-xl border border-slate-200 hover:bg-blue-600 hover:text-white transition-all shadow-sm">
                                Beri Nilai
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
