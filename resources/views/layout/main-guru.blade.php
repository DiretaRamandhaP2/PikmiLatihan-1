<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Blue Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body class="bg-[#F8FAFC] text-slate-900">

    <div x-data="{ sidebarOpen: true }" class="flex h-screen overflow-hidden">

        <aside :class="sidebarOpen ? 'w-72' : 'w-24'"
            class="relative z-20 h-full bg-gradient-to-b from-blue-900 via-blue-800 to-blue-900 text-white transition-all duration-500 ease-in-out hidden md:flex flex-col shadow-2xl">

            <div class="h-20 flex items-center px-8 border-b border-white/10">
                <div class="bg-white/20 p-2 rounded-xl">
                    <i data-lucide="layout-dashboard" class="w-6 h-6"></i>
                </div>
                <span x-show="sidebarOpen" x-transition.duration.500ms
                    class="ml-4 font-bold text-xl tracking-tight">VANTAGE</span>
            </div>

            <nav class="flex-grow px-4 py-6 space-y-2 overflow-y-auto">
                <a href="#"
                    class="flex items-center px-4 py-3 rounded-xl bg-white/10 border border-white/10 text-white group">
                    <i data-lucide="layout-grid" class="w-5 h-5"></i>
                    <span x-show="sidebarOpen" class="ml-4 font-medium">Dashboard Guru</span>
                </a>

                <div x-data="{ open: true }"> <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-blue-100 hover:bg-white/5 transition-all group">
                        <div class="flex items-center">
                            <i data-lucide="book-open"
                                class="w-5 h-5 text-blue-300 group-hover:text-white transition"></i>
                            <span x-show="sidebarOpen" class="ml-4 font-medium">Tugas </span>
                        </div>
                        <i x-show="sidebarOpen" data-lucide="chevron-down"
                            class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="open && sidebarOpen" x-transition class="mt-2 ml-10 space-y-1">
                        <a href="{{ route('guru.kelola-tugas') }}"
                            class="block px-4 py-2 text-sm text-blue-200 hover:text-white transition font-semibold text-white">Kelola
                            Tugas</a>
                        <a href="{{ route('guru.detail-tugas') }}" class="block px-4 py-2 text-sm text-blue-200 hover:text-white transition">Detail Tugas</a>
                    </div>
                </div>
            </nav>

            <div class="p-6 border-t border-white/10 bg-black/10">
                <button class="flex items-center text-blue-200 hover:text-white transition w-full">
                    <i data-lucide="log-out" class="w-5 h-5"></i>
                    <span x-show="sidebarOpen" class="ml-4 font-medium">Sign Out</span>
                </button>
            </div>
        </aside>

        <div class="flex-grow flex flex-col min-w-0">

            <header
                class="h-20 bg-white/80 backdrop-blur-md flex items-center justify-between px-10 border-b border-slate-200">
                <div class="flex items-center gap-4">
                    <button @click="sidebarOpen = !sidebarOpen"
                        class="p-2 rounded-lg hover:bg-slate-100 transition text-slate-500">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                    <h1 class="font-bold text-xl text-slate-800 tracking-tight">Dashboard Overview</h1>
                </div>

                <div class="flex items-center gap-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-slate-700 leading-none">Admin Sekolah</p>
                        <p class="text-xs text-blue-500 font-medium">Tahun Ajaran 2025/2026</p>
                    </div>
                    <img class="h-10 w-10 rounded-xl ring-2 ring-blue-500/20 shadow-lg"
                        src="https://ui-avatars.com/api/?name=Admin&background=3b82f6&color=fff&bold=true"
                        alt="Profile">
                </div>
            </header>

            <main class="p-10 overflow-y-auto bg-[#F8FAFC]">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();
    </script>
</body>

</html>
