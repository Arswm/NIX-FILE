@php use Illuminate\Support\Facades\Cache; @endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'w Title')</title>
  <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.css"
    integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


  <main class="flex flex-wrap min-h-screen">


    <div class="{{ $mainClass ?? '' }}">
      @yield('content')
    </div>

    <aside class="order-1 md:order-2 w-full lg:w-1/4">
      <div class="mx-auto bg-primary-color text-white text-left py-8">
        <div class="w-3/4 mx-auto">
          <h1 class="text-4xl font-bold">
            <a href="{{route('home')}}"> NixFile.com
              <p class="font-medium text-sm">
                change to forever...
              </p>
            </a>
          </h1>
        </div>
      </div>


      <div class="lg:h-full flex flex-col items-center relative gap-4">

        <div class="flex flex-col gap-4 w-3/4  top-1 mb-12 md:sticky">
          @auth

          <div class="flex flex-col rounded-3xl bg-white shadow-lg px-4 py-6 justify-center items-center">
            <img class="mb-4 w-[50px]" src="{{asset('./images/upload-icon.svg')}}" alt="" title="">
            <a class="font-semibold text-xl mb-2" href="#">
              آپلود فایل
            </a>
            <p class="text-primary-color text-xs mb-4 font-medium">
              فایل خود را انتخاب کنید
            </p>

            <div class="container mx-auto mt-0">
              <form action="{{url("/files/store")}}" class="dropzone" id="fileDropzone">
                @csrf <!-- Ensure CSRF token is included if using a framework like Laravel -->
                <div class="fallback">
                  <input name="file" type="file" multiple />
                </div>
              </form>
            </div>
          </div>

          <div class="flex flex-col rounded-3xl bg-white shadow-lg px-4 py-6 justify-center items-center">
            <img class="mb-4 w-[50px]" src="{{asset('./images/key.svg')}}" alt="" title="">
            <a class="font-semibold mb-2 text-xl" href="#"> دانلود فایل </a>
            <a class="border rounded-xl p-4 border-green-200 text-zinc-400" href="#">
              <span class="text-green-300">key: </span> <span>
                class="text-zinc-400">https://www.nixfile.com </span>
            </a>
          </div>

          <div class="flex gap-4 justify-center items-center lg:mb-4">
            <div class="basis-1/4">
              <div class="bg-white rounded-2xl w-full p-2">
                <img class="w-full h-full object-cover position-center" src="{{asset("./images/user.png")}}"
                  alt="">
              </div>
            </div>
{{--            <div>--}}
{{--              <p class="font-semibold text-lg">--}}
{{--                علی بهوندی خوش آمدید!--}}
{{--              </p>--}}
{{--              <a class="text-zinc-400 text-sm" href="#">حساب کاربری شما</a>--}}
{{--            </div>--}}
          </div>

          @endauth
          @guest

          <div class="text-center mt-8">
            <p class="text-xl ">
              برای آپلود فایل <a class="text-secondary-color font-bold login-modal-opener cursor-pointer">وارد </a> شوید
            </p>
          </div>

          @endguest
          <div
            class="
          flex flex-col bg-white shadow-lg border rounded-2xl p-4 w-[90%] mb-12 mt-14 text-center relative
          before:content-[''] before:w-full before:h-full
          before:absolute before:-z-10 before:rounded-2xl before:bg-primary-color
          ">
            <p
              class="text-primary-color pt-8 mb-4 after:content-[' '] after:w-[50px] after:h-[50px] after:absolute after:top-[-1.58rem] after:right-0 after:left-0 after:mx-auto after:rotate-45 after:bg-white after:border-t after:border-l ">
              سخن بزرگان !
            </p>

            <p class="text-wrap">
              @php
              // $sentence = Cache::remember('random_sentence', 60 * 24, function () {
              $sentence = \App\Models\Sentence::inRandomOrder()->first();
              // });
              @endphp
              {{$sentence->text}}
            </p>
          </div>
        </div>


      </div>
    </aside>


  </main>

  <div
    class="overlay login-modal-closer menu-closer hidden bg-white/10 backdrop-blur-md z-10 h-full bg-white fixed top-0 left-0 bottom-0 right-0 m-auto w-full">

  </div>

  <div
    class="login-modal z-20 hidden min-h-[280px] bg-white fixed top-0 left-0 bottom-0 right-0 m-auto w-[90%] lg:w-2/4 h-max shadow-lg rounded-3xl p-12 justify-center items-center flex-col gap-4">

    <span class="login-modal-closer cursor-pointer font-black text-xl text-left justify-self-end self-start">X</span>
    <p id="otpWelcome" class="text-xl font-semibold mb-2">
      لطفا شماره تلفن خود را وارد کنید
    </p>
    <p class="numberNotValid bg-red-200 text-primary-color font-medium py-2 px-4 rounded-md" hidden>

    </p>
    <form class="flex flex-col gap-2 w-full items-center">
      <input type="text" id="phoneInput" class="flex h-8 rounded-3xl w-full border-2 border-secondary-color bg-white outline-none px-4 py-2 text-sm file:border-0 file:bg-transparent
     file:text-sm file:font-medium placeholder:text-zinc-500 disabled:cursor-not-allowed disabled:opacity-50 focus:border-secondary-color
    ">
      <label id="otpEnterCode" for="tokenInput" dir="ltr" class="hidden text-xl font-semibold mb-2 text-center">لطفا کد ۵
        رقمی را وارد نمایید</label>
      <input hidden type="text" id="tokenInput" class="h-8 rounded-3xl w-[320px] border-2 border-secondary-color bg-white outline-none px-4 py-2 text-sm file:border-0 file:bg-transparent
     file:text-sm file:font-medium placeholder:text-zinc-500 disabled:cursor-not-allowed disabled:opacity-50 focus:border-secondary-color
    ">
      <div id="submitPhone"
        class="bg-secondary-color w-max mt-4 rounded-full text-center mx-auto px-12 py-2 text-white cursor-pointer hover:bg-primary-color transition-all">
        ثبت
      </div>
      <div id="submitToken"
        class="bg-secondary-color w-max mt-4 rounded-full text-center mx-auto px-12 py-2 text-white cursor-pointer hover:bg-primary-color transition-all"
        hidden>ورود
      </div>
    </form>
  </div>

  <script>
    let formOpener = document.getElementById('FormOpener');
    let otpForm = document.getElementById('otpForm');

    formOpener.addEventListener('click', () => {
      otpForm.classList.remove('hidden');
      console.log('clicked');
    });
  </script>

  @include('Components.footer')

  <script>
    let plansBtn = document.querySelector('.plans-btn');
    let plansBtnCircle = document.querySelector('.plans-btn-circle')
    let tableMonthly = document.querySelector('.table-monthly')
    let tableYearly = document.querySelector('.table-yearly')
    plansBtn.addEventListener('click', function() {
      plansBtnCircle.classList.toggle('right-[1.25rem]');
      tableMonthly.classList.toggle('hidden');
      tableYearly.classList.toggle('grid');
      tableYearly.classList.toggle('hidden')
    });

    let loginModalOpeners = document.querySelectorAll(".login-modal-opener");
    let loginModal = document.querySelector(".login-modal")
    let loginModalClosers = document.querySelectorAll('.login-modal-closer')
    let overlay = document.querySelector(".overlay");
    loginModalClosers.forEach(closers => {
      closers.addEventListener('click', () => {
        overlay.classList.add('hidden');
        overlay.classList.remove('fixed');
        loginModal.classList.add('hidden');
        loginModal.classList.remove('flex')
      })
    })

    loginModalOpeners.forEach(button => {
      button.addEventListener('click', () => {
        loginModal.classList.remove('hidden');
        loginModal.classList.add('flex');
        overlay.classList.add('fixed');
        overlay.classList.remove('hidden');
      })
    })

    let menu = document.querySelector('.menu');
    let menuOpener = document.querySelectorAll('.menu-opener')
    let menuClosers = document.querySelectorAll('.menu-closer')

    menuOpener.forEach(opener => {
      opener.addEventListener('click', () => {
        menu.classList.add('.right-full')
        menu.classList.remove('-right-full')
        overlay.classList.add('fixed');
        overlay.classList.remove('hidden');
      })
    });

    menuClosers.forEach(mCloser => {
      mCloser.addEventListener('click', () => {
        menu.classList.add('-right-full')
        menu.classList.remove('right-full')
        overlay.classList.remove('fixed');
        overlay.classList.add('hidden');
      })
    })
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

  </script>

  <script>
    $("#submitPhone").on("click", function() {
      let phone = $('#phoneInput').val();
      let $numberNotValid = $('.numberNotValid');


      if (phone.length !== 11 || !phone.startsWith('0')) {
        $numberNotValid.text('شماره وارد شده معتبر نیست').show();
        return;
      }


      $.ajax({
        url: "{{ route('otp.sendPhone') }}",
        type: 'POST',
        dataType: "json",
        data: {
          phone: phone,
          _token: "{{ csrf_token() }}"
        },
        success: function(data) {

          $("#phoneInput").hide();
          $("#tokenInput").show();
          $("#otpWelcome").addClass('hidden');
          $("#otpEnterCode").removeClass('hidden');
          $("#submitPhone").hide();
          $("#submitToken").show();
        },
        error: function(xhr, status, error) {
          console.error('Error sending OTP:', error);
        }
      });
    });

    $("#submitToken").on("click", function() {
      let token = $("#tokenInput").val();

      if (token.length !== 5) {
        alert("رمز وارد شده معتبر نیست.");
        return;
      }


      let phone = $('#phoneInput').val();

      $.ajax({
        url: "{{ route('otp.sendToken') }}",
        type: 'POST',
        dataType: "json",
        data: {
          phone: phone,
          token: token,
          _token: "{{ csrf_token() }}"
        },
        success: function(data) {
          console.log('Login successful:', data);
          location.reload();
        },
        error: function(xhr, status, error) {
          // error coe vared shode inja
        }
      });
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"
    integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function () {
      Dropzone.autoDiscover = false;

      // Create a Dropzone instance for the form with ID 'dropzone'
      {{--var myDropzone = new Dropzone("#fileDropzone", {--}}
      {{--  url: "{{ url('/files/store')}}",--}}
      {{--  paramName: "file", // The name of the file parameter that gets uploaded--}}
      {{--  maxFilesize: 2, // Maximum file size in MB--}}
      {{--  addRemoveLinks: true, // Adds a link to remove the file--}}
      {{--  acceptedFiles: "image/*", // Accept only images (you can adjust this)--}}

      {{--  // Event triggered when a file is successfully uploaded--}}
      {{--  success: function (file, response) {--}}
      {{--    // `file` is the file that was uploaded--}}
      {{--    // `response` is the server response--}}

      {{--    // Example: Displaying an alert--}}
      {{--    alert("File uploaded successfully: " + file.name);--}}

      {{--    // Example: Logging the server response to the console--}}
      {{--    console.log("Server Response:", response);--}}

      {{--    // You can perform other actions here, like updating the UI--}}
      {{--  },--}}

      {{--  // Event triggered when a file is removed--}}
      {{--  removedfile: function (file) {--}}
      {{--    // Example: Logging the file removal--}}
      {{--    console.log("File removed: " + file.name);--}}
      {{--    // You can handle server-side removal here if needed--}}
      {{--  }--}}
      {{--});--}}

      // You can also add other event listeners or configurations here
    });
  </script>


</body>

</html>
