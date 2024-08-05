<header dir="rtl">
    <div class="container flex items-center justify-start gap-4">
        <a href="#" class="{{$btnClass || ''}}">
            <i class="fa-regular fa-chess-king"></i>
            خرید اشتراک
        </a>
        <nav class="{{$navClass || ''}}">
            <ul class="flex gap-3">
                <li><a href="{{ url('/') }}" class="hover:underline">صفحه اصلی</a></li>
                <li><a href="{{ url('/about') }}" class="hover:underline">درباره ما </a></li>
            </ul>
        </nav>
    </div>
</header>
