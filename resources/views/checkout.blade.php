<x-header />
    <section class="my-5">
        <div class="container">
            <h2 class="text-center">
                Checkout
            </h2>
            <div class="my-3 d-flex gap-2 justify-content-center">
                <h3>Total: @php
                    if (count($comments)) {
                        echo count($comments);
                    } else {
                        echo null;
                    }
                @endphp</h3>
                <a href="/checkout/list" class="btn btn-danger">Get List</a>
            </div>
        </div>
    </section>
<x-footer />