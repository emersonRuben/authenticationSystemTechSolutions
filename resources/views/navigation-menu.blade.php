<div>
    <!-- Menú de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="d-inline-block align-text-top" style="height: 100px;">
            </a>
            
            <!-- Botón para el menú desplegable en dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menú Desplegable -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Menú Desplegable de Equipos -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="teamsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->currentTeam->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="teamsDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </a>
                                </li>
                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <li>
                                        <a class="dropdown-item" href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endif

                    <!-- Menú Desplegable de Configuración -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-circle" style="height: 30px; width: 30px;">
                            @else
                                {{ Auth::user()->name }}
                            @endif
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <li>
                                    <a class="dropdown-item" href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </a>
                                </li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
