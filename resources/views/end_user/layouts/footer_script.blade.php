   <script src="{{asset('vendors/js/jquery.min.js')}}"></script>
   <script src="{{asset('vendors/js/popper.min.js')}}"></script>
   <script src="{{asset('vendors/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('vendors/js/jquery-3.0.0.min.js')}}"></script>
   <script src="{{asset('vendors/js/plugin.js')}}"></script>
   <!-- sidebar -->
   <script src="{{asset('vendors/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{asset('vendors/js/custom.js')}}"></script>
   <!-- javascript -->
   <script src="{{asset('vendors/js/owl.carousel.js')}}"></script>
   <!-- owl carousel -->
   <script>
      $(".owl-carousel").owlCarousel({
         loop: true,
         margin: 30,
         nav: true,
         responsive: {
            0: {
               items: 1,
            },
            600: {
               items: 3,
            },
            1000: {
               items: 4,
            },
         },
      });
   </script>

@yield('js')

</body>

</html>