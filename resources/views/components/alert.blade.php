@props(['tipe' => 'info'])

@php
    $kelas = match ($tipe) {
        'sukses' => 'alert-success',
        'bahaya' => 'alert-danger',
        default  => 'alert-info',
    };
@endphp

<div {{ $attributes->merge(['class' => "alert $kelas", 'role' => 'alert']) }}>
    {{ $slot }}
</div>