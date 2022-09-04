
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Firmas Electrónicas - InvoExpressEc</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/formulario.css" rel="stylesheet">
  <link href="/assets/css/botonw.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- =======================================================
  * Template Name: Invoexpress
  * Template URL: https://firmaelectronicaec.com
  * Author: Bootstrap
  * License: https://bootstrap.com
  ======================================================== -->
</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="/">InvoExpress-Ec</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>          
          <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>                          
          <li><a class="nav-link scrollto" href="#pricing">Planes</a></li>
          <li><a class="nav-link scrollto" href="#services">Distribuidores</a></li>
          <li><a class="nav-link scrollto" href="https://invoexpress.com/" target="_blank" >Factura Electrónica</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">        
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="youtube"><i class="bi bi-youtube"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>Firma Electrónica para Personas Naturales y Jurídicas</h1>
            <h2>En archivo P12 - Nube - Token</h2>
            <h2>Solicita tu firma de manera segura, nuestro sistema esta diseñado para proteger y garantizar el derecho a la proteccion de tus datos personales.</h2>
            <a href="https://factura.invoexpress.com/login" target="_blank" class="btn-get-started scrollto">Requisitos / Solicitar Firma</a> 
            <a href="{{route('datos.create')}}" class="btn-get-started scrollto  border-0 m-2">SOLICITUD DE FIRMA ELECTRÓNICA</a>  
            <div id="respuesta">
            @if(session('status'))
  <div id="respuesta_exito"  class="bg-success p-2 text-white bg-opacity-75 m-2">
  {{session('status')}} 
            @endif
            </div>         
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3>Acerca de Nosotros</h3>
              <p class="fst-italic">
                Somos una empresa dedicada al desarrollo, distribución y comercialización de software de facturación electrónica, y firmas electrónicas enfocado al crecimiento empresarial de nuestros clientes.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Nuestra empresa esta legalmente constituida en el Ecuador.</li>
                <li><i class="bi bi-check-circle"></i> Contamos con profesionales capacitados, para las respectivas implementaciones y actualizaciones.</li>
                <li><i class="bi bi-check-circle"></i> Está dedicado para personas naturales y personas jurídicas.</li>
              </ul>
              <p>
                Como Empresa, garantizamos nuestro servicios, nos convertimos en un pilar fundamental, para acelerar el crecimiento de tu negocio.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item" data-aos="fade-up">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>SERCOP</h4>
                  <p>Participa en los procesos de contratación del Sercop.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>QUIPUX</h4>
                  <p>Para el Proceso de la Gestión Documental.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>SRI</h4>
                  <p>Autoriza tus documentos electrónicos y para trámites en SRI.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4>SERVIDORES PÚBLICOS</h4>
                  <p>Para todo trámite requqerido por la entidad.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>FIRMA EC</h4>
                  <p>Firma y válida toda la documentación requerida.</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>OTROS</h4>
                  <p>Supercias, Consejo de la Judicatura, Medicos, Policias, Militares, Profesionales, etc...</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/features-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="assets/img/features-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="assets/img/features-4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->
    
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Planes de Firma Electrónica</h2>
          <p>Elije el plan que mas te convenga.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in">
              <span class="advanced">100% Segura</span>
              <h3>Plan 0</h3>
              <h4><sup>$</sup>7<span> / Incluido Iva</span></h4>
              <ul>
                <li>Vigencia - 7 Días</li>
                <li>Sin Ruc</li>
                <li>Personas Naturales</li>
                <li>Trámite 100% en linea</li>
                <li>Solicitala a nivel nacional</li>
                <li>Asesoria personalizada</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in">
              <span class="advanced">100% Segura</span>
              <h3>Plan 1</h3>
              <h4><sup>$</sup>20<span> / Incluido Iva</span></h4>
              <ul>
                <li>Vigencia - 1 Año</li>
                <li>Con o sin Ruc</li>
                <li>Personas Naturales</li>
                <li>Personas Jurídicas</li>                
                <li>Trámite 100% en linea</li>
                <li>Solicitala a nivel nacional</li>
                <li>Asesoria personalizada</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span class="advanced">100% Segura</span>
              <h3>Plan 2</h3>
              <h4><sup>$</sup>32<span> / Incluido Iva</span></h4>
              <ul>
                <li>Vigencia - 2 Años</li>
                <li>Con o sin Ruc</li>
                <li>Personas Naturales</li>
                <li>Personas Jurídicas</li>                
                <li>Trámite 100% en linea</li>
                <li>Solicitala a nivel nacional</li>
                <li>Asesoria personalizada</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">100% Segura</span>
              <h3>Plan 3</h3>
              <h4><sup>$</sup>45<span> / Incluido Iva</span></h4>
              <ul>
                <li>Vigencia - 3 Años</li>
                <li>Con o sin Ruc</li>
                <li>Personas Naturales</li>
                <li>Personas Jurídicas</li>                
                <li>Trámite 100% en linea</li>
                <li>Solicitala a nivel nacional</li>
                <li>Asesoria personalizada</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">            
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">100% Segura</span>
              <h3>Plan 4</h3>
              <h4><sup>$</sup>55<span> / Incluido Iva</span></h4>
              <ul>
                <li>Vigencia - 4 Años</li>
                <li>Con o sin Ruc</li>
                <li>Personas Naturales</li>
                <li>Personas Jurídicas</li>                
                <li>Trámite 100% en linea</li>
                <li>Solicitala a nivel nacional</li>
                <li>Asesoria personalizada</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">100% Segura</span>
              <h3>Plan 5</h3>
              <h4><sup>$</sup>65<span> / Incluido Iva</span></h4>
              <ul>
                <li>Vigencia - 5 Años</li>
                <li>Con o sin Ruc</li>
                <li>Personas Naturales</li>
                <li>Personas Jurídicas</li>                
                <li>Trámite 100% en linea</li>
                <li>Solicitala a nivel nacional</li>
                <li>Asesoria personalizada</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Comprar</a>
              </div>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Pricing Section -->

     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Forma parte de nuestro equipo de Distribuidores</h2>
          <p>Solicita los Nuevos Precios para Distribuidores</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Distribución de Firmas para Emprendedores</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Distribución de Firmas para Contadores</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Distribución para Emisores de Facturación Electrónica</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Distribución de Firmas para Grupos Empresariales</a></h4>
              <p class="description"></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section --> 
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contacto</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p>Guayaquil - Cdla Alborada IX, Mz. 937 S. 11</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>invoexpressec@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Celular:</h4>
                <p> 099 323 9900</p>
              </div>

          </div>
          </div>         
        
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <form action="/public/forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nombres:</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email:</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Tema:</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Mensaje:</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Enviando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>InvoExpress-Ec</h3>              
              <div class="social-links mt-3">                
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>                
                <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>invoexpress</span></strong>. All Rights Reserved
      </div>
      <!-- INGRESE ADMIN -->
      <div >
        <button id="btnAdmin" onclick="admin()" type="button" class="btn btn-secondary" >ADMIN</button>
      </div>
      
      <div class="modal fade" id="AdexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de datos del formulario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <h5>PERSONA NATURAL</h5>
          <table class="table table-striped">
        <thead  class="table-dark">
          <tr> 
          <th>N°</th>
          <th>Fecha de creación de registro</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Numero Documento de Identidad</th>
          <th>Certificado</th>
          <th>Documento de Identidad</th>
          <th>Con Ruc</th>
          <th>Sexo</th>
          <th>Fecha de Nacimiento</th>
          <th>Nacionalidad</th>
          <th>Teléfonos celular</th>
          <th>Correos</th>
          <th>Provincia</th>
          <th>Ciudad</th>
          <th>Dirección</th>
          <th>Tiempo de Vigencia</th>
          <th>Imagenes</th>  
          <th>PDF RUC</th> 
          </tr>        
        </thead>
        <tbody>
          
         
          
            
            
            @foreach($datos as $dato)
             
           
              <tr> 
                 
               
                  <td> {{ $dato->id}}</td>
                  <td>{{ $dato->dia_creado}}</td>
                   <td>{{ $dato->nombres}}</td>
                  <td>{{ $dato->apellidos}}</td>
                  <td>{{ $dato->numero_documento_identidad}}</td>
                  <td>{{ $dato->tipo_certificado}}</td>
               <td>{{ $dato->documento_identidad}}</td>
                  <td>{{ $dato->con_ruc}}</td>
               <td>{{ $dato->sexo}}</td>
                <td>{{ $dato->fecha_nacimiento}}</td>
                 <td>{{ $dato->nacionalidad}}</td>
                  <td><ol><li>{{ $dato->telefono_celular}}</li> <li>{{ $dato->telefono_celular2}}</li></ol> </td>
                  <td><ol><li>{{ $dato->correo}}</li> <li>{{ $dato->correo2}}</li></ol> </td>
                <td>{{ $dato->provincia}}</td>
                  <td>{{ $dato->ciudad}}</td>
                  <td>{{ $dato->direccion}}</td>
                 <td>{{ $dato->vigencia}}</td>
                  <td>
                    <div class="d-flex flex-row mb-3">
                  <a class="btn btn-success m-1" href='personanatura/anverso/{{ $dato->imagen_anverso}} ' download alt="">Imagen Anverso</a>
                  <a class="btn btn-info m-1" href='personanatura/reverso/{{ $dato->imagen_reverso}} ' download alt="">Imagen Reverso</a>
                  <a class="btn btn-secondary m-1" href='personanatura/selfie/{{ $dato->imagen_selfie}} ' download alt="">Imagen Selfie</a>
                  </div>
                  </td>
                 <td>
                 <a class="btn btn-danger" href='personanatura/pdf/{{ $dato->pdf}} ' download alt="">PDF RUC</a>
                 </td>
                </tr>
                @endforeach
            
              
          
          

        </tbody>
        </table>
        
        </div>
        <div>
          <form  id="fecha_excel" action="{{route('datosformulario.export')}}" name="fecha_excel" class="d-flex flex-column mb-3 w-25 p-4" method="get">
            @csrf
            <div> 
            <label for="dia" class="form-label">ELIJA EL DIA, PARA DESCARGAR EL EXCEL</label>
            
    <input class="form-control" name="dia" id="dia"  type="date">
            </div>
            <button id="btnExcel"  class="btn btn-success m-4 text-center" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM272.1 264.4L224 344l48.99 79.61C279.6 434.3 271.9 448 259.4 448h-26.43c-5.557 0-10.71-2.883-13.63-7.617L192 396l-27.31 44.38C161.8 445.1 156.6 448 151.1 448H124.6c-12.52 0-20.19-13.73-13.63-24.39L160 344L111 264.4C104.4 253.7 112.1 240 124.6 240h26.43c5.557 0 10.71 2.883 13.63 7.613L192 292l27.31-44.39C222.2 242.9 227.4 240 232.9 240h26.43C271.9 240 279.6 253.7 272.1 264.4zM256 0v128h128L256 0z"/></svg> DESCARGAR EXCEL</button><br>
            
             
              
          </form>
          
        </div>
        <div class="table-responsive">
          <h5>REPRESENTANTE LEGAL O PERSONA JURIDICA</h5>
        <table class="table table-striped">
        <thead  class="table-dark">
          <tr> 
          <th>N°</th>
          <th>Fecha de creación de registro</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Numero Documento de Identidad</th>
          <th>Certificado</th>
          <th>Documento de Identidad</th>
          <th>N° Ruc</th>
          <th>Razon Social</th>
          <th>Cargo Representante</th>
          <th>Sexo</th>
          <th>Fecha de Nacimiento</th>
          <th>Nacionalidad</th>
          <th>Teléfonos celular</th>
          <th>Correos</th>
          <th>Provincia</th>
          <th>Ciudad</th>
          <th>Dirección</th>
          <th>Tiempo de Vigencia</th>
          <th>Imagenes</th>  
          <th>PDFs</th> 
          </tr>        
        </thead>
        <tbody>
          
         
          
            
            
            @foreach($legales as $dato)
             
           
              <tr> 
                 
               
                  <td> {{ $dato->id}}</td>
                  <td>{{ $dato->dia_creado}}</td>
                   <td>{{ $dato->nombres}}</td>
                  <td>{{ $dato->apellidos}}</td>
                  <td>{{ $dato->numero_documento}}</td>
                  <td>{{ $dato->tipo_certificado}}</td>
               <td>{{ $dato->documento_identidad}}</td>
                  <td>{{ $dato->numero_ruc}}</td>
                  <td>{{ $dato->razon_social}}</td>
                  <td>{{ $dato->cargo_representante}}</td>
               <td>{{ $dato->sexo}}</td>
                <td>{{ $dato->fecha_nacimiento}}</td>
                 <td>{{ $dato->nacionalidad}}</td>
                  <td><ol><li>{{ $dato->telefono_celular}}</li> <li>{{ $dato->telefono_celular2}}</li></ol> </td>
                  <td><ol><li>{{ $dato->correo}}</li> <li>{{ $dato->correo2}}</li></ol> </td>
                <td>{{ $dato->provincia}}</td>
                  <td>{{ $dato->ciudad}}</td>
                  <td>{{ $dato->direccion}}</td>
                 <td>{{ $dato->vigencia}}</td>
                  <td>
                    <div class="d-flex flex-row mb-3">
                  <a class="btn btn-success m-1" href='representanteLegal/anverso/{{ $dato->imagen_anverso}} ' download alt="">Imagen Anverso</a>
                  <a class="btn btn-info m-1" href='representanteLegal/reverso/{{ $dato->imagen_reverso}} ' download alt="">Imagen Reverso</a>
                  <a class="btn btn-secondary m-1" href='representanteLegal/selfie/{{ $dato->imagen_selfie}} ' download alt="">Imagen Selfie</a>
                  </div>
                  </td>
                 <td>
                   <div class="d-flex flex-row "> 
                 <a class="btn btn-danger m-1 w-50 p-2" href='representanteLegal/pdf/{{ $dato->pdf}} ' download alt="">RUC</a>
                 <a class="btn btn-danger m-1 w-50 p-2" href='representanteLegal/constitucionCompañia/{{ $dato->constitucion_compañia}} ' download alt="">Constitución de compañia</a>
                 <a class="btn btn-danger m-1 w-50 p-4" href='representanteLegal/nombramiento/{{ $dato->nombramiento}} ' download alt="">Nombramiento</a>
                 </div>
                 </td>
                </tr>
                @endforeach
            
              
          
          

        </tbody>
        </table>
        </div>
        <div>
          <form  id="fecha_excel" action="{{route('exportDatoslegal.export')}}" name="fecha_excel" class="d-flex flex-column mb-3 w-25 p-4" method="get">
            @csrf
            <div> 
            <label for="dia" class="form-label">ELIJA EL DIA, PARA DESCARGAR EL EXCEL</label>
            
    <input class="form-control" name="dia" id="dia"  type="date">
            </div>
            <button id="btnExcel"  class="btn btn-success m-4 " ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM272.1 264.4L224 344l48.99 79.61C279.6 434.3 271.9 448 259.4 448h-26.43c-5.557 0-10.71-2.883-13.63-7.617L192 396l-27.31 44.38C161.8 445.1 156.6 448 151.1 448H124.6c-12.52 0-20.19-13.73-13.63-24.39L160 344L111 264.4C104.4 253.7 112.1 240 124.6 240h26.43c5.557 0 10.71 2.883 13.63 7.613L192 292l27.31-44.39C222.2 242.9 227.4 240 232.9 240h26.43C271.9 240 279.6 253.7 272.1 264.4zM256 0v128h128L256 0z"/></svg> <span class="text-center">DESCARGAR EXCEL</span> </button><br>
          </form>
        </div>
        <div class="table-responsive">
          <h5>MIEMBRO DE EMPRESA</h5>
        <table class="table table-striped">
        <thead  class="table-dark">
          <tr> 
          <th>N°</th>
          <th>Fecha de creación de registro</th>
          <th>Nombres y Apellidos de miembro</th>
          <th>Nombres y Apellidos de representante</th>
          <th>Numero Documento (Miembro E.)</th>
          <th>Numero Documento (Representante L.)</th>
          <th>Certificado</th>
          <th>Documento de I. (Miembro E.)</th>
          <th>Documento de I. (Representante L.)</th>
          <th>N° Ruc</th>
          <th>Razon Social</th>
          <th>Cargo Representante</th>
          <th>Cargo del miembro</th>
          <th>Departamento que labora</th>
          <th>Motivo uso firma</th>
          <th>Sexo</th>
          <th>Fecha de Nacimiento</th>
          <th>Nacionalidad</th>
          <th>Teléfonos celular</th>
          <th>Correos</th>
          <th>Provincia</th>
          <th>Ciudad</th>
          <th>Dirección</th>
          <th>Tiempo de Vigencia</th>
          <th>Imagenes</th>  
          <th>PDFs</th> 
          </tr>        
        </thead>
        <tbody>
          
         
          
            
            
            @foreach($miembros as $dato)
             
           
              <tr> 
                 
               
                  <td> {{ $dato->id}}</td>
                  <td>{{ $dato->dia_creado}}</td>
                   <td>{{ $dato->nombres_miembro }} {{$dato->apellidos_miembro}}</td>
                  <td>{{$dato->nombres_representante_legal}} {{$dato->apellidos_representante_legal }}</td>
                  <td>{{ $dato->numero_documento_miembro_empresa}}</td>
                  <td>{{ $dato->numero_documento_representante_legal}}</td>
                  <td>{{ $dato->tipo_certificado}}</td>
               <td>{{ $dato->documento_identidad_miembro_empresa}}</td>
               <td>{{ $dato->documento_identidad_representante_legal}}</td>
                  <td>{{ $dato->numero_ruc}}</td>
                  <td>{{ $dato->razon_social}}</td>
                  <td>{{ $dato->cargo_representante}}</td>
                  <td>{{ $dato->cargo_del_miembro}}</td>
                  <td>{{ $dato->departamento_que_labora}}</td>
                  <td>{{$dato->motivo_uso_firma}}</td>
               <td>{{ $dato->sexo}}</td>
                <td>{{ $dato->fecha_nacimiento}}</td>
                 <td>{{ $dato->nacionalidad}}</td>
                  <td><ol><li>{{ $dato->telefono_celular}}</li> <li>{{ $dato->telefono_celular2}}</li></ol> </td>
                  <td><ol><li>{{ $dato->correo}}</li> <li>{{ $dato->correo2}}</li></ol> </td>
                <td>{{ $dato->provincia}}</td>
                  <td>{{ $dato->ciudad}}</td>
                  <td>{{ $dato->direccion}}</td>
                 <td>{{ $dato->vigencia}}</td>
                  <td>
                    <div class="d-flex flex-row mb-3">
                  <a class="btn btn-success m-1" href='miembroEmpresa/anverso/{{ $dato->imagen_anverso}} ' download alt="">Imagen Anverso</a>
                  <a class="btn btn-info m-1" href='miembroEmpresa/reverso/{{ $dato->imagen_reverso}} ' download alt="">Imagen Reverso</a>
                  <a class="btn btn-secondary m-1" href='miembroEmpresa/selfie/{{ $dato->imagen_selfie}} ' download alt="">Imagen Selfie</a>
                  </div>
                  </td>
                 <td>
                   <div class="d-flex flex-row">
                 <a class="btn btn-danger m-1" href='miembroEmpresa/pdf/{{ $dato->pdf}} ' download alt="">PDF RUC</a>
                 <a class="btn btn-danger m-1" href='miembroEmpresa/constitucionCompañia/{{ $dato->constitucion_compañia}} ' download alt="">Constitución de compañia</a>
                 <a class="btn btn-danger m-1" href='miembroEmpresa/nombramiento/{{ $dato->nombramiento}} ' download alt="">Nombramiento</a>
                 <a class="btn btn-danger m-1" href='miembroEmpresa/autorizacion/{{ $dato->autorizacion_representante}} ' download alt="">Autorizacion R.</a>
                 </div>
                </td>
                </tr>
                @endforeach
            
              
          
          

        </tbody>
        </table>
        </div>
        <div>
          <form  id="fecha_excel" action="{{route('exportmiembroempresa.export')}}" name="fecha_excel" class="d-flex flex-column mb-3 w-25 p-4" method="get">
            @csrf
            <div> 
            <label for="dia" class="form-label">ELIJA EL DIA, PARA DESCARGAR EL EXCEL</label>
            
    <input class="form-control" name="dia" id="dia"  type="date">
            </div>
            <button id="btnExcel"  class="btn btn-success m-4 text-center" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM272.1 264.4L224 344l48.99 79.61C279.6 434.3 271.9 448 259.4 448h-26.43c-5.557 0-10.71-2.883-13.63-7.617L192 396l-27.31 44.38C161.8 445.1 156.6 448 151.1 448H124.6c-12.52 0-20.19-13.73-13.63-24.39L160 344L111 264.4C104.4 253.7 112.1 240 124.6 240h26.43c5.557 0 10.71 2.883 13.63 7.613L192 292l27.31-44.39C222.2 242.9 227.4 240 232.9 240h26.43C271.9 240 279.6 253.7 272.1 264.4zM256 0v128h128L256 0z"/></svg> DESCARGAR EXCEL</button><br>
          </form>
        </div>

     
        
      </div>
     <!-- =========================================
            EXPORTAR ARCHIVO EXCEL
     ===================== -->
        
      
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
     <!-- ======ADMIN======== -->
    </div>
  </footer><!-- End Footer -->
  <!-- Modal -->

   
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/lt.js"></script>
  <a class="boton_whatssapp" href="https://wa.me/message/XELEQUOCPROFC1" target="_blank"><img src="/svg_media/whatsapp.png" alt=""></a>
</body>

</html>
