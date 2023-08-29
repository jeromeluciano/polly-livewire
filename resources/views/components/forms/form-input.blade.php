@props(["type" => "text", "name", "label", "placeholder" => "", "error"])

<div>
    <label for="{{ $name }}" class="text-xs uppercase text-neutral-300 tracking-wider">{{ $label }}</label>

    <input name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}"
        class="@error($name) border-rose-400 @else border-neutral-800 @enderror bg-neutral-900 border w-full mt-2 py-3 px-3 outline-none text-neutral-300 text-sm rounded mb-1 autofill:bg-rose-200"
        {{ $attributes }} required />
    @error($name)
        <span class="block relative text-rose-400 text-xs w-auto mt-1 mb-2">
            {{ $message }}
        </span>
    @enderror
</div>
