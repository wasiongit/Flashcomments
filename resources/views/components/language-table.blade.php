@props(['language'])
<table class="table table-hover mt-5">
    <tbody>
        <tr class="">
            <td
                class=""
            >
            <span class="fi fi-{{$language->flag_code}} fis"></span> <span>{{$language->title}}</span> 
            </td>
            
            <td
                class=""
            >
                <form action="/languages/{{$language->id}}" method="POST">
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