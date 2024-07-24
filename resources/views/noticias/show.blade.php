<x-app-layout>
<div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl">

  
      <!-- Content -->
      <div class="space-y-5 md:space-y-8">
        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl dark:text-white text-center">{{ $noticia->title }}</h2>
  
          <figure>
            <img class="w-full object-cover rounded-xl" src="{{ asset($noticia->image) }}" alt="Blog Image">          
          </figure>
    
          <p class="text-lg text-gray-800 dark:text-neutral-200 text-justify">{{ $noticia->content }}</p>
        </div>
  
  
      </div>
    </div>
  </div>
  
  <div class="mt-6 flex justify-center">
    <a href="{{ route('noticias.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        Volver a Noticias
    </a>
</div>
  </div>
</x-app-layout>