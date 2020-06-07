<div class="flex p-4 border-b border-b-gray-400 items-center">
    <div class="mr-2 ">
        <a href="{{ route("profile", $tweet->user) }}">
            <img
        src="{{ $tweet->user->avatar }}"
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div class="w-full">
        <div class="">
            <h5 class="font-bold mb-4 inline mr-4 mt-1">
                <a class="inline"
                href="{{ route("profile", $tweet->user) }}">
                    {{ $tweet->user->name }}
                </a>
            </h5>

        </div>
        <p class="text-sm mb-1">
            {{ $tweet->body }}
        </p>
        <p class="mb-2 text-xs text-gray-500">
            {{$tweet->created_at->diffForHumans()}}
        </p>

        <div class="flex items-center justify-between w-full">
            <div>
                <x-like-buttons :tweet="$tweet">
                </x-like-buttons>
            </div>
            <div>
                @if ($tweet->user_id == auth()->user()->id)
                    <form class="inline" action="tweets/{{$tweet->id}}/delete" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="rounded px-2 py-1 text-xs hover:bg-red-700 flex items-center
                        bg-red-500 text-white"
                        type="submit">
                        <svg class="bi bi-trash mr-3" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg>
                        Ta bort</button>
                    </form>
                @endif
            </div>
        </div>

    </div>
</div>

