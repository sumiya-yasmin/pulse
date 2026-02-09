<x-layout>
    <x-slot:title>
        - Write your Thoughts
    </x-slot:title>
    <div class="max-w-4xl max-auto px-4 py-8 rounded-md">
        <form action="{{ route('pulse.store') }}" method="POST" class="space-y-8">
            @csrf
            <input type="text" name="title" value="{{ old('title') }}"
                placeholder="Give this moment or feeling a title..."
                class="w-full bg-white rounded text-2xl md:text-4xl font-black border-none placeholder-pulse-violet/20 text-pulse-violet px-4 py-2">
            <div class="flex flex-col md:flex-row gap-2 md:items-center justify-between">
                <div
                    class="flex items-center gap-2 bg-white px-4 py-2 rounded-full border border-pulse-rose/10 md:w-fit w-[250px]">
                    <div class="flex justify-center items-center gap-1">
                        <x-heroicon-o-face-smile class="w-4 h-4 text-pulse-rose" />
                        <span class="text-sm font-black text-pulse-violet/20 uppercase">Feeling</span>
                    </div>
                    <input type="text" name="mood" value="{{ old('mood') }}" placeholder="e.g, sad, happy"
                        class="border-none focus:ring-0 text-sm font-bold text-pulse-violet placeholder-pulse-violet/20 bg-transparent"
                        required>
                </div>
                <div
                    class="flex items-center gap-2 bg-white px-4 py-2 rounded-full border border-pulse-rose/10 md:w-fit w-[250px]">
                    <div class="flex justify-center items-center gap-1">
                        <x-heroicon-o-bolt class="w-4 h-4 text-pulse-rose" />
                        <span class="text-sm font-black text-pulse-violet/20 uppercase">Energy</span>
                    </div>
                    <input type="hidden" name="energy" id="energy_input" value="{{ old('energy') }}" />
                    <div class="flex gap-1" id="energy_bar_container">
                        @for ($i = 0; $i < 10; $i++)
                            <button type="button" data-value="{{ $i }}"
                                class="energy-bar h-4 w-2 rounded-full border-pulse-rose/60 border-2 hover:bg-pulse-rose/20 {{ old('energy') >= $i ? 'bg-pulse-rose' : 'bg-white' }}">

                            </button>
                        @endfor
                    </div>
                </div>
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
                    const currentValue = parseInt(hiddenInput.value);
                    let newValue;
                    if (clickedValue === currentValue) {
                        newValue = clickedValue - 1;
                    } else {
                        newValue = clickedValue;
                    }
                    hiddenInput.value = newValue;
                    bars.forEach(b => {
                        const barValue = parseInt(b.getAttribute('data-value'));
                        if (barValue <= newValue) {
                            b.style.backgroundColor = '#fb7185';
                            b.classList.add('bg-pulse-rose');
                            b.classList.remove('bg-white');
                        } else {
                            b.style.backgroundColor = '#ffffff';
                            b.classList.remove('bg-pulse-rose');
                            b.classList.add('bg-white');
                        }
                    })
                })
            })
        })
    </script>
</x-layout>
