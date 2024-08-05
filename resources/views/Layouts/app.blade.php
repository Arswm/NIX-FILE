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


        <div class=" h-full flex flex-col items-center relative">
            <div class="flex flex-col gap-3 w-3/4  top-1 mb-12 md:sticky">
                <div class="flex flex-col rounded-3xl bg-white shadow-lg px-4 py-6 justify-center items-center">
                    <img class="mb-4 w-[50px]" src="{{asset('./images/upload-icon.svg')}}" alt="" title="">
                    <a class="font-semibold text-xl mb-2" href="#">
                        آپلود فایل
                    </a>
                    <p class="text-primary-color text-xs mb-4 font-medium">
                        فایل خود را انتخاب کنید
                    </p>

                    <div class="container mx-auto mt-0">
                        <h2 class="font-semibold text-center mb-4">File Upload using Dropzone.js</h2>

                    </div>

                </div>

                <div class="flex flex-col rounded-3xl bg-white shadow-lg px-4 py-6 justify-center items-center">
                    <img class="mb-4 w-[50px]" src="{{asset('./images/key.svg')}}" alt="" title="">
                    <a class="font-semibold mb-2 text-xl" href="#"> دانلود فایل </a>
                    <a class="border rounded-xl p-4 border-green-200 text-zinc-400" href="#">
                        <span class="text-green-300">key: </span> <span
                            class="text-zinc-400">https://www.nixfile.com </span>
                    </a>

                </div>

                <div class="flex gap-4 justify-center items-center mb-4">
                    <div class="basis-1/4">
                        <div class="bg-white rounded-2xl w-full p-2">
                            <img class="w-full h-full object-cover position-center" src="{{asset("./images/user.png")}}"
                                 alt="">
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold text-lg">
                            علی بهوندی خوش آمدید!
                        </p>
                        <a class="text-zinc-400 text-sm" href="#">حساب کاربری شما</a>
                    </div>
                </div>


                <div
                    class="flex flex-col bg-white shadow-lg border rounded-2xl p-4 w-full mb-12 text-center relative
                    before:content-[''] before:w-full before:h-full before:absolute before:-z-10 before:rounded-2xl before:bg-primary-color">
                    <p class="text-primary-color pt-8 mb-4 after:content-[' '] after:w-[50px] after:h-[50px] after:absolute after:-top-6 after:right-0 after:left-0 after:mx-auto after:rotate-45 after:bg-white after:border-t after:border-l ">
                        سخن بزرگان !
                    </p>
                    <p id="daily-sentence" class="text-center text-gray-600"></p>
                </div>
            </div>


        </div>
    </aside>

</main>

<footer class="lg:w-3/4 bg-[#f7f7f7]">
    <div class="h-2 bg-primary-color w-full">

    </div>
    <div class="flex flex-wrap lg:flex-nowrap mx-6 gap-8 lg:gap-0 lg:mx-12 py-8 px-12">
        <div class="flex flex-col grow lg:basis-1/4 text-center lg:text-start">
            <p class="text-2xl">
                خدمات مشتریان
            </p>
            <ul class="flex flex-col gap-4 mt-4 text-[#2F2F2F]">
                <li>
                    <a href="#">تماس با ما</a>
                </li>
                <li>
                    <a href="#">بلاگ</a>
                </li>
                <li>
                    <a href="{{route('about')}}">درباره ما</a>
                </li>
                <li>
                    <a href="#">تعرفه ها</a>
                </li>
            </ul>
        </div>
        <div class="lg:basis-2/4 grow">
            <a class="block text-[70px] text-center font-bold" href="{{route('home')}}">
                <span class="text-primary-color">
                    Nix
                </span> File
            </a>

            <p class="text-text-color text-center max-w-[80%] mx-auto">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
            </p>
        </div>

        <div class="flex flex-col grow lg:basis-1/4 justify-between gap-12 lg:gap-0 ">
            <p class="font-semibold text-lg">
                به راحتی از خبرهای جدید مطلع شوید.
            </p>

            <form action="/your-action-url" method="POST" class="flex items-center space-x-2">
                <label for="email" class="bg-[#F3F4F6] rounded-lg flex items-center px-4 py-3">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="ایمیل :"
                        class="bg-transparent outline-none w-full placeholder-gray-400 text-gray-600"
                        required
                    >
                </label>
                <button
                    type="submit"
                    class="bg-secondary-color/80 py-3 px-6 rounded-lg text-white font-semibold shadow-md hover:bg-orange-600 transition-colors"
                >
                    ارسال
                </button>
            </form>


            <div class="flex justify-center lg:justify-end gap-4 text-5xl text-slate-900">
                <a href="#" class="hover:text-primary-color transition-all">
                    <i class="fa-brands fa-square-x-twitter"></i>
                </a>
                <a href="#" class="hover:text-primary-color transition-all">
                    <i class="fa-brands fa-telegram"></i>
                </a>
                <a href="#" class="hover:text-primary-color transition-all">
                    <i class="fa-brands fa-square-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
<script>
    let plansBtn = document.querySelector('.plans-btn');
    let plansBtnCircle = document.querySelector('.plans-btn-circle')
    let tableMonthly = document.querySelector('.table-monthly')
    let tableYearly = document.querySelector('.table-yearly')
    plansBtn.addEventListener('click', function () {
        plansBtnCircle.classList.toggle('right-[1.25rem]');
        tableMonthly.classList.toggle('hidden');
        tableYearly.classList.toggle('grid');
        tableYearly.classList.toggle('hidden')
    });


    document.addEventListener('DOMContentLoaded', function () {
        // Sentences loaded from server-side into JavaScript
        const sentences = @json(config('sentences'));

        // Function to update the sentence
        function updateSentence() {
            const randomIndex = Math.floor(Math.random() * sentences.length);
            const dailySentenceElement = document.getElementById('daily-sentence');
            dailySentenceElement.textContent = sentences[randomIndex];
        }

        // Initial sentence load
        updateSentence();

        // Update sentence every 24 hours
        setInterval(updateSentence, 86400000);
    });
</script>
</body>
</html>
