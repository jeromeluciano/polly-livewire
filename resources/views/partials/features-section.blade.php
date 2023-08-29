<div class="feature-section bg-neutral-900 z-40 ">
    <div class="max-w-6xl mx-auto pt-32 pb-32">
        <div class="text-center mb-16">
            <h1 class="text-xl font-medium text-neutral-200 tracking-widest">Features</h1>
        </div>
        {{-- feature cards --}}
        <div class="grid grid-cols-3 gap-x-4 relative">
            <x-cards.feature-card class="flex flex-col">
                <x-slot:icon>
                    <div class="mx-auto mb-4">
                        <x-icons name="globe" class="w-12 h-12" />
                    </div>
                </x-slot:icon>
                <x-slot:title>
                    Create Engaging Polls
                </x-slot:title>
                Polly empowers users to effortlessly craft
                engaging polls
                with
                various
                question types,
                including multiple-choice, ranking, and open-ended questions.
            </x-cards.feature-card>
            <x-cards.feature-card class="flex flex-col">
                <x-slot:icon>
                    <div class="mx-auto mb-4">
                        <x-icons name="heart" class="w-12 h-12" />
                    </div>
                </x-slot:icon>
                <x-slot:title>
                    User-Friendly Interface
                </x-slot:title>
                With its clean and user-friendly
                interface, Polly ensures that both poll creators and participants can navigate through
                the platform without any hassle. Intuitive controls and straightforward design make it
                accessible to users of all technical levels.
            </x-cards.feature-card>
            <x-cards.feature-card class="flex flex-col">
                <x-slot:icon>
                    <div class="mx-auto mb-4">
                        <x-icons name="share" class="w-12 h-12" />
                    </div>
                </x-slot:icon>
                <x-slot:title>
                    Share and Collaborate
                </x-slot:title>
                Sharing polls is a breeze with Polly's
                shareable links and integration options. Whether it's via social media, email, or
                embedding the poll on a website, Polly facilitates seamless distribution.
            </x-cards.feature-card>
        </div>
    </div>
</div>
