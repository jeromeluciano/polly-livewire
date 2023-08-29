<x-layouts.common>
    <x-slot:pageTitle>
        Welcome
    </x-slot:pageTitle>
    <div class="grid-dots">
        <header>
            @include("partials.navigation")
        </header>
        <main>
            <div class="max-w-6xl mx-auto z-10">
                <div class="hero-section flex items-center pt-32 pb-48 ">
                    <div class="">
                        <h1
                            class="font-extrabold text-6xl leading-snug bg-gradient-to-r from-rose-600 via-purple-300 to-blue-600  bg-clip-text text-transparent ">
                            Empower your opinions, <span class="block">Shape our
                                tomorrow with
                                Polly.
                            </span>
                        </h1>
                        <button
                            class="mt-12 border-2 border-rose-600 text-rose-400  px-6 py-3 rounded text-sm tracking-wider hover:bg-rose-600 hover:text-white ">Learn
                            more...</button>
                    </div>
                    <x-icons name="vote" class="text-rose-600 mx-auto mb-8 " fill="white" />
                </div>
            </div>

            <div class="">
                @include("partials.features-section")
            </div>
        </main>
    </div>

</x-layouts.common>
