<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div>
        <h1 class="font-bold text-green-700 text-lg">Token Created</h1>
        <p>Copy and save the token in a secure place.</p>
        
        <div class='bg-green-200 px-2 py-4 flex'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-700 font-bold mr-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
            </svg>

            <p class="text-green-700">
                {{ $token }}
            </p>
        </div>

        <div>
            <p>
                This may be the last time you see this token, so save it in a secure place to be used as
                <i>Bearer Token</i> in your API requests.  
            </p>
        </div>
        <div class="my-8">
            <h1 class="font-bold">Listar meus tokens</h1>
            <a class="text-cyan-500" href="{{ route('tokens.index') }}">
                Meus Tokens
            </a>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>