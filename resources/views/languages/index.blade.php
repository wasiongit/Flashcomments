<x-header />
    <section>
        <div class="container">
            <h2>{{$topic->title}}</h2>
            <p class="text-muted">Select how many comments you want per language</p>
            <div class="">
                <form method="POST" action="/comments/search">
                    @csrf
                    @unless(count($languages) == 0)
                    <div class="container-lg my-5">
                        <div class="row">
                            @foreach($languages as $language)
                            <x-comments-form :language="$language"/>
                            @endforeach
                            </div>
                            </div>
                            @else 
                            <p>No Languages found</p>
                            @endunless
                    <div class="mb-3">
                        <button
                            class="btn btn-outline-warning"
                        >
                            Go!
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<x-footer />