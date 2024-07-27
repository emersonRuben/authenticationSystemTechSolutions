<x-app-layout>

    <div>
        <div class="container py-4">
            <div class="row">
                <!-- Profile Information Card -->
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ __('Actualizar Información del Perfil') }}</h5>   
                            </div>
                            <div class="card-body">
                                @livewire('profile.update-profile-information-form')
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Password Update Card -->
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ __('Update Password') }}</h5>
                            </div>
                            <div class="card-body">
                                @livewire('profile.update-password-form')
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Two-Factor Authentication Card -->
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ __('Two-Factor Authentication') }}</h5>
                            </div>
                            <div class="card-body">
                                @livewire('profile.two-factor-authentication-form')
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Account Deletion Card -->
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ __('Delete Account') }}</h5>
                            </div>
                            <div class="card-body">
                                @livewire('profile.delete-user-form')
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
