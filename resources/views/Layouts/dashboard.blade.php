<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'create post')</title>
  <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
  @vite('resources/css/app.css')
</head>

<body>

<main class="flex flex-wrap min-h-screen">

  <aside class=" w-full lg:w-1/4 flex flex-col">
    <div class="bg-primary-color text-white text-left py-8">
      @include('Components.header')
      <div class="flex itmes-center mx-6 mt-6">
        <h1 class="text-4xl font-bold text-start">
          <a href="{{route('home')}}"> نیکس فایل
            <p class="font-medium text-sm pt-2">

            </p>
          </a>
        </h1>
      </div>
    </div>
    <div>
      <ul class="flex flex-col items-stretch gap-8 justify-center py-4">
        <li>
          <x-nav-link href="/" :active="request()->is('/')">صفحه اصلی</x-nav-link>
        </li>
        <li>
          <x-nav-link href="{{ route('about') }}" :active="request()->is('about')"> درباره ما</x-nav-link>
        </li>
        <li>
          <x-nav-link href="{{ route('contact') }}" :active="request()->is('contanct')"> تماس با ما</x-nav-link>
        </li>
        <li>
          <x-nav-link href="{{ route('ads') }}" :active="request()->is('ads')"> تبلیغات</x-nav-link>
        </li>
      </ul>
    </div>
  </aside>

  <div class="{{ $mainClass ?? '' }}">
    @yield('content')
    @include('Components.footer')
  </div>

</main>

<div
  class="overlay login-modal-closer menu-closer hidden bg-white/10 backdrop-blur-md z-10 h-full bg-white fixed top-0 left-0 bottom-0 right-0 m-auto w-full">

</div>

<div
  class="login-modal z-20 hidden min-h-[280px] bg-white fixed top-0 left-0 bottom-0 right-0 m-auto w-[90%] lg:w-2/4 h-max shadow-custom rounded-3xl p-12 justify-center items-center flex-col gap-4">

  <span class="login-modal-closer cursor-pointer font-black text-xl text-left justify-self-end self-start">X</span>
  <p id="otpWelcome" class="text-xl font-semibold mb-2">
    لطفا شماره تلفن خود را وارد کنید
  </p>
  <p class="numberNotValid bg-red-200 text-primary-color font-medium py-2 px-4 rounded-md" hidden>

  </p>
  <form class="flex flex-col gap-2 w-full items-center" method="POST">
    @csrf
    <input type="text" id="phoneInput" class="flex h-8 rounded-3xl w-full border-2 border-secondary-color bg-white outline-none px-4 py-2 text-sm file:border-0 file:bg-transparent
     file:text-sm file:font-medium placeholder:text-zinc-500 disabled:cursor-not-allowed disabled:opacity-50 focus:border-secondary-color
    ">

    <label id="otpEnterCode" for="tokenInput" dir="ltr" class="hidden text-xl font-semibold mb-2 text-center">لطفا کد ۵
      رقمی را وارد نمایید</label>

    <p class="tokenError text-primary-color bg-red-200 px-4 py-2 font-medium rounded-md" hidden></p>

    </p>
    <input hidden type="text" maxlength="5" id="tokenInput" class="h-8 rounded-3xl w-[320px] border-2 border-secondary-color bg-white outline-none px-4 py-2 text-sm file:border-0 file:bg-transparent
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

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script>
  $("#submitPhone").on("click", function () {
    let phone = $('#phoneInput').val();
    let $numberNotValid = $('.numberNotValid');

    if (phone.length !== 11 || !phone.startsWith('0')) {
      $numberNotValid.text('شماره وارد شده معتبر نیست').show();
      return;
    }

    $numberNotValid.hide();

    $.ajax({
      url: "{{ route('otp.sendPhone') }}",
      type: 'POST',
      dataType: "json",
      data: {
        phone: phone,
        _token: "{{ csrf_token() }}"
      },
      success: function (data) {

        $("#phoneInput").hide();
        $("#tokenInput").show();
        $("#otpWelcome").addClass('hidden');
        $("#otpEnterCode").removeClass('hidden');
        $("#submitPhone").hide();
        $("#submitToken").show();
      },
      error: function (xhr, status, error) {
        console.error('Error sending OTP:', error);
        // ???
      }
    });
  });

  $("#submitToken").on("click", function () {
    let token = $("#tokenInput").val();
    let $tokenError = $(".tokenError");

    if (token.length !== 5) {
      $tokenError.html('رمز وارد شده معتبر نیست').show();

      return
    }

    $tokenError.hide()

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
      success: function (data) {
        console.log('Login successful:', data);
        location.reload();
      },
      error: function (xhr, status, error) {
        console.error('Error sending OTP:', xhr.responseText); // Log the full response text
      }
    });
  });
</script>

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"
  integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function () {
    Dropzone.autoDiscover = false;

    // Create a Dropzone instance for the form with ID 'fileDropzone'
    var myDropzone = new Dropzone("#fileDropzone", {
      url: "{{ url('/files/store')}}",
      paramName: "file", // The name of the file parameter that gets uploaded
      maxFilesize: 1024, // Maximum file size in MB (1024 MB = 1 GB)
      addRemoveLinks: true, // Adds a link to remove the file
      acceptedFiles: "image/*", // Accept only images (you can adjust this)

      // Event triggered when a file is successfully uploaded
      success: function (file, response) {
        // `file` is the file that was uploaded
        // `response` is the server response

        // Example: Displaying an alert
        alert("File uploaded successfully: " + file.name);

        // Example: Logging the server response to the console
        console.log("Server Response:", response);

        // You can perform other actions here, like updating the UI
      },

      // Event triggered when a file is removed
      removedfile: function (file) {
        // Example: Logging the file removal
        console.log("File removed: " + file.name);
        // You can handle server-side removal here if needed
      }
    });

    // You can also add other event listeners or configurations here
  });

</script>

</body>

</html>
