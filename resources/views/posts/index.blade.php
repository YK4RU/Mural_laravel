<ul>
    @foreach ($posts as $post)
        <li>
            <div>
                <img src="{{ url('storage/' . $post->url_da_imagem) }}" alt="socorro">
            </div>
            <div>
                {{ $post->descricao }}
            </div>
        </li>
    @endforeach
</ul>
