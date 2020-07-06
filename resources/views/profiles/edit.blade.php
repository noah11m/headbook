<x-app>

<form action="{{ $user->path() }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PATCH")
    <div class="mb-6">
        <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Namn
        </label>
        <input class="border border-gray-400 p-2 w-full"
        type="text" name="name" id="name"
        value="{{ $user->name }}"
        required>
        @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Användarnamn
        </label>
        <input class="border border-gray-400 p-2 w-full"
        type="text" name="username" id="username"
        value="{{ $user->username }}"
        required>
        @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Email
        </label>
        <input class="border border-gray-400 p-2 w-full"
        type="email" name="email" id="email"
        value="{{ $user->email }}"
        required>
        @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-6">
        <div>
            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Avatar
            </label>
            <input class="border border-gray-400 p-2 w-full"
            type="file" name="avatar"
            id="avatar">
            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <img src="{{ $user->avatar }}"
        class="mt-2"
        width="50"
        alt="your avatar" >
    </div>

    <div class="mb-6">
        <label for="description" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Info OM DIG
        </label>
        <textarea class="w-full border border-gray-400 h-24"
        name="description" id="description"> {{ $user->description }}
        </textarea>
        @error('description')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    {{-- <div class="mb-6">
        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Lösenord
        </label>
        <input class="border border-gray-400 p-2 w-full"
        type="password" name="password" id="password" required>
        @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Ange lösenord igen
        </label>
        <input class="border border-gray-400 p-2 w-full"
        type="password" name="password_confirmation" id="password_confirmation" required>
        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div> --}}

    <div class="mb-6">
        <button class="bg-blue-400 text-white mr-4
        rounded py-2 px-4 hover:bg-blue-500"
        type="submit">
            Bekräfta ändringar
        </button>
        <a class="bg-orange-400 text-white
        rounded py-2 px-4 hover:bg-orange-500"
        href="{{$user->path()}}">Tillbaka</a>
    </div>



</form>






</x-app>
