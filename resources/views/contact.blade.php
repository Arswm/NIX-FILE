@extends('Layouts.app')

@php
  $mainClass = 'w-full lg:w-3/4 bg-[#f7f7f7]'
@endphp

@section('title', 'About Page')


@section('content')

  <div class="mb-4">

  </div>

  <div class="mx-6">
    <div class="flex flex-wrap md:flex-nowrap mt-12 gap-4 mb-12">
      <div class="lg:w-3/4">
        <h1 class="text-2xl lg:text-4xl font-bold mb-4 text-center lg:text-start">
          راه‌های ارتباطی و
          <span class="text-primary-color">
          آدرس دفتر
        </span>
        </h1>

        <p class="text-text-color">
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
          چاپگرها و متون
          بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
          کاربردهای متنوع با
          هدف بهبود ابزارهای کاربردی می باشد،
        </p>
      </div>

      <div class="bg-white shadow-custom rounded-xl px-8 py-4 lg:w-2/4">
      <span
        class="inline-flex gap-2 items-center justify-center bg-primary-color/20 py-1 px-4 rounded-xl text-primary-color mb-4">
        <i class="fa-solid fa-location-dot text-primary-color"></i>
        آدرس
      </span>
        <p class="text-text-color">
          ایران - تهران - بازار تجریش تکنولوژی، میدان ولیعصر
          ساختمان نمرونان واحد۱۲
        </p>
      </div>
    </div>
    <div class="flex justify-center my-12">
      <img src="{{asset('images/address.svg')}}" alt="">
    </div>
    <div
      class="bg-white shadow-custom rounded-3xl flex justify-center w-full mx-auto flex-wrap mb-12 flex-col-reverse lg:flex-row">
      <div class="p-4 lg:p-8 items-center w-full lg:w-[50%]">
        <h3 class="text-3xl text-center font-bold mb-3">
          عضویت
          <span class="text-primary-color">
          خبرنامه
        </span>
        </h3>
        <p class="text-text-color text-center mb-8">
          در خبرنامه ما عضو شوید و از آخرین قابلیت ها و تخفیف های ویژه نیکس فایل خبردار شوید
        </p>
        <form action="" method="POST">
          @csrf
          <div class="relative mb-6">
            <input
              type="text"
              id="name"
              name="name"
              class="block border px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-full border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-primary-color peer"
              placeholder=" "
              required
              aria-describedby="nameHelp"
            />
            <label
              for="name"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-primary-color peer-focus:dark:text-primary-color peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2
            peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              نام و نام خانوادگی:
            </label>
          </div>

          <div class="relative mb-6">
            <input
              type="email"
              id="email"
              name="email"
              class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-full border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-primary-color peer"
              placeholder=" "
              required
              aria-describedby="emailHelp"
            />
            <label
              for="email"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-primary-color peer-focus:dark:text-primary-color peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2
            peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              ایمیل:
            </label>
          </div>

          <button type="submit"
                  class="py-3 bg-primary-color/90 text-white block w-full rounded-full hover:bg-primary-color transition-all">
            ثبت درخواست تماس
          </button>
        </form>

      </div>
      <div class="flex justify-center lg:justify-start">
        <img class="relative lg:-top-12 p-8 lg:p-0" src="{{asset('images/contact-page.svg')}}" alt="" title="">
      </div>
    </div>
  </div>

@endsection


