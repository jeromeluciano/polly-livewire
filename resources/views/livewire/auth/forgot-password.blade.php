<div>
    @if (session()->has("success"))
        <div class="py-3 text-green-500  my-2 rounded-md text-xs border-green-600 border text-center">
            Password sent to your email.
        </div>
    @endif
    <form wire:submit="resetPassword">
        <x-forms.form-input wire:model.blur="email" class="mb-4" type="email" label="Email" name="email" />

        <button
            class="flex items-center justify-center gap-x-2 bg-rose-600 text-white w-full  px-8 py-2.5 mt-4 text-sm rounded hover:bg-rose-700">
            Reset
            <span wire:loading wire:target="authenticate">
                <x-icons name="loading" class="w-5 h-5" />
            </span>
        </button>

        <a href="/login"
            class="block text-center border-none w-full text-neutral-300 px-8 py-3 mt-2 text-sm rounded hover:underline">Go
            back</a>
    </form>
</div>
