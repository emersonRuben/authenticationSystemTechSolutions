<div class="container mt-4">
    <!-- Encabezado -->
    <div class="p-6 bg-white border-b border-gray-200 text-center">
        <!-- Título de la Página -->
        <h1 class="mt-4 text-3xl font-semibold text-gray-900">
            ¡Bienvenido a tu Panel de Control, {{ Auth::user()->name }}!
        </h1>
    </div>

    <!-- Contenedor de Tarjetas -->
    <div class="row mt-4">
        <!-- Estadísticas de Proyectos -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4">Estadísticas de Proyectos</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Proyectos Totales
                            <span class="badge bg-primary rounded-pill">5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Proyectos en Curso
                            <span class="badge bg-warning text-dark rounded-pill">3</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Proyectos Completados
                            <span class="badge bg-success rounded-pill">2</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Proyectos Recientes -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4">Proyectos Recientes</h2>
                    <ul class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Proyecto Alpha
                            <span class="badge bg-info rounded-pill">30 de Ago, 2024</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Proyecto Beta
                            <span class="badge bg-info rounded-pill">15 de Sep, 2024</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Proyecto Gamma
                            <span class="badge bg-info rounded-pill">01 de Oct, 2024</span>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Resumen de Actividades -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4">Resumen de Actividades</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tarea Completada
                            <span class="badge bg-secondary rounded-pill">Hace 2 horas</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Nuevo Comentario
                            <span class="badge bg-secondary rounded-pill">Hace 3 horas</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Actualización de Proyecto
                            <span class="badge bg-secondary rounded-pill">Hace 1 día</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Área para Notificaciones o Mensajes -->
    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            <div class="card shadow-sm w-100">
                <div class="card-body">
                    <h2 class="card-title mb-4">Notificaciones</h2>
                    <div class="accordion" id="notificationsAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Notificación 1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#notificationsAccordion">
                                <div class="accordion-body">
                                    Tienes un nuevo mensaje de un cliente.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Notificación 2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#notificationsAccordion">
                                <div class="accordion-body">
                                    Tu proyecto "Beta" está cerca de su fecha límite.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Notificación 3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#notificationsAccordion">
                                <div class="accordion-body">
                                    Tu último informe ha sido aprobado.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
