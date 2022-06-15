<x-header />
    <section>
        <div class="container">
            <h2>Dashboard</h2>
            <a class="btn btn-danger btn-outline" href="/categories/create">
                Add a new Category
            </a>
            <div class="">
                @unless(count($categories) == 0)
                <div class="container-lg my-5">
                    <div class="row">
                        @foreach($categories as $category)
                        <x-category-card :category="$category"/>
                        @endforeach
                        </div>
                        </div>
                        @else 
                        <p>No Categories found</p>
                        @endunless
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <section class="my-3">
        <div class="container">
            <a class="btn btn-danger btn-outline" href="/topics/create">
                Add a new Topic
            </a>
            <div class="">
                @unless(count($topics) == 0)
                <div class="container-lg my-5">
                    <div class="row">
                        @foreach($topics as $topic)
                        <x-topic-card :topic="$topic"/>
                        @endforeach
                        </div>
                        </div>
                        @else 
                        <p>No Topics found</p>
                        @endunless
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <section class="my-3">
        <div class="container">
            <a class="btn btn-danger btn-outline" href="/languages/create">
                Add a new Language
            </a>
            <div class="">
                @unless(count($languages) == 0)
                <div class="container-lg my-5">
                    <div class="row">
                        @foreach($languages as $language)
                        <x-language-table :language="$language"/>
                        @endforeach
                        </div>
                        </div>
                        @else 
                        <p>No Languages found</p>
                        @endunless
            </div>
        </div>
    </section>
    <hr />
    <section class="my-3">
        <div class="container">
            <h4>Current Comment orders:</h4>
            <div class="">
                @unless(count($languages) == 0)
                <div class="container-lg my-5">
                    <div class="row">
                        @foreach($comments as $comment)
                        <x-comments-table :comment="$comment" :language="$language"/>
                        @endforeach
                        </div>
                        </div>
                        @else 
                        <p>No Comment orders placed</p>
                        @endunless
            </div>
        </div>
    </section>
<x-footer/>