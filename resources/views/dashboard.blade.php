<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-row px-8 max-w-7xl mx-auto">
            <aside class="w-1/4 mr-4 bg-white shadow-sm sm:rounded-lg">
                <div>
                    <h1>Menu</h1>
                </div>
                <div>
                    <a class="font-bold text-cyan-700"
                        href="/">
                        Users
                    </a>
                </div>

                <div>
                    <a class="font-bold text-cyan-700"
                        href="/tokens">
                        Tokens
                    </a>
                </div>
            </aside>

            <div class="w-full ml-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
