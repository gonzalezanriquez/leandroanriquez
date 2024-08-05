@props(['messages'])

@if ($messages)
    <div id="error-message" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold"></strong>
        @foreach ((array) $messages as $message)
            <span class="block sm:inline">{{ $message }}</span>
        @endforeach
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <button type="button" id="close-error" class="text-red-500 hover:text-red-700 focus:outline-none">
                <svg class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title></title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </button>
        </span>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeButton = document.getElementById('close-error');
            const errorMessage = document.getElementById('error-message');

            if (closeButton) {
                closeButton.addEventListener('click', function() {
                    if (errorMessage) {
                        errorMessage.style.display = 'none';
                    }
                });
            }
        });
    </script>
@endif
