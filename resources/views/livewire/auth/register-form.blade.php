<form class="max-w-sm space-y-3 " wire:submit="save">
    <x-forms.form-input wire:model.blur="name" name="name" type="name" label="Name" />

    <x-forms.form-input wire:model.blur="email" name="email" type="email" label="Email" />

    <x-forms.form-input wire:model.blur="password" name="password" type="password" label="Password" />

    <x-forms.form-input wire:model.blur="password_confirmation" name="password_confirmation" type="password"
        label="Password confirmation" class="mb-4" />

    <label for="terms_condition" class="flex items-center text-neutral-300 text-sm mb-2 mx-1">
        <input wire:model="terms_condition" type="checkbox" id="terms_condition" name="terms_condition"
            class="w-4 h-4 text-rose-600 bg-neutral-900 border-neutral-800 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-neutral-900 dark:border-neutral-800 "
            required>
        <span class="ml-2">
            I agree to the terms & conditions
        </span>
    </label>

    <div class="flex justify-center mb-4">
        <button class="w-full bg-rose-600 text-neutral-200 px-12 py-2.5 mt-4 rounded-full text-sm">Sign
            me
            up</button>
    </div>

    <a href="/login" class="block text-center w-full text-xs mt-4 text-neutral-200 ">Already have an
        account?</a>
</form>
