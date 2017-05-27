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
  <div class="">
    <div class="landing-section is-blue flex">
      <div class="landing-section-element">
        <div class="landing-section-logo-wrapper">
          <img src="{{URL::asset('images/general/logo.png') }}" class="landing-section-logo">
        </div>
        <div class="landing-section-name-wrapper">
          <img src="{{URL::asset('images/general/name.png')}}">
        </div>
      </div>
      <div class="landing-section-element">
        <p class="landing-section-welcome-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="landing-section-button-wrapper">
          <button class="landing-section-button">
            COMENZAR
          </button>
        </div>
      </div>
    </div>
    <div class="landing-section">
    </div>
    <script src="{{ URL::asset('js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script>
      var pageHeight = window.innerHeight;

      document.addEventListener('scroll', function(){
        document.body.scrollTop = 0;
      });

      document.addEventListener('wheel', function(e) {
        //console.log(e.deltaY);
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
      }
    </script>
  </div>
</body>
</html>