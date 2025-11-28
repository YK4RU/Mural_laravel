<x-app-layout>
    <div>
        <form action="{{ route('posts.update', $posts->id) }}" method="post">
            @csrf
            @method('PUT')
            <p>
                <input type="text" name="descricao" id="descricao" value="{{ $posts->descricao }}">
            </p>
            <p>
                <input type="submit" value="Atualizar" id="botaoAtualizar">
            </p>
        </form>
    </div>
</x-app-layout>