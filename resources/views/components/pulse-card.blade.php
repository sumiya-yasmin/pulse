@props(['pulse', 'full' => false])
<div
    class="bg-white border p-6 border-pulse-rose/10 rounded-2xl shadow-sm {{ !$full ? 'hover:shadow-md transiton-shadow' : '' }}">
    <div class="flex flex-col md:flex-row items-start gap-6 justify-between">
        <div class="flex flex-col gap-2 flex-grow">
            <span class="text-[10px] font-bold uppercase tracking-widest text-pulse-rose">
                @if ($full)
                    {{ $pulse->created_at->format('M d, Y') }}
                @else
                    @if ($pulse->created_at->gt(now()->subDays(3)))
                        {{ $pulse->created_at->diffForHumans() }}
                    @else
                        {{ $pulse->created_at->format('M d, Y') }}
                    @endif
                @endif
            </span>
            <h2 class="font-bold text-pulse-violet {{ $full ? 'text-3xl' : 'text-lg' }}">{{ $pulse->title }}</h2>
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
    @if ($full)
        <p class="text-lg w-full text-pulse-violet/70 leading-[3rem] mt-4"
            style="background-image: linear-gradient(#f1e9e9 1px, transparent 1px);
                   background-size: 100% 3rem;
                   background attachment: local;
                   background-position: 0 2.9rem;">
            {!! nl2br(e($pulse->body)) !!} </p>
    @else
        <div class="mt-2">
            <p class="text-sm text-pulse-violet/70 leading-relaxed italic">
                {{ Str::limit($pulse->body, 150) }}
            </p>
        </div>
    @endif
</div>
