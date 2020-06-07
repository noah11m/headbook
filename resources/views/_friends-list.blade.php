<h3 class="font-bold text-lg mb-4 ml-4 font-mono">Följer</h3>
<ul>
    @forelse (auth()->user()->follows as $user)
        <li class="mb-4">
            <div>
                <a class="flex items-center text-sm hover:bg-opacity-0 rounded-full bg-gray-100 border border-gray-300 w-full pr-3"
                href="{{ route("profile", $user) }}">
                    <img
                    src="{{$user->avatar}}"
                    alt=""
                    width="50"
                    height="50"
                    class="rounded-full mr-2">
                    {{ $user->name }}
                </a>
            </div>
        </li>
        @empty
            <li>Inga vänner än</li>
    @endforelse
</ul>
