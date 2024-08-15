<haeder
  class="menu bg-white shadow-lg fixed z-20 top-0 -right-full w-[320px] py-4 flex flex-col gap-12 justify-center items-center h-dvh transition-all">

  <div
    class="text-2xl font-black text-left menu-closer self-end pe-4 ps-4 py-4 cursor-pointer absolute top-0 left-4">X
  </div>
  <div class="bg-red-500 relative w-full h-4 before:content-['']
       before:absolute
        ">
  </div>

  <img src="{{asset('images/logo-menu.webp')}}" alt="" title="">
  <ul class="flex flex-col gap-8 items-center justify-center">
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
</haeder>

<div class="flex gap-2 ps-6">
  <div class="menu-opener bg-white w-10 flex justify-center items-center rounded p-2 cursor-pointer hover:bg-red">
    <img class="w-full object-cover object-center" src="{{asset('images/menu-burger.png')}}" alt="" title="">
  </div>
  @if(Auth::check())
    <a
      class="bg-secondary-color hover:bg-white border border-primary-color hover:border hover:border-secondary-color hover:text-secondary-color py-2 px-4 rounded font-semibold text-lg text-white transition-all"
      href="{{route('otp.logout')}}">خروج</a>
  @else
    <button
      class="login-modal-opener bg-secondary-color hover:bg-white hover:text-slate-700 border border-primary-color hover:border-secondary-color py-2 px-4 rounded font-semibold text-lg text-white transition-all"
    >
      ورود / ثبت نام
    </button>
  @endif
</div>
