<!-- resources/views/components/Card.blade.php -->

<div {{ $attributes->merge(['class' => 'custom-card']) }}>
    {{ $slot }}
</div>
