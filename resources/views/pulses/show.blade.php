<x-layout>
    <x-slot:title>
        - {{ $pulse->title }}
    </x-slot:title>
    <div class="max-w-2xl mx-auto py-10">
        <a href="/"
            class="text-sm font-bold px-4 py-2 rounded-full text-pulse-violet hover:text-white bg-pulse-petal hover:bg-pulse-rose">
            Back to Pulses
        </a>
        <div class="mt-10">
            <x-pulse-card :pulse="$pulse" full />
        </div>
    </div>
</x-layout>
