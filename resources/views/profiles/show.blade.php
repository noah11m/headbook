<x-app>

<header class="mb-6 relative">

    <div class="relative">
        <img
            class="rounded-lg h-48 w-full mb-2"
            src="/images/default-profile-banner.jpg"
            alt=""
        >
        <img
            src="{{$user->avatar}}"
            alt=""
            class="rounded-full mr-2 absolute bottom-0 transform
            -translate-x-1/2 translate-y-1/2 w-2/12"
            style="left: 50%"

            >
    </div>
    {{-- lg:rounded-full lg:mr-2 lg:absolute lg:block sm:hidden --}}
    <div class="flex justify-between items-center mb-6">
        <div style="max-width: 250px">
            <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
            <p class="text-sm text-gray-600">
                Skapat {{ $user->created_at->diffForHumans() }}</p>
        </div>
        <div class="flex justify-between items-center">
            @can ("edit", $user)
            <a href="{{ $user->path("edit") }}"
                class="rounded border border-gray-500 py-1 flex items-center
                px-2 mr-1 text-xs hover:bg-gray-300">
                <svg class="bi bi-gear m-2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                    <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                  </svg>
                Ändra Profil
                </a>
            @endcan
            <x-follow-button :user="$user"></x-follow-button>

        </div>
    </div>
    <p class="text-sm">
        {{$user->description}}
    </p>


</header>

@include('_timeline', [
    "tweets" => $tweets
])
</x-app>
