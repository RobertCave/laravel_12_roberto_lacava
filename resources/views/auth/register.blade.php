<x-navbar />
<x-layout>

    
    <div class="row justify-content-center align-content-center">
        <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
            <h1 class="text-center">
                Registrati
            </h1>
            
        </div>
    </div>
    
    
    <x-display-error/>
    <x-display-message/>

    <div class="container  flex mb-5 ">
        <div class="row mt-5  justify-content-center align-content-center">
            <div class="col-12 col-md-6">

                <form 
                class="p-4 rounded shadow"
                action="{{ route('register') }}"
                method="POST"
                > @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name">
                      </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma la Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                      </div>
 
                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form>
            </div>
        </div>
    </div>

</x-layout>
<x-footer/>
