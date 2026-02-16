<html>

<head>
    <title>Pulse {{ $title ?? '' }} </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-pulse-cream font-sans antialised text-pulse-violet flex flex-col">
    @if(session('success') || session('error') || session('status'))
    <div id="flash-message" class="fixed top-24 right-5 z-60 px-6 py-3 rounded-xl shadow-2xl font-bol text-white transition-all duration-500 transform translate-x-0 {{ session('error') ? 'bg-rose-500': 'bg-pulse-violet'}}">
    <div class="flex items-center gap-3">
        @if(session('error'))
        <x-heroicon-s-x-circle class="w-5 h-5" />
        @else
        <x-heroicon-s-check-circle class="h-5 w-5" />
        @endif
        {{ session('success') ?? session('error') ?? session('status') }}
    </div> 
    </div>
    @endif
    <nav class="bg-white/80 backdrop-blur border-b border-pulse-rose/10 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <a href="/">
                <div class="flex items-center gap-2">
                    <div
                        class="w-8 h-8 bg-pulse-rose rounded-lg flex items-center justify-center text-white font-black shadow-lg shadow-pulse-rose/20">
                        P
                    </div>
                    <span class="text-xl font-extrabold tracking-tight text-pulse-violet">Pulse</span>
                </div>
            </a>
                <div class="flex justify-between items-center gap-4 p-4">
                     <a href="{{ route('pulse.create') }}" class="hover:text-pulse-rose transition-colors">Write</a>
                    <a href="/" class="hover:text-pulse-rose transition-colors">My Pulse</a>
                    <a href="#" class="hover:text-pulse-rose transition-colors">My Circle</a>
                    {{-- <a href="#" class="hover:text-pulse-rose transition-colors">The Commons</a> --}}
                    <a href="#" class="hover:text-pulse-rose transition-colors">Discovery</a>

                    <a href="/sign-in"
                        class="bg-pulse-violet text-white px-4 py-2 rounded-full hover:bg-pulse-rose transition-all shadow-md">Sign In</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-4 py-8 max-w-4xl">
        {{ $slot }}
    </main>

    <footer class="bg-white border-t border-pulse-rose/5 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm text-pulse-violet/60 font-medium">
                &copy; {{ date('Y') }} Pulse.
            </p>
            <div class="mt-2 flex justify-center space-x-4 text-xs font-bold uppercase tracking-widest text-pulse-rose">
                <a href="#" class="hover:underline">Privacy</a>
                <span>&bull;</span>
                <a href="#" class="hover:underline">Support</a>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const flash = document.getElementById('flash-message');
            if(flash){
               setTimeout(() => {
                flash.style.opacity = '0';
                flash.style.transform = 'translateX(100px)';
                setTimeout(()=>flash.remove(), 500);
               }, 4000);
            }
        })
    </script>
</body>

</html>
