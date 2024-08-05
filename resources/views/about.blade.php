@extends('Layouts.app')

@php
 $mainClass = 'w-3/4'
@endphp
@section('title', 'About Page')


@section('content')
    <div class="bg-[#AA1E12] p-8 bg-no-repeat bg-cover bg-center" dir="rtl" style="background-image: url('{{ asset('about-bg.svg') }}');">
        @include('Components.header', ['btnClass' => 'primary-btn !bg-white/60', 'navClass' => 'text-white flex'])

        <div class="flex">
            <h1 class="text-white font-bold md:text-4xl md:mt-14 mb-4">
                درباره ما
            </h1>
        </div>
        <p class="text-white/60 max-w-[80%] mb-8">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون
            بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه
            و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و
            فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها،
            و شرایط سخت را میباشد.
        </p>
        <div>
            <a href="#" class="red-btn">نیکس فایل</a>
            <a href="#" class="white-btn">تماس با ما</a>
        </div>
    </div>
@endsection
