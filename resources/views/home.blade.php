@use('Carbon\Carbon')
<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <div class="max-w-2xl max-auto px-4 py-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-black text-pulse-violet">Welcome to Pulse</h2>
            <p class="text-pulse-violet/60 mt-2 italic">Your personal space to reflect and connect.</p>
        </div>
        <div class="space-y-6">
            @forelse ($pulses as $pulse)
                <x-pulse-card :pulse="$pulse" />
            @empty
                <div class="text-center py-20 bg-white/40 border-2 border-dashed border-pulse-rose/10 rounded-3xl">
                    <x-heroicon-o-plus-circle class="w-12 h-12 mx-auto text-pulse-rose/40 mb-4" />

                    <p class="text-pulse-violet/60 italic text-lg">Your pulse is quiet...</p>
                    <a href="/pulses/create"
                        class="mt-4 inline-flex items-center gap-2 text-pulse-rose font-bold hover:scale-105 transition-transform">
                        <span>Write your first reflection</span>
                    </a>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>
