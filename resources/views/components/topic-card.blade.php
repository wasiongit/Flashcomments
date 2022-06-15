@props(['topic'])
<div class="col-sm-6 col-lg-4">
    <div class="card mb-3 p-3">
        <div class="card-body">
            <img class="img-fluid mb-3" src="{{asset('storage/'.$topic->logo)}}" alt="">
            <div>
                <h3 class="card-title mb-2">
                    <a href="/topics/{{$topic->id}}/languages" class="text-black">{{$topic->title}}</a>
                </h3>
                <div>
                    @auth
                    <a class="btn btn-warning" href="/topic/{{$topic->id}}/edit">Edit Topic</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletetopic">
                        <i class="bi bi-trash icon"></i> 
                       Delete
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="deletetopic" tabindex="-1">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deletetopicLabel">Do you want to delete this Topic?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            ...
                          </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <form action="/topics/{{$topic->id}}" method="POST" class="d-inline-flex">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">Yes</button>
                            </form>
                        </div>
                    </div>
                                </div>
                            </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>