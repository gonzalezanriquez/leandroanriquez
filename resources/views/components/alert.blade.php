<!-- En resources/views/components/alert.blade.php -->
{{-- 
<div x-data="{ open: true }" x-show="open" class="p-4 {{ $type === 'success' ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' }} rounded border border-solid border-gray-300">
    <p>{{ $message }}</p>
    <button @click="open = false" class="text-sm font-semibold focus:outline-none">Cerrar</button>
</div> --}}


{{-- <div x-data="{ open: true }" x-show="open" class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
    <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
      <div>
        <p>{{ $message }}</p>
    <button @click="open = false" class="text-sm font-semibold focus:outline-none">Cerrar</button>
      </div>
    </div>
  </div> --}}

  <div class="rounded-md bg-[#C4F9E2] p-6">
    <p class="flex items-center text-sm font-medium text-[#004434]">
       <span class="pr-3">
          <svg
             width="20"
             height="20"
             viewBox="0 0 20 20"
             fill="none"
             xmlns="http://www.w3.org/2000/svg"
             >
             <circle cx="10" cy="10" r="10" fill="#00B078" />
             <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M14.1203 6.78954C14.3865 7.05581 14.3865 7.48751 14.1203 7.75378L9.12026 12.7538C8.85399 13.02 8.42229 13.02 8.15602 12.7538L5.88329 10.4811C5.61703 10.2148 5.61703 9.78308 5.88329 9.51682C6.14956 9.25055 6.58126 9.25055 6.84753 9.51682L8.63814 11.3074L13.156 6.78954C13.4223 6.52328 13.854 6.52328 14.1203 6.78954Z"
                fill="white"
                />
          </svg>
       </span>
       Your item has been added successfully
    </p>
 </div>
