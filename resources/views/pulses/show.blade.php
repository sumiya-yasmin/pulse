<x-layout>
    <x-slot:title>
        - {{$pulse->title}}
</x-slot:title>
<div>
    <x-pulse-card :pulse="$pulse" />
</div>
</x-layout>