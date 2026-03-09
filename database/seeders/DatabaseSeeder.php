<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $allCategories = [
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
            [
                'name' => 'History',
                'description' => 'Tracing the tectonic shifts of human civilization and the echoes of empire within our modern architectures.',
                'posts' => [
                    [
                        'title' => 'The Tectonic Shifts of Lost Civilizations',
                        'excerpt' => 'What the collapse of the Roman and Mayan empires can teach us about the fragility of modern specialization.',
                        'body' => "## The Fragility of Complexity\nHistory is not a linear march of progress; it is a series of fluctuations. The great empires of the past did not fall because of a single catastrophe, but because they became too complex to sustain their own weight. As a society becomes increasingly specialized, it loses its capacity for resilience...\n\n### The Roman Mirror\nIn the final centuries of the Roman Empire, the distance between the citizens and the state grew insurmountable. The logistical burden of maintaining the borders exceeded the capacity of the center to govern. We see similar patterns in our globalized supply chains today. Efficiency is the enemy of redundancy, and redundancy is the key to survival...\n\n### Lessons from the Maya\nThe collapse of the Maya civilization was a negotiation with the environment that they eventually lost. It serves as a stark reminder that even the most advanced agricultural and theological systems are ultimately beholden to the climate. History is the study of how we manage our dependencies.",
                        'author_name' => 'Prof. Clara M.',
                    ],
                    [
                        'title' => 'Guttenberg and the Architecture of Modern Truth',
                        'excerpt' => 'How the movable type press did not just print books, but fundamentally restructured the human capacity for belief.',
                        'body' => "## The Death of the Aura\nBefore the printing press, knowledge had an aura. It was sacred, tactile, and rare. Guttenberg’s invention was the first step in the secularization of thought. By making the text reproducible, he made truth a commodity. This democratized knowledge, but it also sowed the seeds of our modern information crisis...\n\n### The First Info-War\nThe Reformation was the first conflict fought through the medium of the printed word. It proved that whoever controls the means of reproduction controls the narrative. We are still living in the echoes of this transition, struggling to define what is real in a world where everything can be duplicated...\n\n### The Future of the Book\nThe book is perhaps the most resilient technology ever invented. It requires no updates, no electricity, and no connection. It is the perfect archive. To read a book is to engage in a conversation across centuries, a privilege we must not abandon in our rush toward the ephemeral.",
                        'author_name' => 'Thomas Wright',
                    ],
                    [
                        'title' => 'The Bazaar and the Node: Silk Road Synapses',
                        'excerpt' => 'Revisiting the ancient trade networks as a biological precursor to our global digital infrastructure.',
                        'body' => "## The First Global Mind\nLong before the fiber-optic cable, the Silk Road functioned as a global nervous system. It was not a single line on a map, but a shifting network of nodes. Ideas flowed along these paths like electrical impulses, transforming every culture they touched...\n\n### Samarkand: The Server of the Steppe\nCities like Samarkand were the data centers of the 12th century. They processed the religious, scientific, and artistic code of both East and West, creating a synthesis that was greater than the sum of its parts. This connectivity brought prosperity, but it also brought the Black Death &mdash; a reminder that networks always carry risks...\n\n### The Human Protocol\nThe Silk Road relied on trust and shared protocols. It proved that commerce is the precursor to culture. To understand the modern internet, one must first understand the caravansary. We are simply building faster versions of the roads our ancestors walked thousands of years ago.",
                        'author_name' => 'Li Wei',
                    ],
                ]
            ],
            [
                'name' => 'Culture',
                'description' => 'A thoughtful observation of the subtle rhythms, aesthetic shifts, and social textures of 21st-century life.',
                'posts' => [
                    [
                        'title' => 'The Luxury of Deceleration',
                        'excerpt' => 'In an era optimized for velocity, the choice to move slowly is the ultimate expression of cultural authority.',
                        'body' => "## The Velocity Trap\nWe have confused speed with efficiency and movement with progress. Cultural deceleration is not a call to laziness, but a call to intentionality. When we rush through our lives, we experience them only in the abstract. Slowness allows us to engage with the tactile reality of our existence...\n\n### The Aesthetic of the Slow\nFrom the 'slow food' movement to the resurgence of film photography and printed journals, there is a growing hunger for anything that requires time. This is a reaction against the disposable nature of the digital. We are finding that meaning is proportional to the effort required to extract it...\n\n### Reclaiming the Hour\nTo slow down is to reclaim your time from the platforms that seek to monetize your every second. It is a radical act of self-care. It is about understanding that the most profound experiences cannot be optimized; they can only be lived.",
                        'author_name' => 'Isabella Ross',
                    ],
                    [
                        'title' => 'The Third Place and the Digital Void',
                        'excerpt' => 'As physical social sanctuaries vanish, we are left to navigate the profound isolation of the networked crowd.',
                        'body' => "## The Geography of Belonging\nSociologists have long noted the importance of 'the third place' &mdash; the environments that are neither work nor home. These are the spaces where community is built: the café, the park, the library. As these spaces are commercialized or abandoned, our social fabric begins to fray...\n\n### The Illusion of Connection\nSocial media platforms claim to be the 'new third place,' but they lack the physical presence and shared vulnerability that true community requires. We are more connected than ever, yet we report higher levels of loneliness. The digital void cannot replace the warmth of the agora...\n\n### Building for the Human\nThe future of urban design must prioritize the return of the shared space. We need architectures that encourage spontaneous interaction rather than isolated consumption. To save our culture, we must first save our physical neighborhoods.",
                        'author_name' => 'Markus Grey',
                    ],
                    [
                        'title' => 'Curation as an Act of Resistance',
                        'excerpt' => 'Why the ability to say "no" to the infinite scroll is the most important skill of the coming decade.',
                        'body' => "## The Infinite Buffet\nWe are drowning in a sea of content, yet we are starving for meaning. The algorithm is designed to keep you scrolling, to keep you consuming. Curation is the antidote to this exhaustion. It is the process of choosing the few over the many, the essential over the immediate...\n\n### The Editor’s Eye\nIn the future, the most valuable people will not be those who can create the most, but those who can filter the best. Curation is an intellectual labor that requires taste, history, and a willingness to be unpopular. It is about setting boundaries on your own curiosity...\n\n### Owning the Stream\nTo curate is to take control of your own mental inputs. By carefully selecting what you allow into your mind, you shape the person you are becoming. Resistance to the algorithm is not about logging off; it is about logging in with a purpose.",
                        'author_name' => 'Ava Sterling',
                    ],
                ]
            ],
        ];

        \App\Models\User::updateOrCreate(
            ['email' => 'mcorucu@mcorucu.com'],
            [
                'name' => 'mcorucu',
                'password' => bcrypt('Ezgi*7891'),
            ]
        );

        $this->call([
            SettingSeeder::class,
        ]);

        foreach ($allCategories as $catData) {
            $category = Category::updateOrCreate(
                ['slug' => str()->slug($catData['name'])],
                ['name' => $catData['name'], 'description' => $catData['description']]
            );

            foreach ($catData['posts'] as $postData) {
                Post::updateOrCreate(
                    ['slug' => str()->slug($postData['title'])],
                    [
                        'category_id' => $category->id,
                        'title' => $postData['title'],
                        'excerpt' => $postData['excerpt'],
                        'body' => $postData['body'],
                        'author_name' => $postData['author_name'],
                        'published_at' => now()->subDays(rand(1, 30)),
                        'featured_svg' => 'illustration-' . str()->slug($postData['title']) . '.svg',
                    ]
                );
            }
        }
    }
}
