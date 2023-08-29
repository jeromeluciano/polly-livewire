<div class="max-w-xs">
    @if (session()->has("status"))
        <div class="py-3 text-green-500  my-2 rounded-md text-xs border-green-600 border text-center">
            Password reset successfully!
        </div>
    @endif
    <form wire:submit="changePassword">
        <x-forms.form-input wire:model.blur="password" class="mb-4" type="password" label="Password" name="password" />

        <x-forms.form-input wire:model.blur="password_confirmation" class="mb-4" type="password"
            label="Password confirmation" name="password_confirmation" />

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
