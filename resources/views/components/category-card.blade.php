@props(['category'])
<div class="col-sm-6 col-lg-4">
    <div class="card mb-3 p-3">
        <div class="card-body">
            <img class="img-fluid mb-3" src="{{asset('storage/'.$category->logo)}}" alt="">
            <div>
                <h3 class="card-title mb-2">
                    <a href="/categories/{{$category->id}}/topics" class="text-black">{{$category->title}} </a>
                </h3>
                <div>
                    @auth
                    <a class="btn btn-warning" href="/categories/{{$category->id}}/edit">Edit Category</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodal">
                        <i class="bi bi-trash icon"></i> 
                       Delete
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="deletemodal" tabindex="-1">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Do you want to delete this Category?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            ...
                          </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <form action="/categories/{{$category->id}}" method="POST" class="d-inline-flex">
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