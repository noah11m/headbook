<x-app>
<div >
    <h1 class="font-bold text-4xl mx-4 mb-2 text-blue-500">
        Aktiva Profiler
    </h1>
    @forelse ($users as $user)
        <div class="items-center mb-4 flex justify-between border-gray-300 border p-1 rounded">
            <div>
            <a href="{{$user->path()}}">
                <img
                    class="mr-4 rounded-full w-1/12 inline"
                    src="{{$user->avatar}}"
                    alt="{{$user->username}}s avatar">
            </a>
            <a class="" href="{{$user->path()}}">
                <h4 class="font-bold inline items-center">{{ "@" . $user->username}}</h4>
            </a>
            </div>
                <x-follow-button :user="$user"></x-follow-button>

        </div>
        <div class="">

        </div>
    @empty
        Det finns inga användare att visa.
    @endforelse
        {{$users->links()}}
</div>


</x-app>
