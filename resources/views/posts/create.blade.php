<x-app-layout>
    <div>
        <form action="{{ route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <p>
                <input type="file" name="url_da_imagem" accept="image/*" required>
            </p>
            <p>
                <label for="descrição">Descrição:</label>
                <input type="text" name="descricao" id="descricao">
            </p>
            <p>
                <input type="submit" value="Entrar" id="botaoEntrar">
            </p>
        </form>
    </div>
</x-app-layout>