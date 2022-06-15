<x-header/>
    <section class="my-5">
        <div class="container">
            <h2 class="text-center">Add a New Topic</h2>
            <form method="POST" action="/topics/create" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label
                        for="category_title"
                        class="form-label"
                    >What category should this topic be under?</label>
                    <input
                        type="text"
                        class="form-control"
                        name="category_title"
                        value="{{old('category_title')}}"/>
                    @error('category_title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label
                        for="title"
                        class="form-label"
                    >Name of Topic</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        value="{{old('title')}}"/>
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
        
                <div class="mb-3">
                    <label for="logo" class="form-label">
                         Image for Topic
                        </label>
                        <input
                            type="file"
                            class="form-control"
                            name="logo"
                         />
                         @error('logo')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <button
                                class="btn btn-outline-danger"
                            >
                                Add Topic
                            </button>
        
                            <a href="/dashboard" class="ms-3 text-black"> Back </a>
                        </div>
                </form>
        </div>
    </section>
<x-footer />