<x-master>
    <section class="px-0">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @if (auth()->check())
                    <div class="lg:w-1/5 bg-gray-200 border border-gray-300 rounded-lg p-4">
                        @include('_sidebar-links')
                    </div>
                @endif

                <div class="lg:flex-1 lg:mx-10 w-full z-1" style="max-width: 700px">
                    @include('flash::message')
                    {{ $slot }}
                </div>

                @if (auth()->check())
                    <div class="lg:w-1/5 bg-gray-200 border border-gray-300 rounded-lg p-4">
                        @include('_friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
