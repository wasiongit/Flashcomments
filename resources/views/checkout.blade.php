<x-header />
    <section class="my-5">
        <div class="container">
            <h2 class="text-center">
                Checkout
            </h2>
            <div class="my-3 d-flex gap-2 justify-content-center">
                <h3>Total: {{$comments_num}}</h3>
                <a href="/checkout/list" class="btn btn-danger">Get List</a>
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
                <div class="my-3 text-center">
                    <input type="text" value="{{$comment_content->content }}" id="commentbox" class="commentbox">
                </div> 
                
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