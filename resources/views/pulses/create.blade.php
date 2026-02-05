<x-layout>
<x-slot:title>
    - Write your Thoughts
</x-slot:title>
 <div class="max-w-4xl max-auto px-4 py-8 rounded-md">
   <form action="{{ route('pulse.store') }}" method="POST" class="space-y-8">
    @csrf
    <input type="text" name="title" placeholder="Give this moment or the particular feeling a title..." class="w-full bg-white rounded text-4xl font-black border-none placeholder-pulse-violet/10 text-pulse-violet">
    <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-full border border-pulse-rose/10 w-fit">
    <x-heroicon-o-face-smile class="w-4 h-4 text-pulse-rose" />
    <input type="text" 
           name="mood" 
           placeholder="How are you feeling?e.g, sad, happy" 
           class="border-none focus:ring-0 text-sm font-bold text-pulse-violet bg-transparent"
           required>
</div>
   </form>
 </div>
</x-layout>