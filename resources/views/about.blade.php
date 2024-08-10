@extends('Layouts.app')

@php
 $mainClass = 'lg:w-3/4 bg-[#f7f7f7] order-2 md:order-1'
@endphp

@section('title', 'About Page')


@section('content')
    <div class="bg-[#AA1E12] p-8 min-h-[600px] bg-no-repeat bg-cover bg-center relative" dir="rtl" style="background-image: url('{{ asset('about-bg.svg') }}');">

        <div class="flex items-start gap-6">
          <div class="w-2 h-4 bg-white relative z-30 rounded-full before:content-[''] before:absolute  before:top-2 before:rounded-full before:h-4 before:w-full before:bg-white/60 before:z-20 after:content-[''] after:absolute  after:top-4 after:rounded-full after:h-4 after:w-full after:bg-white/30 after:z-20 block">

          </div>
          <h1 class="font-bold text-4xl mb-6 text-white">
            درباره ما
          </h1>
        </div>
        <p class="text-white/60 md:max-w-[80%] mb-8">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون
            بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه
            و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و
            فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها،
            و شرایط سخت را میباشد.
        </p>

        <div class="flex gap-4 items-center pb-16">
            <a href="#" class="red-btn">نیکس فایل</a>
            <a href="#" class="white-btn">تماس با ما</a>
        </div>
    </div>

    <div class="relative">
      <img src="{{asset('images/clouds.png')}}" alt="" title="" class="object-cover w-full py-6  -top-8 md:-top-16 absolute">
    </div>

    <div class="relative mt-12">
      <div class="grid md:grid-cols-3 gap-4 px-8 mb-8 relative z-10">
        <div class="bg-white rounded-2xl shadow-custom">
          <p class="text-primary-color text-4xl text-center pt-4">
            32+
          </p>
          <p class="text-center font-bold text-xl relative py-4 border-b before:content-[''] before:bg-primary-color before:w-[20%] before:absolute before:-bottom-2 before:h-[8px] before:left-0 before:right-0 before:mx-auto">
            حجم فایل های آپلود شده
          </p>
          <p class="mt-6 text-text-color pb-4 px-4 text-center">
            ما مشتری‌های خوشحال بسیاری داریم. امیدواریم استفاده از پنل اس ام اس نیکس فایل، لبخند رضایت شما را نیز به همراه داشته باشد.
          </p>
        </div>
        <div class="bg-white rounded-2xl shadow-custom">
          <p class="text-primary-color text-4xl text-center pt-4">
            32+
          </p>
          <p class="text-center font-bold text-xl relative py-4 border-b before:content-[''] before:bg-primary-color before:w-[20%] before:absolute before:-bottom-2 before:h-[8px] before:left-0 before:right-0 before:mx-auto">
            تعداد فایل های آپلود شده
          </p>
          <p class="mt-6 text-text-color pb-4 px-4 text-center">
            ما مشتری‌های خوشحال بسیاری داریم. امیدواریم استفاده از پنل اس ام اس نیکس فایل، لبخند رضایت شما را نیز به همراه داشته باشد.
          </p>
        </div>
        <div class="bg-white rounded-2xl shadow-custom">
          <p class="text-primary-color text-4xl text-center pt-4">
            32+
          </p>
          <p class="text-center font-bold text-xl relative py-4 border-b before:content-[''] before:bg-primary-color before:w-[20%] before:absolute before:-bottom-2 before:h-[8px] before:left-0 before:right-0 before:mx-auto">
            کاربران آنلاین
          </p>
          <p class="mt-6 text-text-color pb-4 px-4 text-center">
            ما مشتری‌های خوشحال بسیاری داریم. امیدواریم استفاده از پنل اس ام اس نیکس فایل، لبخند رضایت شما را نیز به همراه داشته باشد.
          </p>
        </div>
      </div>

      <div class="flex items-start gap-6 mx-8 mt-14">
        <div class="w-2 h-4 bg-primary-color relative z-30 rounded-full before:content-[''] before:absolute  before:top-2 before:rounded-full before:h-4 before:w-full before:bg-primary-color/60 before:z-20 after:content-[''] after:absolute  after:top-4 after:rounded-full after:h-4 after:w-full after:bg-primary-color/30 after:z-20 block">

        </div>
        <h1 class="font-bold text-2xl mb-6 ">
          سایت های دیگر ما
        </h1>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mx-8 mb-14">
        <a href="https://plusing.ir" class="bg-white shadow-custom p-4 rounded-xl flex justify-center items-center text-center cursor-alias">
          <img src="{{asset('images/plusing-about.webp')}}" alt="" title="" class="filter grayscale hover:filter-none transition-all cursor-alias">
        </a>
        <a href="https://chapzi.com" class="bg-white shadow-custom p-4 rounded-xl flex justify-center items-center text-center cursor-alias">
          <img src="{{asset('images/chapzi-about.webp')}}" alt="" title="" class="filter grayscale hover:filter-none transition-all cursor-alias">
        </a>
        <a href="https://graphicding.com" class="bg-white shadow-custom p-4 rounded-xl flex justify-center items-center text-center cursor-alias">
          <img src="{{asset('images/graphicding-about.webp')}}" alt="" title="" class="filter grayscale hover:filter-none transition-all cursor-alias">
        </a>
        <a href="https://kojabama.com" class="bg-white shadow-custom p-4 rounded-xl flex justify-center items-center text-center cursor-alias">
          <img src="{{asset('images/kojabama-about.webp')}}" alt="" title="" class="filter grayscale hover:filter-none transition-all cursor-alias">
        </a>
        <a href="https://yekpayamak.com" class="bg-white shadow-custom p-4 rounded-xl flex justify-center items-center text-center cursor-alias">
          <img src="{{asset('images/yekpayamak-about.svg')}}" alt="" title="" class="filter grayscale hover:filter-none transition-all cursor-alias">
        </a>
        <a href="https://naring.agency" class="bg-white shadow-custom p-4 rounded-xl flex justify-center items-center text-center cursor-alias">
          <img src="{{asset('images/naring-about.webp')}}" alt="" title="" class="filter grayscale hover:filter-none transition-all cursor-alias">
        </a>
      </div>
    </div>
@endsection
