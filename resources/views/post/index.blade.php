<x-navbar />
<x-layout>


    <header class="blog-header py-5">
        <h1>Tutti i post </h1>
        <p>Questo è solo un esercizio in PHP su laravel e database.</p>
    </header>
    
    
    
    <!-- loop dei post -->
    <div class="container mt-05">
        <div class="row g-4">
            
            <x-display-error/>
            <x-display-message/>

            @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <a href="{{ route('post.show', $post->id) }}" ><img src="{{ Storage::url($post->img) }}" class="card-img-top" alt="immagine"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->subtitle }}</p>
                            <p class="card-text">Autore: {{ $post->user->name }}</p>

                            <div class="d-flex gap-3 align-items-start">
                            <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary btn-sm">Leggi tutto</a>
                            
                            @auth
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning btn-sm">Modifica</a>
                            <form action="{{ route('post.delete', $post->id) }}" method="POST"> 
                                <button class="btn btn-danger btn-sm"> Elimina</button>
                                @csrf @method('DELETE')

                            </form>
                            </div>
                            @endauth
                    
                        </div>
                    </div>  
    
                </div>
                
            @endforeach

        </div>
    </div>

    <x-footer/>
</x-layout>
