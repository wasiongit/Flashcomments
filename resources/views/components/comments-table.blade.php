@props(['comment'])
<table class="table table-hover mt-5">
    <thead>
        <tr>
          <th scope="col">Topic</th>
          <th scope="col">Language</th>
          <th scope="col">Comment content</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
    <tbody>
        <tr class="">
            <td
                class=""
            >
                <p></p>
            </td>
            <td
            class=""
        >
            <p></p>
        </td>
            <td
                class="d-flex gap-2"
            >
                <a href="/comments/edit" class="btn btn-outline-info">Edit</a>
                <form action="/comments/delete" method="POST">
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