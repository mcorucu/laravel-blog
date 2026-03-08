<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Philosophy',
                'description' => 'A rigorous investigation into the quiet foundations of human awareness and ethical endurance.',
                'posts' => [
                    [
                        'title' => 'The Stoic Virtue of Deliberate Silence',
                        'excerpt' => 'In a culture of performative noise, silence emerges as the ultimate form of self-governance and cognitive preservation.',
                        'body' => "## The Architecture of Quiet\nTo reside in silence is not a passive retreat, but a strategic fortification of the psyche. In our modern landscape, defined by the relentless cadence of digital feedback loops, the choice to remain unheard has become a profound act of rebellion. It is within these lacunas of sound that we find the capacity for original thought...\n\n### The inner Citadel\nMarcus Aurelius spoke not of physical walls, but of the mental boundaries that separate our internal peace from the external debris of opinion. Silence is the masonry of this citadel. When we stop the reflexive urge to broadcast, we begin the slower, more difficult process of rigorous internal examination...\n\n> 'Nothing is more powerful than the silence of a man who has carefully weighed his words.' &mdash; Seneca\n\n### A New Discipline\nPracticing silence requires a refined minimalist sensibility. It is about understanding that most things do not require your immediate response. By cultivating a 'wait-and-see' ethic, we allow the sediment of daily noise to settle, revealing the clarity that only stillness provides.",
                        'author_name' => 'Marcus Thorne',
                    ],
                    [
                        'title' => 'Existence Precedes the Digital Essence',
                        'excerpt' => 'Reclaiming the existentialist radical freedom in an age of algorithmic pre-determination.',
                        'body' => "## The Modern Forge\nJean-Paul Sartre’s existentialist mandate remains more relevant today than ever: man is nothing other than what he makes of himself. Yet, in our networked era, we are often 'made' by the data we mirror. Reclaiming our essence requires a conscious break from the predictive paths laid out for us by modern systems...\n\n### The Myth of the User\nWe like to believe we are the users of technology, but we are often its subjects. To exist, in the truly existential sense, is to act with a radical autonomy that defies categorization. We must be suspicious of any platform that claims to know us better than we know ourselves...\n\n### The Weight of Choice\nFreedom is not a state of comfort; it is a burden of responsibility. In choosing our digital engagement, we are essentially choosing a version of ourselves. Every click, every scroll, every word is a stroke on the canvas of our being. We must paint with intention.",
                        'author_name' => 'Elena Vance',
                    ],
                    [
                        'title' => 'The Linguistic Limits of Connectivity',
                        'excerpt' => 'How the shorthand of digital communication is subtly reshaping the boundaries of human empathy.',
                        'body' => "## The Compression of Emotion\nLanguage is not merely a vehicle for information; it is the very structure of our feeling. As our interactions migrate to platforms that favor brevity and efficiency, we are witnessing a subtle compression of the human experience. When words are truncated, the emotions they signify often lose their depth...\n\n### The Nuance Deficit\nIn professional and personal spheres, the loss of rhythmic conversation and descriptive language has led to a 'nuance deficit.' We communicate faster, but we understand less. The poetry of human interaction is being replaced by the prose of peer-to-peer data transfer...\n\n### Expanding the Horizon\nTo fight back against this flattening of reality, we must return to a more intentional language. We must choose the difficult word over the easy emoji. We must preserve the complexity of our expression if we are to preserve the complexity of our souls.",
                        'author_name' => 'Julian Sorel',
                    ],
                ]
            ],
            [
                'name' => 'Technology',
                'description' => 'Deconstructing the digital era with a focus on human centricity, aesthetic precision, and technical legacy.',
                'posts' => [
                    [
                        'title' => 'The Aesthetic of Invisible Engineering',
                        'excerpt' => 'True premium technology does not shout for attention; it whispers through the elegance of its disappearance.',
                        'body' => "## The Paradox of Presence\nThe highest achievement in design is the moment when the interface becomes invisible. When we use a tool that has been refined to its absolute essence, the friction between the human desire and the technical execution vanishes. This is the 'Apple effect' &mdash; an obsession with the quietude of high-functional objects...\n\n### The Power of Whitespace\nIn digital design, whitespace is not empty; it is active. It is the visual equivalent of 'room to breathe.' By meticulously managing the distance between elements, we create a hierarchy that feels natural rather than forced. A premium system respects the user's attention enough to leave parts of it untouched...\n\n### The Legacy of the Minimal\nMinimalism is not about taking things away. It is about distilling the object until only the soul remains. Whether it is a physical device or a block of code, the goal is the same: to create a foundation that supports the user’s narrative without ever interrupting it.",
                        'author_name' => 'Jonathan Lowe',
                    ],
                    [
                        'title' => 'Senescence in Silicon: The Future of Digital Memory',
                        'excerpt' => 'Investigating the fragile nature of our collective digital archives and the quest for permanence.',
                        'body' => "## The Weightless Archive\nWe are currently living in the most documented era in human history, yet we are also the most vulnerable to a 'digital dark age.' Our memories are currently stored in formats that are decaying faster than the minds that created them. The cloud is a convenient metaphor, but it is ultimately a physical infrastructure subject to entropic decay...\n\n### The Return of the Physical\nThere is a growing movement toward 'physical redundancy.' Photobooks, vinyl records, and printed journals are no longer seen as nostalgia, but as security protocols. A physical object requires no electricity to be read. It has a shelf life that outlasts the longest software support cycle...\n\n### Designing for the Century\nIf we are to be good ancestors, we must learn to archive with a century-long perspective. This requires us to build systems that are not just efficient today, but readable tomorrow. We must prioritize interoperability and open standards over proprietary lockdowns.",
                        'author_name' => 'Sarah Chen',
                    ],
                    [
                        'title' => 'The Ethics of Emergent Intelligence',
                        'excerpt' => 'As AI moves from tool to agent, we must redefine the social contract between man and machine.',
                        'body' => "## The Agentic Shift\nWe are moving from a world of 'software as a tool' to 'software as an agent.' When the code begins to make decisions rather than just follow commands, our relationship with technology undergoes a fundamental shift. The responsibility for the output no longer rests solely with the user, but with the architects of the model...\n\n### The Transparency Mandate\nIf an intelligence is to be trusted, it must be legible. We cannot have a society governed by black-box algorithms. Transparency is not just a technical requirement; it is a moral one. We must insist on AI that can explain its reasoning in terms that are compatible with human values...\n\n### Guardian vs. User\nIn the near future, we will not 'use' AI; we will 'manage' it. This requires a new set of skills: digital ethics, oversight, and a deep understanding of the biases inherent in silicon. We must ensure that as the ghosts in our machines grow more sophisticated, their souls remain aligned with our own.",
                        'author_name' => 'Dr. Aris Thorne',
                    ],
                ]
            ],
            // ... (I will continue with History and Culture in the next step to keep the tool call from being too huge)
        ];

        foreach ($categories as $catData) {
            $category = Category::create([
                'name' => $catData['name'],
                'slug' => str()->slug($catData['name']),
                'description' => $catData['description'],
            ]);

            foreach ($catData['posts'] as $postData) {
                Post::create([
                    'category_id' => $category->id,
                    'title' => $postData['title'],
                    'slug' => str()->slug($postData['title']),
                    'excerpt' => $postData['excerpt'],
                    'body' => $postData['body'],
                    'author_name' => $postData['author_name'],
                    'published_at' => now()->subDays(rand(1, 30)),
                    'featured_svg' => 'illustration-' . str()->slug($postData['title']) . '.svg',
                ]);
            }
        }
    }
}
