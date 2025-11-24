<x-app-layout>
    <div>
        @include('posts.index')
    </div>
    <div class="relative">
        <div class="z-20 fixed right-10 bottom-10">
            <button>
                <a href="{{ route('posts.create') }}">
                    <img src="{{ asset('build/assets/imagens/botao_criar.png') }}" alt="botao" class="w-15 h-15">
                </a>
            </button>
        </div>
    </div>   
</x-app-layout>
    
