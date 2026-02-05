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
            @foreach ($pulses as $pulse)
                <div
                    class="bg-white border p-6 border-pulse-rose/10 rounded-2xl shadow-sm hover:shadow-md transiton-shadow">
                    <div class="flex flex-col md:flex-row items-start gap-6 justify-between">
                        <div class="flex flex-col gap-2 flex-grow">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-pulse-rose">
                                {{ Carbon::parse($pulse['date'])->format('M d, Y') }}
                            </span>
                            <h2 class="font-bold text-pulse-violet text-lg">{{ $pulse['title'] }}</h2>
                            <p class="text-sm text-pulse-violet/70 leading-relaxed italic">
                                {{ Str::limit($pulse['body'], 100) }}
                            </p>
                        </div>
                        <div
                            class="flex flex-row md:flex-col justify-between md:justify-start items-center md:items-start w-full md:w-auto gap-4">
                            <div class="flex items-baseline gap-1">
                                <span class="text-[10px] font-black text-pulse-violet/40 uppercase">Feeling</span>
                                <span
                                    class="bg-pulse-cream text-pulse-violet text-[10px] font-bold px-2 py-1 rounded-full uppercase">
                                    {{ $pulse['mood'] }}
                                </span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="text-[10px] font-black text-pulse-violet/40 uppercase">Energy</span>
                                <div class="flex gap-0.5">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <div
                                            class="w-1.5 h-3 rounded-full {{ $i <= $pulse['energy'] ? 'bg-pulse-rose' : 'bg-pulse-rose/10' }}">
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
