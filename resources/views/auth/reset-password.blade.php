<x-layouts.common>
    <x-slot:pageTitle>
        Change password
    </x-slot:pageTitle>
    <div class="flex items-center justify-center w-screen h-screen">
        <div class="h-[680px] flex items-center rounded-xl min-w-[450px] bg-neutral-900 border border-neutral-800">
            <div class=" px-16 py-12">
                <h1 class="flex items-center text-lg font-bold mb-4 text-pink-100 text-left">
                    <span class="mr-2">Change your password</span>
                    {{-- <x-icons name="heart" class="w-10 h-10 text-pink-300" /> --}}
                </h1>
                <livewire:auth.change-password />
            </div>
            <div class="rounded-r-xl overflow-hidden">
                <div class="nested-squares w-[500px] h-[680px]"></div>
            </div>
        </div>
    </div>
</x-layouts.common>
