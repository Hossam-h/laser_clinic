@extends('end_user.layouts.master')   

  
@section('content')

   <!-- carusal section start -->
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="d-block w-100 carusal_image" height="500px" src="{{asset('vendors/images/ليزر.png')}}" alt="First slide" />
         </div>
         <div class="carousel-item">
            <img class="d-block w-100 carusal_image" height="500px" src="{{asset('vendors/images/ليزر.png')}}" alt="First slide" />
         </div>
         <div class="carousel-item">
            <img class="d-block w-100 carusal_image" height="500px" src="{{asset('vendors/images/ليزر.png')}}" alt="First slide" />
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>
   <!-- carusal section end -->


   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div><img src="{{asset('vendors/images/جهاز.png')}}" class="about_img" /></div>
            </div>
            <div class="col-md-6">
               <h1 class="about_taital" id="about_us">عنا</h1>
               <div class="border"></div>
               <p class="about_text">
                  المساعدة في الحد الأدنى من التمرين ، ممارسة التمرينات الشحمية
                  المساعدة في الحد الأدنى من التمرين ، ممارسة التمرينات
                  الشحميةالمساعدة في الحد الأدنى من التمرين ، ممارسة التمرينات
                  الشحمية المساعدة في الحد الأدنى من التمرين ، ممارسة التمرينات
                  الشحمية
               </p>
               <div class="read_bt_1"><a href="#">Read More</a></div>
               <div class="image_1"><img src="{{asset('vendors/images/images.png')}}" /></div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- product section start -->
   <div class="product_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="product_taital" id="clinics">العيادات</h1>
               <p class="product_text">
                  في النشر والتصميم الجرافيكي ، يعد  نصًا نائبًا يستخدم بشكل شائع لتوضيح الشكل المرئي لمستند أو شكل محرف دون الاعتماد على محتوى ذي معنى. يمكن استخدام كعنصر نائب قبل توفر النسخة النهائية. ويكيبيديا

               </p>
            </div>
         </div>

         <div class="row" class="cards_clinics" dir="rtl">
           
            <a href="profile.html">
               <div class="card cards_clinics" style="width: 18rem; border: 1px solid">
                  <img src="{{asset('vendors/images/img-2.png')}}" style="text-align: center !important" class="card_image_tilte" width="50px"
                     height="50px" alt="Card image cap" />
                  <div class="card-body">
                     <h5 class="card-title" style="text-align: center">
                        استشاري ليزر جلد
                     </h5>
                     <p class="card-text">
                        استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر
                        جلد استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر جلد
                     </p>
                  </div>
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item">
                        التقييمات
                        <img src="{{asset('vendors/images/stars.jpg')}}" class="card_image" width="50px" height="50px" alt="Card image cap" />
                        <span>5</span>
                     </li>
                  </ul>

                  <div class="location">
                     <p class="card-text">
                        استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر جلد
                     </p>
                  </div>

                  <div class="card-body" style="display: flex">
                     <div style="margin: 0px 2px; line-height: 14px; text-align: center" class="price_phone">
                        <p>
                           <img src="{{asset('vendors/images/icons8-banknotes-96.png')}}" class="card_image" width="50px" height="50px"
                              alt="Card image cap" />
                        </p>
                        <p>سعر الجلسة</p>
                        <br />
                        <p>23424</p>
                     </div>

                     <div style="margin: 0px 2px; line-height: 14px; text-align: center" class="price_phone">
                        <p>
                           <img src="{{asset('vendors/images/icons8-iphone-se-52.png')}}" class="card_image" width="50px" height="50px"
                              alt="Card image cap" />
                        </p>
                        <p>سعر الجلسة</p>
                        <br />
                        <p>23424</p>
                     </div>
                  </div>

                  <a href="">
                     <div class="bookin">
                        <p>احجز معنا</p>
                     </div>
                  </a>
               </div>
            </a>

            <a href="profile.html">
               <div class="card cards_clinics" style="width: 18rem; border: 1px solid">
                  <img src="{{asset('vendors/images/img-2.png')}}" style="text-align: center !important" class="card_image_tilte" width="50px"
                     height="50px" alt="Card image cap" />
                  <div class="card-body">
                     <h5 class="card-title" style="text-align: center">
                        استشاري ليزر جلد
                     </h5>
                     <p class="card-text">
                        استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر
                        جلد استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر جلد
                     </p>
                  </div>
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item">
                        التقييمات
                        <img src="{{asset('vendors/images/stars.jpg')}}" class="card_image" width="50px" height="50px" alt="Card image cap" />
                        <span>5</span>
                     </li>
                  </ul>

                  <div class="location">
                     <p class="card-text">
                        استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر جلد
                     </p>
                  </div>

                  <div class="card-body" style="display: flex">
                     <div style="margin: 0px 2px; line-height: 14px; text-align: center" class="price_phone">
                        <p>
                           <img src="{{asset('vendors/images/icons8-banknotes-96.png')}}" class="card_image" width="50px" height="50px"
                              alt="Card image cap" />
                        </p>
                        <p>سعر الجلسة</p>
                        <br />
                        <p>23424</p>
                     </div>

                     <div style="margin: 0px 2px; line-height: 14px; text-align: center" class="price_phone">
                        <p>
                           <img src="{{asset('vendors/images/icons8-iphone-se-52.png')}}" class="card_image" width="50px" height="50px"
                              alt="Card image cap" />
                        </p>
                        <p>سعر الجلسة</p>
                        <br />
                        <p>23424</p>
                     </div>
                  </div>

                  <a href="">
                     <div class="bookin">
                        <p>احجز معنا</p>
                     </div>
                  </a>
               </div>
            </a>

            <a href="profile.html">
               <div class="card cards_clinics" style="width: 18rem; border: 1px solid">
                  <img src="{{asset('vendors/images/img-2.png')}}" style="text-align: center !important" class="card_image_tilte" width="50px"
                     height="50px" alt="Card image cap" />
                  <div class="card-body">
                     <h5 class="card-title" style="text-align: center">
                        استشاري ليزر جلد
                     </h5>
                     <p class="card-text">
                        استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر
                        جلد استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر جلد
                     </p>
                  </div>
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item">
                        التقييمات
                        <img src="{{asset('vendors/images/stars.jpg')}}" class="card_image" width="50px" height="50px" alt="Card image cap" />
                        <span>5</span>
                     </li>
                  </ul>

                  <div class="location">
                     <p class="card-text">
                        استشاري ليزر جلد استشاري ليزر جلد استشاري ليزر جلد
                     </p>
                  </div>

                  <div class="card-body" style="display: flex">
                     <div style="margin: 0px 2px; line-height: 14px; text-align: center" class="price_phone">
                        <p>
                           <img src="{{asset('vendors/images/icons8-banknotes-96.png')}}" class="card_image" width="50px" height="50px"
                              alt="Card image cap" />
                        </p>
                        <p>سعر الجلسة</p>
                        <br />
                        <p>23424</p>
                     </div>

                     <div style="margin: 0px 2px; line-height: 14px; text-align: center" class="price_phone">
                        <p>
                           <img src="{{asset('vendors/images/icons8-iphone-se-52.png')}}" class="card_image" width="50px" height="50px"
                              alt="Card image cap" />
                        </p>
                        <p>سعر الجلسة</p>
                        <br />
                        <p>23424</p>
                     </div>
                  </div>

                  <a href="">
                     <div class="bookin">
                        <p>احجز معنا</p>
                     </div>
                  </a>
               </div>
            </a>


            <div class="more_clinics_btn">
                 <a href="clinics.html"> رؤية المزيد ..</a>            
            </div>
      
         </div>
      </div>
   </div>

   <!-- product section start -->
   <!-- client section start -->
   <div class="client_section layout_padding banner_bg">
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <h1 class="client_taital">أراء العملاء</h1>
            </div>
            <div class="col-md-9">
               <div class="client_box">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <p class="client_text">
                              المساعدة في الحد الأدنى من فينيام ، تمارين الخنجر ، تمرين
                              العمل في أولامكو المساعدة في الحد الأدنى من فينيام ،
                              تمارين الخنجر ، تمرين العمل في أولامكو المساعدة في الحد
                              الأدنى من فينيام ، تمارين الخنجر ، تمرين العمل في أولامكو
                              المساعدة في الحد الأدنى من فينيام ، تمارين الخنجر ، تمرين
                              العمل في أولامكو المساعدة في الحد الأدنى من فينيام ،
                              تمارين الخنجر ، تمرين العمل في أولامكو
                           </p>
                           <div class="client_main">
                              <div class="client_left">
                                 <div class="client_img">
                                    <img src="{{asset('vendors/images/client-img.png')}}" />
                                 </div>
                              </div>
                              <div class="client_right">
                                 <div class="quick_icon">
                                    <img src="{{asset('vendors/images/quick-icon.png')}}" />
                                 </div>
                                 <h6 class="client_name">انور مصطفي</h6>
                              </div>
                           </div>
                        </div>

                        
                        <div class="carousel-item ">
                           <p class="client_text">
                              المساعدة في الحد الأدنى من فينيام ، تمارين الخنجر ، تمرين
                              العمل في أولامكو المساعدة في الحد الأدنى من فينيام ،
                              تمارين الخنجر ، تمرين العمل في أولامكو المساعدة في الحد
                              الأدنى من فينيام ، تمارين الخنجر ، تمرين العمل في أولامكو
                              المساعدة في الحد الأدنى من فينيام ، تمارين الخنجر ، تمرين
                              العمل في أولامكو المساعدة في الحد الأدنى من فينيام ،
                              تمارين الخنجر ، تمرين العمل في أولامكو
                           </p>
                           <div class="client_main">
                              <div class="client_left">
                                 <div class="client_img">
                                    <img src="{{asset('vendors/images/client-img.png')}}" />
                                 </div>
                              </div>
                              <div class="client_right">
                                 <div class="quick_icon">
                                    <img src="{{asset('vendors/images/quick-icon.png')}}" />
                                 </div>
                                 <h6 class="client_name">انور مصطفي</h6>
                              </div>
                           </div>
                        </div>


                        <div class="carousel-item ">
                           <p class="client_text">
                              المساعدة في الحد الأدنى من فينيام ، تمارين الخنجر ، تمرين
                              العمل في أولامكو المساعدة في الحد الأدنى من فينيام ،
                              تمارين الخنجر ، تمرين العمل في أولامكو المساعدة في الحد
                              الأدنى من فينيام ، تمارين الخنجر ، تمرين العمل في أولامكو
                              المساعدة في الحد الأدنى من فينيام ، تمارين الخنجر ، تمرين
                              العمل في أولامكو المساعدة في الحد الأدنى من فينيام ،
                              تمارين الخنجر ، تمرين العمل في أولامكو
                           </p>
                           <div class="client_main">
                              <div class="client_left">
                                 <div class="client_img">
                                    <img src="{{asset('vendors/images/client-img.png')}}" />
                                 </div>
                              </div>
                              <div class="client_right">
                                 <div class="quick_icon">
                                    <img src="{{asset('vendors/images/quick-icon.png')}}" />
                                 </div>
                                 <h6 class="client_name">انور مصطفي</h6>
                              </div>
                           </div>
                        </div>

                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- client section end -->

   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container-fluid">
         <h1 class="contact_taital" id="contact_us">تواصل معنا</h1>
         <div class="contact_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="image_7"><img src="{{asset('vendors/images/الليزر-في-العيادات-لازالة-الشعر-1024x683.jpg')}}" /></div>
               </div>
               <div class="col-md-6">
                  <div class="mail_section_1">
                     <input type="text" class="mail_text" placeholder="الاسم" name="Your Name" />
                     <input type="text" class="mail_text" placeholder="الهاتف" name="Phone Number" />
                     <input type="text" class="mail_text" placeholder="البريد الالكتورني" name="Email" />
                     <textarea class="massage-bt" placeholder="الوصف" rows="5" id="comment" name="Massage"></textarea>
                     <div class="send_bt"><a href="#">ارسال</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->

@endsection