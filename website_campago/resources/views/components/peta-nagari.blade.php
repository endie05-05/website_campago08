@if (config('nagari.maps_embed_url'))
    <div {{ $attributes->merge(['class' => 'peta-nagari-wrap']) }}>
        <iframe
            src="{{ config('nagari.maps_embed_url') }}"
            title="Peta Lokasi Nagari Campago"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </div>
@endif
