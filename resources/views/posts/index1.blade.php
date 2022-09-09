<x-base-layout>
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <!-- <div class="card-header">Posts
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('posts.create') }}">New post</a>
                    </span>
            </div> -->
            <div class="card-body" id="postCrudView">
                
            </div>
        </div>
    </div>
</div>
</x-base-layout>