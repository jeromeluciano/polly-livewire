<div {{ $attributes->merge()->class("w-full p-8 rounded-lg shadow-sm") }}>
    @if (isset($icon))
        {{ $icon }}
    @endif
    <h1 class="mb-3 text-sm text-neutral-200 tracking-wide text-center">{{ $title }}</h1>
    <p class="text-sm leading-[2.4] tracking-wide text-neutral-300/90 text-center">
        {{ $slot }}
    </p>
</div>
