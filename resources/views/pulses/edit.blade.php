<x-layout>
    <x-slot:title>
        - Edit: {{ $pulse->title }}
    </x-slot:title>
    
    <div class="max-w-4xl max-auto px-4 py-8 rounded-md">
        <form action="{{ route('pulse.update', $pulse) }}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')

            <div>
                <input type="text" name="title" value="{{ old('title', $pulse->title) }}"
                    placeholder="Give this moment or feeling a title..."
                    class="w-full bg-white rounded text-2xl md:text-4xl font-black border-none placeholder-pulse-violet/20 text-pulse-violet px-4 py-2">
                @error('title')
                    <p class="text-rose-500 text-xs font-bold italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col md:flex-row gap-2 md:items-center justify-between">
                <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-full border border-pulse-rose/10 md:w-fit w-[250px]">
                    <div class="flex justify-center items-center gap-1">
                        <x-heroicon-o-face-smile class="w-4 h-4 text-pulse-rose" />
                        <span class="text-sm font-black text-pulse-violet/20 uppercase">Feeling</span>
                    </div>
                    <input type="text" name="mood" value="{{ old('mood', $pulse->mood) }}" 
                        class="border-none focus:ring-0 text-sm font-bold text-pulse-violet bg-transparent" required>
                </div>

                <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-full border border-pulse-rose/10 md:w-fit w-[250px]">
                    <div class="flex justify-center items-center gap-1">
                        <x-heroicon-o-bolt class="w-4 h-4 text-pulse-rose" />
                        <span class="text-sm font-black text-pulse-violet/20 uppercase">Energy</span>
                    </div>
                    <input type="hidden" name="energy" id="energy_input" value="{{ old('energy', $pulse->energy) }}" />
                    
                    <div class="flex gap-1" id="energy_bar_container">
                        @for ($i = 0; $i < 10; $i++)
                            <button type="button" data-value="{{ $i }}"
                                class="energy-bar h-4 w-2 rounded-full border-pulse-rose/60 border-2 hover:bg-pulse-rose/20 {{ old('energy', $pulse->energy) >= $i ? 'bg-pulse-rose' : 'bg-white' }}">
                            </button>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="mt-8 border-pulse-violet/10 border">
                <textarea name="body"
                    class="py-0 px-4 w-full bg-white min-h-[525px] resize-none text-lg focus:ring-0 outline-none leading-[3rem]"
                    style="background-image: linear-gradient(#f1e9e9 1px, transparent 1px); background-size: 100% 3rem; background-attachment: local; background-position:0 2.9rem"
                    required>{{ old('body', $pulse->body) }}</textarea>
            </div>

            <div class="flex justify-end mt-4 gap-4">
                <a href="{{ route('pulse.show', $pulse) }}"
                    class="px-8 py-3 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-bold">Cancel</a>
                <button type="submit"
                    class="px-8 py-3 rounded-full bg-pulse-violet text-white hover:bg-pulse-violet/90 font-bold">Update Pulse</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bars = document.querySelectorAll('.energy-bar');
            const hiddenInput = document.getElementById('energy_input');
            
            bars.forEach(bar => {
                bar.addEventListener('click', function() {
                    const clickedValue = parseInt(this.getAttribute('data-value'));
                    hiddenInput.value = clickedValue;
                    
                    bars.forEach(b => {
                        const barValue = parseInt(b.getAttribute('data-value'));
                        if (barValue <= clickedValue) {
                            b.style.backgroundColor = '#fb7185';
                            b.classList.add('bg-pulse-rose');
                            b.classList.remove('bg-white');
                        } else {
                            b.style.backgroundColor = '#ffffff';
                            b.classList.remove('bg-pulse-rose');
                            b.classList.add('bg-white');
                        }
                    });
                });
            });
        });
    </script>
</x-layout>