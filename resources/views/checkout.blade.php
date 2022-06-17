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
                <button onclick="copy()" class="btn btn-primary">
                    Copy All</button>
                </div>
                @unless(count($comment_contents) == 0)
                <div class="my-5">
                    <div class="my-3 text-center">
                        <div class="card p-2 p-md-5">
                            <div class="card-body">
                                <p class="card-text" id="commentbox">
                                    @php foreach ($comment_contents as $comment_content)
                                    echo $comment_content."<br>"@endphp
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
        function copy() {
            /* Get the text field */
            var copyText = document.getElementById("commentbox");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
            }
    </script>
<x-footer />