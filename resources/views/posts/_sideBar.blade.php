{{--
Variables disponibles
- $posts ARRAY(Post)
--}}

<!-- Sidebar -->
<div class="col-sm-4 blog-sidebar">
    <h4>Recent Posts</h4>

    <ul class="recent-posts">
        @include('posts._recents', ['posts' => \App\Models\Post::orderBy('created_at', 'DESC')->take(5)->get()])
    </ul>

    <h4>Categories</h4>
    <ul class="blog-categories">
        @include('categories._index', ['categories' => \App\Models\Categorie::orderBy('name', 'ASC')->get()])
    </ul>

</div>
<!-- End Sidebar -->
