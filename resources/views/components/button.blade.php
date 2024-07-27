<!-- resources/views/components/button.blade.php -->
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary btn-lg d-inline-flex align-items-center shadow-sm mt-2']) }}>
    {{ $slot }}
</button>
