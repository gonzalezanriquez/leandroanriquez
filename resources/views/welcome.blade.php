
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">


  <div class="bg-transparent pt-16 pr-4 pb-16 pl-4 flex mr-auto ml-auto flex-col items-center relative lg:flex-row
  lg:py-32 xl:py-48 md:px-8 max-w-screen-2xl">
<div class="flex justify-center items-center w-full h-full overflow-hidden lg:w-1/2 lg:justify-end lg:bottom-0
    lg:left-0 lg:items-center">
  <img src="https://res.cloudinary.com/macxenon/image/upload/v1626953574/Group_1_zrmcxj.png" class="object-contain
      object-top lg:w-auto lg:h-full w-full h-auto"/>
</div>
<div class="mr-auto ml-auto flex justify-end relative max-w-xl xl:pr-32 lg:max-w-screen-xl">
  <div class="mb-16 lg:pr-5 lg:max-w-lg lg:mb-0">
    <div class="mb-6 max-w-xl">
      <p class="inline-block pt-1 pr-3 pb-1 pl-3 mb-4 text-pink-200 bg-pink-500 rounded-2xl uppercase text-xs
          font-semibold tracking-wider">Brand new</p>
      <div class="text-3xl font-bold tracking-tight text-gray-900 max-w-lg sm:text-4xl sm:leading-none mb-6">
        <p class="text-black text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">Gestiones Educativas</p>
        {{-- <p class="inline-block text-black text-3xl font-bold tracking-tight mr-2 sm:text-4xl
            sm:leading-none">Soluciones</p>
        <p class="inline-block text-blue-500 text-md font-bold tracking-tight sm:text-4xl
            sm:leading-none">Creativas</p> --}}
      </div>
      <p class="text-gray-700 text-base md:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
    </div>
    <div class="flex flex-col md:flex-row">
      <input type="text" fontfamily="Raleway" placeholder="Full Name" class="md:mr-2 focus:border-blue-700
          focus:outline-none focus:shadow-outline flex-grow transition duration-200 appearance-none text-black
          bg-gray-100 font-normal w-full h-12 text-xs rounded-md pt-3 pr-4 pb-3 pl-4 mb-2 border-2 shadow-sm
          border-gray-300"/>
      <input type="text" fontfamily="Raleway" placeholder="Email Address" class="md:mr-2 focus:border-blue-700
          focus:outline-none focus:shadow-outline flex-grow transition duration-200 appearance-none text-black
          bg-gray-100 font-normal w-full h-12 text-xs rounded-md pt-3 pr-4 pb-3 pl-4 mb-2 border-2 shadow-sm
          border-gray-300"/>
    </div>
    <div class="flex items-center mt-4 mr-0 mb-0 ml-0">
      <button fontfamily="Arial" class="transition duration-200 hover:bg-blue-900 focus:shadow-outline
          focus:outline-none bg-blue-700 text-white inline-flex font-semibold tracking-wide text-medium h-12 shadow-md
          items-center justify-center pr-6 pl-6 mr-6 rounded-lg">Get Started</button>
      <a href="#" class="text-black items-center inline-flex font-semibold pt-2 pr-2 pb-2 pl-2 transition-colors
          duration-200 hover:text-blue-300">
        <p>Learn More</p>
      </a>
    </div>
  </div>
</div>
</div>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
       


        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
              <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
              <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                  Gestiones Educativas. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                </div>
              </div>
              <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Data to enrich your online business</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                  <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                  <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                </div>
              </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
              <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
          </div>

</body>

</html>



















