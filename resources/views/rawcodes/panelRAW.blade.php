@foreach ($categories as $category)
    <li class="nav__item nav__item--has-sub"><a href="{{ route('category.show', $category->slug) }}"
            class="nav__link">{{ $category->name }}</a>
        <div class="nav__sub">
            <div class="container d-flex item-center flex-wrap container--nav">
                @foreach ($category->children as $childCategory)
                    <a href="{{ route('category.show', $childCategory->slug) }}"
                        class="nav__link">{{ $childCategory->name }}</a>
                @endforeach
            </div>
        </div>
    </li>
@endforeach




















@if (auth()->user()->role === 'admin')
    <li class="item-li  @if (request()->is('panel/users') || request()->is('panel/users/*')) is-active @endif"><a href="{{ route('users.index') }}">
            <img src="{{ asset('images/button/crud/user.png') }}" alt="Logo" style="height: 20px;">
            کاربران
        </a></li>
    <li class="item-li  @if (request()->is('panel/categories') || request()->is('panel/categories/*')) is-active @endif"><a href="{{ route('categories.index') }}">
            <img src="{{ asset('images/button/crud/list.png') }}" alt="Logo" style="height: 20px;">
            دسته بندی ها
        </a></li>
@endif
@if (auth()->user()->role === 'admin')
    <li class="item-li @if (request()->is('panel/posts') || request()->is('panel/posts/*')) is-active @endif"><a href="{{ route('posts.index') }}">
            <img src="{{ asset('images/button/crud/book.png') }}" alt="Logo" style="height: 20px;">
            مقالات
        </a></li>
@endif
@if (auth()->user()->role === 'admin')
    <li class="item-li  @if (request()->is('panel/comments') || request()->is('panel/comments/*')) is-active @endif"><a href="{{ route('comments.index') }}">
            <img src="{{ asset('images/button/crud/comment.png') }}  "> نظرات
        </a></li>
@endif




















@if (auth()->user()->role === 'user')
    <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10">
        <p>تعداد سفارشات</p>
        <p> 'bounes code!' </p>
    </div>
    <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10">
        <p>تعداد تیکت ها</p>
        <p>'bounes code!' </p>
    </div>
@endif
