<x-navbar />
<x-layout>

    <x-display-error/>
    <x-display-message/>

    <div class="row justify-content-center align-content-center">
        <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
            <h1 class="text-center">
                Aggiungi un post per il blog
            </h1>
            

        </div>
    </div>

    <div class="container">
        <div class="row mt-1">
            <div class="col-12 col-md-6 justify-content-center">
 
                <form 
                method="POST" 
                action="{{ route('post.store') }}"
                enctype="multipart/form-data"
                >
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo dell'articolo</label>
                        <input name="title" type="text" class="form-control" value="{{ old('title') }}" id="title" >
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Breve descrizione dell'articolo</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{ old('subtitle') }}">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'Articolo</label>
                        <textarea name="body" class="form-control" id="body" cols="20" rows="8" >{{ old('body') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine copertina</label>
                        <input name="img" type="file" class="form-control" id="img" >
                    </div>

                    <button type="submit" class="btn btn-primary">Crea post</button>
                </form>

            </div>
        </div>
    </div>


    <x-footer/>
</x-layout>
