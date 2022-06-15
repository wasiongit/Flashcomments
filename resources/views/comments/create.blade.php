<x-header/>
    <section class="my-5">
        <div class="container">
            <h2 class="text-center">Add a New Comment</h2>
            <form method="POST" action="/comments/create">
                @csrf
                <div class="mb-3">
                    <label
                        for="topic_title"
                        class="form-label"
                    >Topic of Comment</label>
                    <input
                        type="text"
                        class="form-control"
                        name="topic_title"
                        value="{{old('topic')}}"/>
                    @error('topic')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label
                        for="language_title"
                        class="form-label"
                    >Comment Language</label>
                    <input
                        type="text"
                        class="form-control"
                        name="language_title"
                        value="{{old('language')}}"/>
                    @error('language')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label
                        for="content"
                        class="form-label"
                    >Comment content</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <button
                        class="btn btn-outline-danger"
                    >
                        Add Comment
                    </button>
                    <a href="/dashboard" class="ms-3 text-black"> Back </a>
                        </div>
                </form>
        </div>
    </section>
<x-footer />