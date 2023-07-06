<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h3>
                    Generate a new token
                </h3>
                <a href="{{ route('tokens.create') }}">Create token</a>
            </div>

            <div>
                <h1>Meus Tokens</h1>
            </div>

            @foreach($tokens as $token)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">    
                
                <div class="p-6 text-gray-900">
                       
                        <strong>Name</strong>
                        <p>{{ $token->name }}</p>
                        
                        <strong>Data de Criaçao</strong>
                        <p>{{ $token->created_at }}</p>
                        <strong>Expira em</strong>
                        <p>{{ $token->expires_at }}</p>
                        
                        <p class="py-2 text-gray-800">
                            Por razoes de segurança voce nao pode visualizar o token. Caso tenha perdido este token, 
                            aconselhamos que delete este registro e gere um novo token.
                        </p>
                        <div>
                            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="/">Revoke Token</a>

                            <a class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="/" href="">Delete Token</a>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>