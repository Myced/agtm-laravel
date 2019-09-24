<div class="sidebarblock">
    <h3>Categories</h3>
    <div class="divline"></div>
    <div class="blocktxt">
        <ul class="cats">
            @foreach($threadCategories as $category)
            <li>
                <a href="{{ route('forum', ['category', $category->slug]) }}">
                    {{ $category->title }}
                    <span class="badge pull-right">
                        {{ $category->posts->count() }}
                    </span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
