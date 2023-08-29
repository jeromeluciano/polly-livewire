<div>
    @error("message")
        <div class="py-3 text-red-500  my-2 rounded-md text-xs border-red-600 border text-center">{{ $message }}
        </div>
    @enderror
    <form wire:submit="authenticate">
        <x-forms.form-input wire:model.blur="email" class="mb-4" type="email" label="Email" name="email" />

        <x-forms.form-input wire:model.blur="password" class="mb-4" type="password" label="Password" name="password" />

        <a href="/forgot-password" class="block text-xs my-3 text-right text-neutral-300 tracking-wide">Forgot
            password?</a>

        <button
            class="flex items-center justify-center gap-x-2 bg-rose-600 text-white w-full  px-8 py-2.5 mt-4 text-sm rounded hover:bg-rose-700">
            Login
            <span wire:loading wire:target="authenticate">
                <x-icons name="loading" class="w-5 h-5" />
            </span>
        </button>

        <a href="/register"
            class="block text-center border-none w-full text-neutral-300 px-8 py-3 mt-2 text-xs rounded hover:underline">Not
            yet registered?</a>
    </form>
</div>
