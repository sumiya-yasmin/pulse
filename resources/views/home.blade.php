@use('Carbon\Carbon')<x-layout>
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
                <div
                    class="bg-white border p-6 border-pulse-rose/10 rounded-2xl shadow-sm hover:shadow-md transiton-shadow">
                    <div class="flex flex-col md:flex-row items-start gap-6 justify-between">
                        <div class="flex flex-col gap-2 flex-grow">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-pulse-rose">
                                @if($pulse->created_at->gt(now()->subDays(3)))
                                {{ $pulse->created_at->diffForHumans() }}
                                @else
                                {{ $pulse->created_at->format('M d, Y') }}
                                @endif
                            </span>
                            <h2 class="font-bold text-pulse-violet text-lg">{{ $pulse->title }}</h2>
                            <p class="text-sm text-pulse-violet/70 leading-relaxed italic">
                                {{ Str::limit($pulse->body, 100) }}
                            </p>
                        </div>
                        <div
                            class="flex flex-row md:flex-col justify-between md:justify-start items-center md:items-start w-full md:w-auto gap-4">
                            <div class="flex items-center gap-1">
                                 <x-heroicon-s-face-smile class="w-3 h-3 text-pulse-rose" />

                                <span class="text-[10px] font-black text-pulse-violet/40 uppercase">Feeling</span>
                                <span
                                    class="bg-pulse-cream text-pulse-violet text-[10px] ml-1 font-bold px-2 py-1 rounded-full uppercase">
                                    {{ $pulse->mood }}
                                </span>
                            </div>
                            <div class="flex items-center gap-1">
                                <x-heroicon-s-bolt class="w-3 h-3 text-pulse-rose" />
                                <span class="text-[10px] font-black text-pulse-violet/40 uppercase">Energy</span>
                                <div class="flex gap-0.5 ml-1">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <div
                                            class="w-1.5 h-3 rounded-full {{ $i <= $pulse->energy ? 'bg-pulse-rose' : 'bg-pulse-rose/10' }}">
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
