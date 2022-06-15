<x-header />
<section class="my-5">
    <div class="container">
        <h2 class="text-center">Add a New Language</h2>
        <p class="text-muted">The flag code dictates the flag that would be associated with the language, To know what flag code to add check <a href="https://www.iso.org/obp/ui/#search/code/" target="blank">here</a> </p>
        <form method="POST" action="/languages/create">
            @csrf
            <div class="mb-3">
                <label
                    for="title"
                    class="form-label"
                >Name of Language</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    value="{{old('title')}}"/>
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label
                    for="flag_code"
                    class="form-label"
                >Flag's Alpha 2 ISO code</label>
                <input
                    type="text"
                    class="form-control"
                    name="flag_code"
                    value="{{old('title')}}"/>
                @error('flag_code')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <button
                    class="btn btn-outline-danger"
                >
                    Add Language
                </button>
    
                    <a href="/dashboard" class="ms-3 text-black"> Back </a>
                </div>
            </form>
    </div>
</section>
<x-footer />