@extends('Layouts.app')

@section('title', 'Home Page')

@php
  $mainClass = 'lg:w-3/4'
@endphp
@section('content')

  <div class="w-full bg-no-repeat bg-auto relative bg-[#290F0C]"
       style="background-image: url('{{asset('./images/hero.jpeg')}}')">


    <div class="bg-gradient-to-b from-black to-transparent pt-12 w-full min-h-12">
    </div>

    <div class="lg:mx-4 flex flex-col">


      <div class="w-max mx-auto text-left mb-12">
        <p class="text-[70px] lg:text-[70px] lg:text-start text-center font-black text-white leading-tight mx-auto">
                       <span
                         class="bg-gradient-to-br from-primary-color to-amber-100 text-transparent bg-clip-text">
                               Nix
                           </span>
          File
        </p>
        <p class="text-white text-3xl font-medium">
          ...change to forever
        </p>
      </div>

      <div
        class="w-[90%] mx-auto bg-white/70 rounded-3xl shadow-md backdrop-blur-20 p-8 min-h-[420px] mb-12 backdrop-blur-xl">
        <p class="text-center">preview should come here</p>
        <div id="uploading-images">

        </div>
        <div id="filez"></div>
      </div>

      <div class="w-[90%] mx-auto bg-white/70 rounded-3xl shadow-md backdrop-blur-20 p-8 mb-12 backdrop-blur-xl">
        <p class="text-center mb-8">ads will come here</p>
        <div class="grid lg:grid-cols-4 gap-8">
          <div>
            <img class="w-full object-cover object-center block" src="{{asset('./images/ads.png')}}"
                 alt="">
          </div>
          <div>
            <img class="w-full object-cover object-center block" src="{{asset('./images/ads.png')}}"
                 alt="">
          </div>
          <div>
            <img class="w-full object-cover object-center block" src="{{asset('./images/ads.png')}}"
                 alt="">
          </div>
          <div>
            <img class="w-full object-cover object-center block" src="{{asset('./images/ads.png')}}"
                 alt="">
          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="w-full py-12 lg:py0 bg-[#F7F7F7]">
    <div class="bg-white lg:shadow-lg rounded-2xl lg:mx-12 p-12 mt-12">
      <div class="grid lg:grid-cols-3 gap-8 justify-items-center ">
        <div class="order-last lg:order-first">
          <img class="w-full object-cover object-center block" src="{{asset("./images/shuttle.jpg")}}"
               alt="">
        </div>
        <div
          class="flex flex-col w-full justify-center items-center shadow-md bg-white rounded-2xl lg:shadow-none lg:rounded-none lg:bg-none py-12">
          <p class="text-5xl text-black font-extrabold mb-2 text-center" dir="ltr">
            <span class="text-primary-color">50</span> GB
          </p>
          <p class="font-semibold text-center">
            فضای ابری هدیه ما به شما!
          </p>
          <ul class="mt-12 flex flex-col gap-4">
            <li class="inline-flex gap-4 items-center justify-center">
              <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
              پاسخگویی ۲۴ ساعته سریع و حرفه ای
            </li>
            <li class="inline-flex gap-4 items-center justify-center">
              <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
              پاسخگویی ۲۴ ساعته سریع و حرفه ای
            </li>
            <li class="inline-flex gap-4 items-center justify-center">
              <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
              پاسخگویی ۲۴ ساعته سریع و حرفه ای
            </li>
          </ul>
        </div>
        <div
          class="flex flex-col w-full justify-center items-center shadow-md bg-white rounded-2xl lg:shadow-none lg:rounded-none lg:bg-none py-12">
          <a class="btn bg-primary-color py-3 rounded-2xl px-8 text-white medium text-xl w-max ">
            همین حالا شروع کنید
          </a>

          <ul class="mt-12 flex flex-col gap-4">
            <li class="inline-flex gap-4 items-center justify-center">
              <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
              پاسخگویی ۲۴ ساعته سریع و حرفه ای
            </li>
            <li class="inline-flex gap-4 items-center justify-center">
              <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
              پاسخگویی ۲۴ ساعته سریع و حرفه ای
            </li>
            <li class="inline-flex gap-4 items-center justify-center">
              <i class="fa fa-check bg-primary-color p-2 text-white rounded-full"></i>
              پاسخگویی ۲۴ ساعته سریع و حرفه ای
            </li>
          </ul>
        </div>

      </div>
    </div>

    <div class="bg-white lg:shadow-lg rounded-2xl md:mx-6 lg:mx-12 lg:p-12 mt-12">

      <div
        class="flex flex-col-reverse flex-wrap gap-8 lg:flex-row-reverse lg:gap-0 lg:flex-nowrap justify-between mb-12 p-4">
        <div class="flex justify-evenly items-center gap-2">
          <p>
            ماهانه
          </p>
          <div class="border border-primary-color rounded-3xl w-[55px] p-1 cursor-pointer plans-btn">
            <div
              class="w-6 h-6 bg-primary-color rounded-full hover:bg-primary-color/90 relative transition-all plans-btn-circle">

            </div>
          </div>
          <p>
            سالانه
          </p>
        </div>
        <div class="text-left">
          <p dir="ltr" class="text-5xl font-bold mb-3">
            هزینه
            <span class="text-primary-color">اشتراک ها</span>
          </p>
          <p class="text-zinc-400 font-semibold text-lg text-start">
            پلن های ما
          </p>
        </div>
      </div>

      <div class="grid lg:grid-cols-3 gap-4 table-monthly">
        <div>
          <div
            class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
            <div class="flex justify-between w-full">
              <p class="text-green-400 text-2xl font-medium">
                79,000 تومان
              </p>
              <p dir="ltr" class="text-2xl font-semibold">
                <span class="text-primary-color">72</span> GB
              </p>
            </div>
            <p class="text-zinc-400 text-justify font-medium">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
              گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
            </p>
            <a href=""
               class="bg-primary-color/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-primary-color transition w-full text-center">خرید
              پلن</a>
          </div>
        </div>
        <div>
          <div
            class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
            <div class="flex justify-between w-full">
              <p class="text-green-400 text-2xl font-medium">
                79,000 تومان
              </p>
              <p dir="ltr" class="text-2xl font-semibold">
                <span class="text-primary-color">72</span> GB
              </p>
            </div>
            <p class="text-zinc-400 text-justify font-medium">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
              گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
            </p>
            <a href=""
               class="bg-primary-color/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-primary-color transition w-full text-center">خرید
              پلن</a>
          </div>
        </div>
        <div>
          <div
            class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
            <p class="text-2xl font-bold text-green-400">
              رایگان
            </p>
            <p class="text-zinc-400 text-justify font-medium">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
              گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
            </p>
            <a href=""
               class="bg-green-400/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-green-400 transition w-full text-center">خرید
              پلن</a>
          </div>
        </div>

      </div>

      <div class="lg:grid-cols-3 hidden gap-4 table-yearly">
        <div>
          <div
            class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
            <div class="flex justify-between w-full">
              <p class="text-green-400 text-2xl font-medium">
                799,000 تومان
              </p>
              <p dir="ltr" class="text-2xl font-semibold">
                <span class="text-primary-color">69</span> GB
              </p>
            </div>
            <p class="text-zinc-400 text-justify font-medium">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
              گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
            </p>
            <a href=""
               class="bg-primary-color/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-primary-color transition w-full text-center">خرید
              پلن</a>
          </div>
        </div>
        <div>
          <div
            class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
            <div class="flex justify-between w-full">
              <p class="text-green-400 text-2xl font-medium">
                799,000 تومان
              </p>
              <p dir="ltr" class="text-2xl font-semibold">
                <span class="text-primary-color">69</span> GB
              </p>
            </div>
            <p class="text-zinc-400 text-justify font-medium">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
              گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
            </p>
            <a href=""
               class="bg-primary-color/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-primary-color transition w-full text-center">خرید
              پلن</a>
          </div>
        </div>
        <div>
          <div
            class="bg-white shadow-md rounded-2xl flex flex-col justify-between items-center p-8 gap-6 min-h-[300px]">
            <p class="text-2xl font-bold text-green-400">
              رایگان
            </p>
            <p class="text-zinc-400 text-justify font-medium">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
              گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
            </p>
            <a href=""
               class="bg-green-400/80 text-white font-medium text-xl py-3 px-8 rounded-xl cursor-pointer hover:bg-green-400 transition w-full text-center">خرید
              پلن</a>
          </div>
        </div>

      </div>

    </div>
    <div class="mx-6 lg:mx-12 p-12 mt-12">
      <div class="grid lg:grid-cols-3">
        <div class="flex flex-col justify-center items-center p-4">
          <img src="{{url(asset('images/medal-honor.svg'))}}" alt="" title="">
          <h3 class="font-semibold lg:text-2xl mb-4 mt-2">
            مدال افتخار
          </h3>
          <p class="text-text-color">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
          </p>
        </div>
        <div class="flex flex-col justify-center items-center p-4">
          <img src="{{url(asset('images/all-formats.svg'))}}" alt="" title="">
          <h3 class="font-semibold lg:text-2xl mb-4 mt-2">
            مدال افتخار
          </h3>
          <p class="text-text-color">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
          </p>
        </div>
        <div class="flex flex-col justify-center items-center p-4">
          <img src="{{url(asset('images/cube.svg'))}}" alt="" title="">
          <h3 class="font-semibold lg:text-2xl mb-4 mt-2">
            مدال افتخار
          </h3>
          <p class="text-text-color">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
          </p>
        </div>
      </div>
    </div>

    @if(auth()->check())
      <script>
        function updateFile() {
          try {
            axios.get('{{route('files.index')}}').then(function (e) {
              console.log(e.data)
              let txt = '';
              for (const file of e.data.files) {
                console.log(file);
                txt += `<a href="${file.link}"> ${file.name} </a> <hr>`
              }
              document.querySelector('#filez').innerHTML = txt;
            });
          } catch {

          }
        }
        document.addEventListener('DOMContentLoaded', function () {
          updateFile();
        });
      </script>
  </div>

  @endif

@endsection
