<x-navbar />
<x-layout>




<!-- Blog Post Container -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">

            <x-display-error/>
            <x-display-message/>
            
            <!-- Blog Post Content -->
            <div class="post-content">
                <img src="{{ Storage::url($post->img) }}" class="card-img-top img-fluid" alt="immagine">

                <!-- Blog Post Title -->
            <h1 class="post-title"> {{ $post->title }}</h1>

            <!-- Blog Post Subtitle -->
            <p class="post-author">Autore: {{ $post->user->name }}</p>
            <h3 class="post-subtitle"> {{ $post->subtitle }}</h3>

                <p>{{ $post->body }}</p>
            </div>

            <!-- Comment Section -->
            
        </div>
    </div>
</div>


<x-footer/>
</x-layout>
