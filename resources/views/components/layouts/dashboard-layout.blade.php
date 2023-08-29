<x-layouts.common>
    <div class="">
        <div class="bg-neutral-900 border-b border-neutral-800">
            <header class="max-w-6xl mx-auto py-4">
                <h1 class="px-2">Polly</h1>
            </header>
        </div>

        <div class="flex max-w-6xl mx-auto ">
            <aside class="bg-neutral-900 min-h-screen w-[200px] border-r border-neutral-800">
                @include("partials.dashboard-navigation")
            </aside>
            <main class="p-4">
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layouts.common>
