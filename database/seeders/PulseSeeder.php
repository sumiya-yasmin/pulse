<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PulseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a user if one doesn't exist
        $user = \App\Models\User::first() ?? \App\Models\User::factory()->create(['id' => 1]);

        $data = [
            [
                'user_id' => $user->id,
                'title' => 'Saturday Morning Rituals',
                'mood' => 'serene',
                'energy' => 6,
                'body' => "The coffee is at the perfect temperature. The sun is hitting the corner of my desk at that specific 45-degree angle that only happens in February. I decided to stop rushing into my code today and just write. Journaling isn't about the output; it's about the process of observation. I noticed that when I don't check my phone first thing in the morning, my Pulse feels more stable.",
                'visibility' => 'circle',
                'created_at' => now()->subDays(2)
            ],
            [
                'user_id' => $user->id,
                'title' => 'The Weight of Digital Noise',
                'mood' => 'pensive',
                'energy' => 3,
                'body' => "Today I realized how much my brain is leaking attention. I spent four hours scrolling through feeds that didn't add any value to my life. I want Pulse to be the antidote to that. I want a place where I can just sit with my thoughts without an algorithm trying to sell me a version of myself.",
                'visibility' => 'private',
                'created_at' => now()->subHours(5),
            ],
            [
                'user_id' => $user->id,
                'title' => 'The Logic is Finally Clicking',
                'mood' => 'electric',
                'energy' => 9,
                'body' => "I’ve been struggling with the concept of Models vs Migrations for a while, but it finally hit me today. The migration is the skeleton, and the model is the muscle. One defines what is possible, the other makes it happen.",
                'visibility' => 'private',
                'created_at' => now()->subDays(1),
            ],
            [
                'user_id' => $user->id,
                'mood' => 'calm',
                'energy' => 6,
                'title' => 'Quiet Saturday Reflections',
                'body' => 'Today was one of those rare days where the world seemed to slow down just enough for me to catch my breath. I spent the better part of the morning tucked away in the corner of the library with a physical book—no screens, no notifications, just the smell of old paper. It’s amazing how much mental clutter builds up over a week of development work. I spent time organizing my thoughts regarding the upcoming project architecture. I realized I’ve been overcomplicating the database schema, and a simpler approach would likely save us weeks of technical debt. No rush, no noise, just clarity.',
                'visibility' => 'private',
            ],
            [
                'user_id' => $user->id,
                'mood' => 'focused',
                'energy' => 8,
                'title' => 'The Breakthrough in the Code',
                'body' => 'I finally hit that "flow state" today. I’ve been struggling with the custom authentication middleware for three days, but this morning, it finally clicked. I refactored the entire service layer and managed to cut down the response time by nearly 200ms. It is such a rush when the logic you’ve been drawing on whiteboards finally translates into clean, passing tests. I stayed at my desk for four hours straight without even realizing I’d missed lunch. This is why I love building things. The momentum is high right now, and I want to carry this energy into tomorrow’s sprint planning.',
                'visibility' => 'circle',
            ],
            [
                'user_id' => $user->id,
                'mood' => 'heavy',
                'energy' => 4,
                'title' => 'Wrestling with the Fog',
                'body' => 'Today was a struggle from the moment I woke up. The sky was that particular shade of gray that makes it hard to feel motivated, and my brain felt like it was wrapped in cotton wool. I tried to sit down and work on the UI components, but I found myself staring at the same line of CSS for twenty minutes without making a single change. Instead of forcing it and producing sub-par code, I decided to listen to my body. I shut the laptop and took a long walk through the park. It didn’t magically fix everything, but the fresh air helped clear some of the heaviness.',
                'visibility' => 'private',
            ],
            [
                'user_id' => $user->id,
                'mood' => 'creative',
                'energy' => 7,
                'title' => 'Sketching Out New Ideas',
                'body' => 'The walk yesterday must have done something good for my subconscious because I woke up with a dozen new ideas for the user dashboard. I spent the afternoon sketching layouts in my notebook rather than jumping straight into Figma. There is something about the tactile feel of a pen that helps me think more broadly. I’m thinking about implementing a more modular approach where users can drag and drop their own widgets. It might be a bit of a stretch for the MVP, but it would definitely set the app apart. It’s a big challenge, but for the first time in a while, I’m excited about the design phase.',
                'visibility' => 'private',
            ],
            [
                'user_id' => $user->id,
                'mood' => 'social',
                'energy' => 9,
                'title' => 'Collaborative Energy',
                'body' => 'We had a sync today with the rest of the contributors, and the energy was electric. It’s so easy to get lost in your own head when you work solo most of the week, but hearing the progress on the mobile app side was incredibly motivating. We shared some of the challenges we were facing with the API endpoints and found a clever workaround using WebSockets that will make the live-update feature feel much snappier. I’m feeling really grateful for this "circle." Having people who speak the same technical language and share the same vision makes the hard days feel much more manageable.',
                'visibility' => 'circle',
            ],
            [
                'user_id' => $user->id,
                'mood' => 'tired',
                'energy' => 3,
                'title' => 'End of the Week Burnout',
                'body' => 'I pushed too hard this week. By the time I sat down this evening, I realized I was just clicking through tabs without any purpose. My energy is at an all-time low, and even though there are still bugs in the backlog, I know I need to step away. I’m logging off now and I’m not touching a keyboard until Monday. The project will still be there, the bugs aren’t going anywhere, and my brain needs a total reset. I’ve realized that my "focused" days are only possible if I actually respect my "tired" days. Tonight is for bad TV and an early bedtime.',
                'visibility' => 'private',
                'created_at' => '2026-02-06',
            ],
        ];

        foreach ($data as $pulse) {
            \App\Models\Pulse::create($pulse);
        }
    }
}
