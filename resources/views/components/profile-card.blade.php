<!-- component -->
<div class="">

    <div class="">
        <div class="bg-white shadow-xl rounded-lg py-3">
            <div class="photo-wrapper p-2">
                <img class="w-32 h-32 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="{{ $user->name }}">
            </div>
            <div class="p-2">
                <h3 class="text-center text-xl text-gray-900 font-medium leading-7">{{ $user->name }} {{ $user->lastname }}</h3>
                <div class="text-center text-gray-400 text-xs font-semibold">
                    <p>{{ $user->email }}</p>
                </div>
                <div class="text-center my-3">
                    <a class="inline-flex px-2 py-1 text-xs  leading-5 text-black bg-amber-400  rounded hover:bg-amber-500" href="{{route('profile.edit')}}">Editar Perfil</a>
                </div>
    
            </div>
        </div>
    </div>
    
    </div>
