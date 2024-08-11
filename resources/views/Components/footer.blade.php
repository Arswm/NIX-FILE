<footer class="lg:w-3/4 bg-[#f7f7f7]">
  <div class="h-2 bg-primary-color w-full">

  </div>
  <div class="flex flex-wrap lg:flex-nowrap mx-6 gap-8 lg:gap-0 lg:mx-12 py-2 lg:py-8 px-4 lg:px-12">
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
          <a href="{{route('ads')}}">تبلیغات</a>
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
        <label for="email" class="bg-[#F3F4F6] rounded-lg flex items-center py-3">
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
        <a href="#" class="hover:text-primary-color transition-all pointer">
          <i class="fa-brands fa-square-x-twitter"></i>
        </a>
        <a href="#" class="hover:text-primary-color transition-all pointer">
          <i class="fa-brands fa-telegram"></i>
        </a>
        <a href="#" class="hover:text-primary-color transition-all pointer">
          <i class="fa-brands fa-square-instagram"></i>
        </a>
      </div>
    </div>
  </div>
</footer>
