<x-header />
    <section>
        <div class="container">
            <h2>Select a topic below</h2>
        </div>
        <section class="my-3">
            <div class="container">
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
    </section>
<x-footer />