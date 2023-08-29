<x-layouts.common>
    <x-slot:pageTitle>
        Register
    </x-slot:pageTitle>

    <div class="flex items-center justify-center w-screen h-screen">
        <div class="">
            <div class="h-[680px] flex border border-neutral-800 rounded-xl overflow-hidden">
                <div class="nested-squares w-[500px] h-full">
                </div>
                <div class="p-16 h-full overflow-y-auto no-scrollbar">
                    <h1 class="text-md font-bold mb-4">Registration</h1>
                    <livewire:auth.register-form />
                </div>
            </div>
            <p class="text-center mt-8 text-xs text-neutral-300">Made with 💜</p>
        </div>
    </div>
</x-layouts.common>
