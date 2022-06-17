<x-header />
    <section class="my-5">
        <div class="container">
            <h2 class="text-center">
                Checkout
            </h2>
            <div class="my-3 d-flex gap-2 justify-content-center">
                <h3>Total: {{$comments_num}}</h3>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
                <div class="d-flex gap-3 justify-content-center">
                <h2 class="">Your Comment List</h2>
                <button class="btn btn-primary" data-clipboard-target="#commentbox" data-clipboard-action="copy">
                    Copy All</button>
                </div>
                @unless(count($comment_contents) == 0)
                <div class="my-5">
                    <div class="my-3 text-center">
                        <div class="card p-2 p-md-5">
                            <div class="card-body">
                                <p class="card-text" id="commentbox">
                                    @foreach ($comment_contents as $comment_content) 
                                        {{$loop->index +1 . ". " .$comment_content}}<br/>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                        </div>
                        </div>
                        @else 
                        <p>No Comments found</p>
                        @endunless
                
                
            </div>
        </section>
    <script>
        let clipboard1 = new ClipboardJS('#commentbox');
    </script>
<x-footer />