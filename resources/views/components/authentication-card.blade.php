<!-- resources/views/components/authentication-card.blade.php -->
<div class="min-vh-100 d-flex  justify-content-center align-items-center bg-light">
    <div class="card" style="width: 18rem;">
        <div class="container d-flex justify-content-center align-items-center">
            {{ $logo }}
        </div>
        <div class="w-100 p-4 bg-white shadow-sm rounded-lg text-center">
            {{ $slot }}
        </div>
    </div>
</div>
