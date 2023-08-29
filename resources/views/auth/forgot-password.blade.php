<x-layouts.common>
    <x-slot:pageTitle>
        Login
    </x-slot:pageTitle>
    <div class="flex items-center justify-center w-screen h-screen">
        <div class="h-[680px] flex items-center rounded-xl min-w-[450px] bg-neutral-900 border border-neutral-800">
            <div class=" px-16 py-12">
                <h1 class="flex items-center text-lg font-bold mb-2 text-pink-100 text-left tracking-wide">
                    Reset Password
                </h1>
                <livewire:auth.forgot-password />
            </div>
            <div class="rounded-r-xl overflow-hidden">
                <div class="nested-squares w-[500px] h-[680px]"></div>
            </div>
        </div>
    </div>
</x-layouts.common>
