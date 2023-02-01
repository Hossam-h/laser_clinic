<!-- header section start -->
@include('end_user.layouts.head')
<body>
 <div class="header_section">
      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="logo" href="#"><img src="{{asset('vendors/images/logo.png')}}" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.html">الرئيسية</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link"  href="#about_us">عنا</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#clinics">العيادات</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="#contact_us">تواصل معنا</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <div class="login_menu">
                     <ul>
                        <li><a href="#">Login</a></li>
                        <li>
                           <a href="#"><img src="{{asset('vendors/images/user-icon.png')}}" /></a>
                        </li>
                        <li>
                           <a href="#"><img src="{{asset('vendors/images/trolly-icon.png')}}" /></a>
                        </li>
                        <li>
                           <a href="#"><img src="{{asset('vendors/images/search-icon.png')}}" /></a>
                        </li>
                     </ul>
                  </div>
               </form>
            </div>
         </nav>
      </div>
   </div>
   <!-- header section end -->
