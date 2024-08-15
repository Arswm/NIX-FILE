@extends('Layouts.app')

@php
  $mainClass = 'w-full lg:w-3/4 bg-[#f7f7f7]'
@endphp

@section('title', 'About Page')

@section('content')

  <div class="my-12 mx-6 lg:mx-12">
  </div>

  <h1 class="text-3xl lg:text-[55px] font-black text-center mb-12">
    تبلیغات در
    <span class="text-primary-color">
      نیکس فایل
    </span>
  </h1>

  <div class="grid lg:grid-cols-2 gap-4 mb-12">

    <div class="rounded-3xl overflow-hidden w-[90%] mx-auto shadow-lg">
      <div class="bg-[#2F2B42]">
        <p class="p-4 text-2xl text-center text-white py-6 font-semibold">
          استاندارد
        </p>
      </div>
      <div class="p-4">
        <div class="flex justify-between text-lg mx-8 py-6 border-b">
          <p class="text-text-color">
            کارمزد شارژ :
          </p>
          <p class="text-zinc-900">
            ۸ درصد
          </p>
        </div>

        <div class="flex justify-between text-lg mx-8 py-6 border-b">
          <p class="text-text-color">
            کارمزد مدیریت :
          </p>
          <p class="text-zinc-900">
            ۸ درصد
          </p>
        </div>

        <div class="flex justify-between text-lg mx-8 py-6 border-b">
          <p class="text-text-color">
            مبلغ نهایی :
          </p>
          <p class="text-primary-color">
            ۸ درصد
          </p>
        </div>

        <div class="flex justify-center text-lg mx-8 py-6">
        <a href="#" class="bg-primary-color/20 text-primary-color py-3 mt-8 px-12 rounded-full"> خرید تبلیغات</a>
        </div>

      </div>
    </div>

    <div class="rounded-3xl overflow-hidden w-[90%] mx-auto shadow-lg">
      <div class="bg-primary-color">
        <p class="p-4 text-2xl text-center text-white py-6 font-semibold">
          پیشرفته
        </p>
      </div>
      <div class="p-4">
        <div class="flex justify-between text-lg mx-8 py-6 border-b">
          <p class="text-text-color">
            کارمزد شارژ :
          </p>
          <p class="text-zinc-900">
            ۸ درصد
          </p>
        </div>

        <div class="flex justify-between text-lg mx-8 py-6 border-b">
          <p class="text-text-color">
            کارمزد مدیریت :
          </p>
          <p class="text-zinc-900">
            ۸ درصد
          </p>
        </div>

        <div class="flex justify-between text-lg mx-8 py-6 border-b">
          <p class="text-text-color">
            مبلغ نهایی :
          </p>
          <p class="text-primary-color">
            ۸ درصد
          </p>
        </div>

        <div class="flex justify-center text-lg mx-8 py-6 ">
          <a href="#" class="bg-primary-color text-white py-3 mt-8 px-12 rounded-full"> خرید تبلیغات</a>
        </div>

      </div>
    </div>

  </div>
@endsection


