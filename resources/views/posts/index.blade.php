<ul>
    @foreach ($posts as $post)
        <li>
            <div class="border-4 rounded-md border-red-700"> 
                <div><a href="{{ route('posts.edit', $post->id) }}">Edit</a></div>
                <div>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
                <div>
                    <img src="{{ url('storage/' . $post->url_da_imagem) }}" alt="socorro" width="300" height="400" class="rounded-md">
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('build/assets/imagens/comentario.png') }}" alt="perfil" class="w-10 h-10">
                    </a>
                </div>
                <div class="object-top-right">
                    {{ $post->descricao }}
                </div>
            </div>
        </li>
    @endforeach
</ul>
