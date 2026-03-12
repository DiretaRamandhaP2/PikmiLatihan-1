@extends('layout.main-guru')
@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <a href="{{ route('guru.kelola-tugas') }}" class="group flex items-center gap-2 text-slate-400 hover:text-blue-600 font-bold transition">
            <i data-lucide="arrow-left" class="w-5 h-5 group-hover:-translate-x-1 transition-transform"></i>
            Kembali
        </a>
        <h2 class="text-2xl font-extrabold text-slate-800">Buat Tugas Baru</h2>
    </div>

    <div class="bg-white rounded-[2.5rem] p-10 shadow-sm border border-slate-100">
        <form action="{{ route('guru.add-tugas') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Judul Tugas</label>
                <input type="text" name="judul" placeholder="Contoh: Laporan Praktikum Sel Hewan" required
                       class="w-full px-5 py-4 rounded-2xl border border-slate-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all placeholder:text-slate-300">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Mata Pelajaran</label>
                    <div class="relative">
                        <select name="mapel_id" class="w-full px-5 py-4 rounded-2xl border border-slate-200 appearance-none focus:border-blue-500 outline-none transition-all bg-transparent relative z-10">
                            {{-- @foreach($mapels as $m)
                                <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                            @endforeach --}}
                        </select>
                        <i data-lucide="chevron-down" class="w-5 h-5 absolute right-4 top-4 text-slate-400"></i>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Target Kelas</label>
                    <div class="relative">
                        <select name="kelas_id" class="w-full px-5 py-4 rounded-2xl border border-slate-200 appearance-none focus:border-blue-500 outline-none transition-all bg-transparent relative z-10">
                            {{-- @foreach($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                            @endforeach --}}
                        </select>
                        <i data-lucide="chevron-down" class="w-5 h-5 absolute right-4 top-4 text-slate-400"></i>
                    </div>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Batas Pengumpulan (Deadline)</label>
                <input type="datetime-local" name="deadline" required
                       class="w-full px-5 py-4 rounded-2xl border border-slate-200 focus:border-blue-500 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Instruksi Tugas</label>
                <textarea name="deskripsi" rows="5" placeholder="Tuliskan detail pengerjaan di sini..."
                          class="w-full px-5 py-4 rounded-2xl border border-slate-200 focus:border-blue-500 outline-none transition-all placeholder:text-slate-300"></textarea>
            </div>

            <div class="pt-6 border-t border-slate-50 flex gap-4">
                <button type="reset" class="px-8 py-4 rounded-2xl font-bold text-slate-500 bg-slate-50 hover:bg-slate-100 transition duration-300">
                    Reset Form
                </button>
                <button type="submit" class="flex-grow py-4 rounded-2xl font-bold text-white bg-blue-600 hover:bg-blue-700 shadow-xl shadow-blue-200 transition duration-300 flex items-center justify-center gap-2">
                    <i data-lucide="send" class="w-5 h-5"></i>
                    Terbitkan Tugas
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
