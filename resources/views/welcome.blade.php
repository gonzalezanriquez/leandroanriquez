

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />


</head>

<body>

        @include('nav.superiornav')
        <main class="mt-5 pt-5 ">
            <div class="headerwelcome ">

                <div class="container-fluid bgheader py-5">
                    <div class="container ">
                        <div class="row mx-md-5 align-items-center text -xs-center  ">
                            <div class="col-12 col-lg-6 px-lg-3 pt-lg-4">
                                <h1 class="titulo animate__animated animate__fadeInDown">Soluciones integrales para tus <span class="highlight ::after">gestiones escolares</span></h1>
                                <p class="bajadaTitulo mt-5 animate__animated animate__fadeIn">Te ayudamos a sistematizar todas tus labores administrativas escolares
                                    brindando una respuesta rapida y sencilla a docentes, alumnos y personal escolar. </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <img class="img-fluid animate__animated animate__fadeInRight" src="{{ asset('img/app2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- TARJETAS PRESENTACIONES -->
<!-- component -->
    <!-- ====== Cards Section Start -->
    <section class="bg-gray-2 dark:bg-dark pb-10  ">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-2">
                
                <div class="w-full px-4 md:w-1/2 xl:w-1/3 ">
                    <div class="mb-10 overflow-hidden duration-300 bg-white rounded-lg dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3 shadow-md">
                        <img src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg"
                            alt="image" class="w-full" />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a href="javascript:void(0)" class="text-dark dark:text-white hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                </a>
                            </h3>
                            <p class="text-base leading-relaxed text-body-color dark:text-dark-6 mb-7">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                                elit. Lorem consectetur adipiscing elit.
                            </p>
                            <a href="javascript:void(0)" class="inline-block py-2 text-base font-medium transition border rounded-full text-body-color hover:border-primary hover:bg-primary border-gray-3 px-7 hover:text-white dark:border-dark-3 dark:text-dark-6">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div
                        class="mb-10 overflow-hidden duration-300 bg-white rounded-lg dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3">
                        <img src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-02.jpg"
                            alt="image" class="w-full" />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a href="javascript:void(0)"
                                    class="text-dark dark:text-white hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                    The ultimate UX and UI guide to card design
                                </a>
                            </h3>
                            <p class="text-base leading-relaxed text-body-color mb-7">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                                elit. Lorem consectetur adipiscing elit.
                            </p>
                            <a href="javascript:void(0)"
                                class="inline-block py-2 text-base font-medium transition border rounded-full text-body-color hover:border-primary hover:bg-primary border-gray-3 px-7 hover:text-white dark:border-dark-3 dark:text-dark-6">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div
                        class="mb-10 overflow-hidden duration-300 bg-white rounded-lg dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3">
                        <img src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-03.jpg"
                            alt="image" class="w-full" />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a href="javascript:void(0)"
                                    class="text-dark dark:text-white hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                    Creative Card Component designs graphic elements
                                </a>
                            </h3>
                            <p class="text-base leading-relaxed text-body-color mb-7">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                                elit. Lorem consectetur adipiscing elit.
                            </p>
                            <a href="javascript:void(0)"
                                class="inline-block py-2 text-base font-medium transition border rounded-full text-body-color hover:border-primary hover:bg-primary border-gray-3 px-7 hover:text-white dark:border-dark-3 dark:text-dark-6">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







        
            <div class="container text-center py-5 reveal">
                <div class="row gy-4 justify-content-center d-flex align-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class=" h-100 bg-white rounded shadow-sm  animate__animated animate__fadeInLeft">
                            <img src="{{ asset('img/1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body py-5 px-4">
                                <h5 class="card-title fw-bold">EFICAZ</h5>
                                <p class="card-text">Creemos en una solución eficaz e integral, que logre abordar tanto las necesidades del alumno, del docente así como también y la dirección académica todo en un mismo espacio
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="h-100 bg-white rounded shadow-sm  animate__animated animate__fadeInUp">
                            <img src="{{ asset('img/2.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body py-5 px-4" >
                                <h5 class="card-title fw-bold">VIRTUAL</h5>
                                <p class="card-text ">Digitalizar los procesos administrativos escolares. Establecer un punto de comunicación digital Alumno - Institución - docente. Brindar información académica general.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="h-100  bg-white rounded shadow-sm  animate__animated animate__fadeInRight">
                            <img src="{{ asset('img/3.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body py-5 px-4 ">
                                <h5 class="card-title fw-bold">ADAPTABLE</h5>
                                <p class="card-text">Armado de estructuras inteligentes y dinamicas para una organización clara y eficiente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
        <!-- TESTIMONIO -->
        <div class=" quote reveal ">
            <div class="container py-5 ">
                    <div class="">
                  <blockquote class=" px-5 mx-lg-5">
                    <p>"La tecnología nos brinda herramientas para enfatizar el enfoque en el verdadero proceso que se encuentra en las aulas y en el aprendizaje. Que la burocracia no debe ser un obstáculo y tenemos que usar todas las herramientas necesarias para ello." </p>
                  </blockquote>
                </div>
                        <div class="quoteAutor">Fernando Gaitan- Director de Proyectos Web - Davinci</div>
        
                </div>
          </div>
        
        <!-- NOSOTROS -->
        
        
        <div class="container text-center py-5 reveal">
            <h3 class="p-5 titulo">Nuestro equipo Creativo</h3>
            <div class="row gy-4 justify-content-center d-flex align-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class=" h-100 bg-white rounded shadow-sm ">
                        <img src="{{ asset('img/leandro.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body py-5 px-4 ">
                            <h5 class="card-title fw-bold">LEANDRO ANRIQUEZ</h5>
                            <p class="card-text">Founder &amp; Frontend Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="h-100 bg-white rounded shadow-sm  animate__animated animate__fadeInUp">
                        <img src="{{{ asset('img/kevin.jpg')}}}" class="card-img-top" alt="...">
                        <div class="card-body py-5 px-4" >
                            <h5 class="card-title fw-bold">KEVIN HERCOG</h5>
                            <p class="card-text">Founder &amp; Backend Developer</p>
                        </div>
                    </div>
                </div>
        
        
        
            </div>
          </div>
        
        
        
        <!-- CONTACT FORM  -->
            <section class="pt-5 contactForm reveal ">
                <div class="col-sm-7 col-lg-5 mx-auto">
                    <div class="container ">
                        <div class="row justify-content-center shadow p-3 mb-5 bg-body rounded">
                            <form action="" method="post" class="border p-5 rounded-2">
        
                                <div class="text-center ">
                                    <img class="img-fluid " src="{{ asset('img/contactForm.png')}}" alt="">
                                    <h2 class=" fw-bold pb-4">CONTACTATE CON NOSOTROS</h2>
                                </div>
                                @csrf
                                @if (session('message'))
                                    <div class="alert alert-success text-center">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <!-- name -->
                                <div class="mb-3">
                                    <label class="form-label" for="name">Nombre y Apellido</label>
                                    <input type="text" name="name" placeholder="Ingrese su nombre y apellido" value="{{ old('name') }}"
                                           class="form-control">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
        
                                <!-- email -->
                                <div class="mb-3">
                                    <label class="form-label" for="email">E-mail</label>
                                    <input type="text" value="{{ old('email') }}" name="email" placeholder="Ingrese su e-mail"
                                           class="form-control">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
        
                                <!-- subject -->
                                <div class="mb-3">
                                    <label class="form-label" for="subject">Asunto</label>
                                    <input type="text" value="{{ old('subject') }}" name="subject" placeholder="Ingrese su asunto"
                                           class="form-control">
                                    @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
        
                                <!-- message -->
                                <div class="mb-3">
                                    <label class="form-label" for="message">Mensaje</label>
                                    <textarea class="form-control" value="{{ old('message') }}" name="message" placeholder="Ingrese su mensaje"></textarea>
                                    @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
        
                                <!-- submit -->
        
        
        
        
                                <div class="d-grid gap-2">
                                    <input type="submit" name="submit" value="Enviar" class="boton btn ">
                                  </div>
        
        
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        



        </main>




</body>
</html>




