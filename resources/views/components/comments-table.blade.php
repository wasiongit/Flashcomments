@props(['comment'])
<table class="table table-hover mt-5">
    <thead>
        <tr>
          <th scope="col">Comment Language Id</th>
          <th scope="col">Number of Comments</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
    <tbody>
        <tr class="">
            <td
                class=""
            >
                <p>{{($comment->language_id)}}</p>
            </td>
            <td
            class=""
        >
            <p>{{($comment->comments_num)}}</p>
        </td>
            <td
                class="d-flex gap-2"
            >
                <a href="/orders/{{$comment->id}}" class="btn btn-outline-info">Fill order</a>
                <form action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger">
                        <i class="bi bi-trash icon"></i> 
                       Delete
                    </button>
                </form>
            </td>
        </tr>

    </tbody>
</table>