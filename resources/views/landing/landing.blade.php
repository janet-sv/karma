<!DOCTYPE html>
<html>
<head>
  <title>+ KARMA</title>
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  <style type="text/css">
    body {
      transform: translate3d(0px, 0px, 0px);
      transition: all 400ms ease;
    }
  </style>
</head>
<body>
  <div class="landing">
    <div class="landing-phone-container">
      <img src="{{ URL::asset('images/landing/i-phone.png') }}" alt="iPhone" class="landing-phone" />
      <img src="{{ URL::asset('images/landing/beneficios.png') }}" alt="iPhone Content" class="landing-phone-content" />
    </div>
    <div class="landing-header">
      <div class="landing-header-element">
        <div class="landing-header-logo">
          <div class="landing-header-logo-wrapper">
            <img src="{{URL::asset('images/general/logo.png') }}" class="landing-header-logo-image">
          </div>
          <div class="landing-header-name-wrapper">
            <img src="{{URL::asset('images/general/name.png')}}">
          </div>
        </div>
      </div>
      <div class="landing-header-element">
        <a href="{{ route('login') }}" class="landing-header-login-link">
          Login
        </a>
      </div>
    </div>
    <div class="landing-section is-blue">
      <p class="landing-section-text is-big">Ayudar nunca fue tan fácil.</p>
      <p class="landing-section-text is-little">Obtén beneficios mientras ayudas a generar un cambio.</p>
      <div class="landing-section-app-stores">
        <a href="">
          <img src="{{ URL::asset('images/landing/google.png') }}" alt="Google Store" class="landing-section-app-store-image" />
        </a>
        <a href="">
          <img src="{{ URL::asset('images/landing/ios.png') }}" alt="App Store" class="landing-section-app-store-image" />
        </a>
      </div>
      <img src="{{ URL::asset('images/landing/bottom-blue.png') }}" class="landing-section-bottom" />
    </div>
    <div class="landing-section has-extra-margin">
      <p class="landing-section-text is-normal">
        Elimina todos los obstáculos para realizar acciones beneficas. Encuentra la campaña para ti y participa.
      </p>
    </div>
    <div class="landing-section is-gray">
      <p class="landing-contact-us-title">

      </p>
    </div>

    <script src="{{ URL::asset('js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script>
      /*var pageHeight = window.innerHeight;

      document.addEventListener('scroll', function(){
        document.body.scrollTop = 0;
      });

      document.addEventListener('wheel', function(e) {
        if(e.deltaY > 0) {
          scrollDown();
        } else {
          scrollUp();
        }
       }
      );

      function scrollDown() {
        document.body.style.transform = 'translate3d(0px, -'+ pageHeight + 'px, 0px)';
      }

      function scrollUp() {
        document.body.style.transform = 'translate3d(0px, 0px, 0px)';
      }*/
    </script>
  </div>
</body>
</html>