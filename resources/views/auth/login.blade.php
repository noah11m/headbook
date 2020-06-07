<x-master>

<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-300 rounded-lg border-gray-400">
        <div class="font-bold text-lg mb-4">Logga In</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    >Email</label>

                    <input id="email" type="email"
                    class="border border-gray-400 p-2 w-full
                    @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}"
                    required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Lösenord</label>

                    <input id="password" type="password"
                    class="border border-gray-400 p-2 w-full
                    @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <div class="">
                        <input class="mr-1"
                        type="checkbox" name="remember"
                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="text-xs text-gray-700 font-bold" for="remember">
                            Kom ihåg mig.
                        </label>
                    </div>
                </div>

                <div class="mb-1">
                    <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 mr-2 hover:bg-blue-500">
                        Logga In
                    </button>

                    @if (Route::has('password.request'))
                        <a class="text-xs text-gray-700 hover:text-red-600"
                        href="{{ route('password.request') }}">
                            Har du glömt lösenordet?
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
</x-master>
