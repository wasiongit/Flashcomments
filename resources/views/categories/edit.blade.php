<x-header />
<section>
    <div class="container mt-5">
        <header class="text-center">
            <h2 class="h2">
                Edit Category
            </h2>
            <p class="mb-4 text-muted">Edit: {{$category->title}}</p>
        </header>
    
        <form method="POST" action="/categories/{{$category->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label"
                >Category Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    value="{{$category->title}}"
                />
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">
                     Image for Category
                    </label>
                    <input
                        type="file"
                        class="form-control"
                        name="logo"
                     />
                     <div>
                        <img 
                        class="img-fluid my-3 text-center ms-5 w-50" 
                        src="{{asset('storage/'.$category->logo)}}"
                        alt="">
                    </div>
                     @error('logo')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                    </div>
    
                    <div class="mb-3">
                        <label
                            for="description"
                            class="form-label"
                        >
                            <div class="mb-3">
                                <button
                                    class="btn btn-warning"
                                >
                                    Edit Category
                                </button>
    
                                <a href="/categories/{{$category->id}}" class="ms-3 text-black"> Back </a>
                            </div>
                        </form>
                    </div>
</section>

<x-footer />