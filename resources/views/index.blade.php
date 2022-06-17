<x-header/>
    <section>
        <div class="container">
            <h2 class="text-center">Welcome to <span class="h2 text-danger">Flash<span class="h2 text-warning">comments</span></span></h2>
            @include('partials._search')
            <p class="text-muted">Pick a category to get started</p>
            <div>
                @unless(count($categories) == 0)
                    <div class="container-lg my-5">
                        <div class="row">
                            @foreach($categories as $category)
                            <x-category-card :category="$category"/>
                            @endforeach
                            @else 
                            <p>No Categories found</p>
                        </div>
                    </div>
                @endunless
            </div>
        </div>
    </section>
<x-footer />