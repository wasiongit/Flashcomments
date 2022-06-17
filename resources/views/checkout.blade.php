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
                <button class="btn btn-primary" id="commentBtn">
                    Copy All</button>
                </div>
                @unless(count($comment_contents) == 0)
                <div class="my-5">
                    <div class="my-3 text-center">
                        <textarea name="" id="commentbox" cols="70" rows="60" class="form-control" readonly>
                            @foreach ($comment_contents as $comment_content) 
                            {{$loop->index +1 . ". " .$comment_content}}
                            @endforeach
                        </textarea>
                    </div>
                        </div>
                        </div>
                        @else 
                        <p>No Comments found</p>
                        @endunless
                
                
            </div>
        </section>
    <script>
        let commentbox = document.getElementById('commentbox');
        let commentbtn = document.getElementById('commentBtn');

        commentbtn.onclick = function() {
            commentbox.select();
            document.execCommand("copy");
        }
    </script>
<x-footer />