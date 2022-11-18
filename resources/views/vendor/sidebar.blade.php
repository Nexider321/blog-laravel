<div class="col-lg-4">

<div class="card mb-4">
        <div class="card-header">Search</div>
        <form class="card-body" action="/search" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Enter search term..."
                    aria-label="Enter search term..." aria-describedby="button-search" name="query"/>
                <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
            </div>
        </form>
    </div>

    <div class="card mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <ul class="list-unstyled mb-0 row">
                @foreach ($categories as $category)
                    <li class="col-sm-6">
                        <a href="{{ route('category.index', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Tags</div>
        <div class="card-body">
        You can put anything you want inside of these side use, and feature the bootstrap 5 card components!
        </div>
    </div>
</div>
