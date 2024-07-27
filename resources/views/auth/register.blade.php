<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <!-- Logo or any other element can go here -->
                        <x-authentication-card-logo />
                    </div>
                    <div class="card-body">
                        <!-- Validation Errors -->
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Nombre') }}</label>
                                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="terms" id="terms" required />
                                        <label class="form-check-label" for="terms">
                                            {!! __('Acepto los :terms_of_service y :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="link-primary">'.__('Términos de Servicio').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="link-primary">'.__('Política de Privacidad').'</a>',
                                            ]) !!}
                                        </label>
                                    </div>
                                </div>
                            @endif

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a class="link-secondary" href="{{ route('login') }}">
                                    {{ __('¿Ya estás registrado?') }}
                                </a>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
