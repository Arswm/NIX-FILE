import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
  $("#submitPhone").on("click", function () {
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
      }
    });
  });

  $("#submitToken").on("click", function () {
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
      success: function (data) {
        console.log('Login successful:', data);
        location.reload();
      },
      error: function (xhr, status, error) {
        console.error('Error verifying OTP:', error);
      }
    });
  });



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

  let formOpener = document.getElementById('FormOpener');
  let otpForm = document.getElementById('otpForm');

  formOpener.addEventListener('click', () => {
    otpForm.classList.remove('hidden');
    console.log('clicked');
  });

});
