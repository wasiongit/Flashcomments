<x-header />
    @foreach ($comments as $comment)
        <section>
            <div class="container">
                <h2 class="text-center">Fill Comment order</h2>
                <div class="my-3">
                    <p>Comment order information:</p>
                    <p>Id: {{$comment->id}}</p>
                    <p>Language_id : {{$comment->language_id}}</p>
                    <p>Topic_id : {{$comment->topic_id}}</p>
                    <p>Number of comments user wants : {{$comment->comments_num}}</p>
                </div>
                
                <form action="/order/{{$comment->id}}" method="POST">
                    @csrf
                    <div class="my-3 text-center">
                        <textarea name="comment" id="" cols="100" rows="10" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-info">Fill order</button>
                </form>
                
            </div>
        </section>
    @endforeach
<x-footer />