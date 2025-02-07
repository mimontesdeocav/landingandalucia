<?php
/*
Template Name: Planes Andalucía
*/

get_header(); ?>

<div class="planes-andalucia">
    <style>
        .planes-andalucia {
            --primary-color: #3498db;
            --secondary-color: #5dade2;
            --accent-color: #85c1e9;
            --text-color: #2C3E50;
            --light-bg: #F7F9FC;
        }

        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_theme_file_uri('images/ImagenPrincipal.jpeg'); ?>');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero-section h1 {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            font-weight: 600;
        }

        .hero-section .lead {
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .plan-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .plan-card:hover {
            transform: translateY(-5px);
        }

        .plan-header {
            background: var(--primary-color);
            color: white;
            padding: 20px;
            border-radius: 15px 15px 0 0;
        }

        .plan-premium .plan-header {
            background: #2980b9;
            background: linear-gradient(135deg, #2980b9 0%, #3498db 100%);
        }

        .plan-features {
            padding: 20px;
        }

        .feature-list {
            list-style: none;
            padding-left: 0;
        }

        .feature-list li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        .feature-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--primary-color);
        }

        .btn-plan {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 25px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-plan:hover {
            background: #5dade2;
            transform: scale(1.05);
            color: white;
            text-decoration: none;
        }

        .plan-premium .btn-plan {
            background: #2980b9;
            background: linear-gradient(135deg, #2980b9 0%, #3498db 100%);
        }

        .plan-premium .btn-plan:hover {
            background: #3498db;
            background: linear-gradient(135deg, #3498db 0%, #5dade2 100%);
        }

        .comparison-table {
            margin-top: 50px;
        }
    </style>

    <div class="hero-section">
        <div class="container">
            <h1 class="display-4">Descubre la Magia de Andalucía</h1>
            <p class="lead">Elige el plan perfecto para tu aventura española</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <!-- Plan Básico - 3 días -->
            <div class="col-md-6 col-lg-3">
                <div class="plan-card">
                    <div class="plan-header">
                        <h3>La Esencia Andaluza</h3>
                        <p class="mb-0">3 días - Plan Basic</p>
                    </div>
                    <div class="plan-features">
                        <ul class="feature-list">
                            <li>Sevilla</li>
                            <li>Córdoba</li>
                            <li>Granada</li>
                            <li>Principales monumentos</li>
                            <li>Itinerario optimizado</li>
                        </ul>
                        <p class="text-center mt-4">
                            <a href="<?php echo esc_url(home_url('/la-esencia-andaluza-andalucia-en-3-dias-espana-2-lowcost/')); ?>" class="btn btn-plan">Ver Detalles</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Plan Premium - 5 días -->
            <div class="col-md-6 col-lg-3">
                <div class="plan-card plan-premium">
                    <div class="plan-header">
                        <h3>El Aroma Andaluz</h3>
                        <p class="mb-0">5 días - Plan Premium</p>
                    </div>
                    <div class="plan-features">
                        <ul class="feature-list">
                            <li>Sevilla extendido</li>
                            <li>Pueblos Blancos</li>
                            <li>Córdoba</li>
                            <li>Granada</li>
                            <li>Experiencias exclusivas</li>
                        </ul>
                        <p class="text-center mt-4">
                            <a href="<?php echo esc_url(home_url('/el-aroma-andaluz-lo-mejor-de-andalucia-5-dias-espana-3-premium/')); ?>" class="btn btn-plan">Ver Detalles</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Plan Completo - 8 días -->
            <div class="col-md-6 col-lg-3">
                <div class="plan-card">
                    <div class="plan-header">
                        <h3>El Espíritu Andaluz</h3>
                        <p class="mb-0">8 días - Plan Completo</p>
                    </div>
                    <div class="plan-features">
                        <ul class="feature-list">
                            <li>Sevilla completo</li>
                            <li>Pueblos Blancos</li>
                            <li>Córdoba profundo</li>
                            <li>Granada extendido</li>
                            <li>Experiencias culturales</li>
                        </ul>
                        <p class="text-center mt-4">
                            <a href="<?php echo esc_url(home_url('/el-espiritu-andaluz-lo-mejor-de-andalucia-en-8-dias-8-dias-espana-4/')); ?>" class="btn btn-plan">Ver Detalles</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Plan Personalizado -->
            <div class="col-md-6 col-lg-3">
                <div class="plan-card">
                    <div class="plan-header">
                        <h3>Tu Andalucía</h3>
                        <p class="mb-0">Plan Personalizado</p>
                    </div>
                    <div class="plan-features">
                        <ul class="feature-list">
                            <li>Duración flexible</li>
                            <li>Destinos a elección</li>
                            <li>Experiencias únicas</li>
                            <li>Alojamiento a medida</li>
                            <li>Asistencia personal</li>
                        </ul>
                        <p class="text-center mt-4">
                            <a href="<?php echo esc_url(home_url('/contacto/')); ?>" class="btn btn-plan">Contactar</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla comparativa -->
        <div class="comparison-table">
            <h2 class="text-center mb-4">Comparativa de Planes</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Características</th>
                            <th>La Esencia (3 días)</th>
                            <th>El Aroma (5 días)</th>
                            <th>El Espíritu (8 días)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sevilla</td>
                            <td>1 día</td>
                            <td>2 días</td>
                            <td>3 días</td>
                        </tr>
                        <tr>
                            <td>Córdoba</td>
                            <td>Medio día</td>
                            <td>1 día</td>
                            <td>2 días</td>
                        </tr>
                        <tr>
                            <td>Granada</td>
                            <td>1 día</td>
                            <td>1 día</td>
                            <td>2 días</td>
                        </tr>
                        <tr>
                            <td>Pueblos Blancos</td>
                            <td>-</td>
                            <td>1 día</td>
                            <td>1 día</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
