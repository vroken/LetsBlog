@extends('layouts.main')

@section('container')
<div class="header text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <h1 class="mb-4">Homepage</h1>
          <ul class="list-inline">
            <li class="list-inline-item">Selamat Datang, </li>
            <li class="list-inline-item text-primary"><a href=""></a>About Us</li>
          </ul>
        </div>
      </div>
    </div>
    
    <svg class="header-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
        stroke-miterlimit="10" />
      <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
      <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
        stroke-miterlimit="10" />
    </svg>
  
    
    <svg class="header-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_d)">
        <path class="path"
          d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
        <path
          d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
          stroke="#040306" stroke-miterlimit="10" />
      </g>
      <defs>
        <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse"
          color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
          <feOffset dy="4" />
          <feGaussianBlur stdDeviation="2" />
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
        </filter>
      </defs>
    </svg>
  
    
    <svg class="header-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
        stroke-miterlimit="10" />
      <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
      <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
        stroke-miterlimit="10" />
    </svg>
  
    
    <svg class="header-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
        stroke-width="2" />
    </svg>
  </div>

  <section class="section-sm">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-5 col-md-6 order-2 order-md-1">
          <div class="pr-lg-4 pr-0">
             <h2 class="mb-3">Buat blog pribadi anda dan dapatkan pengalaman membaca yang menarik!</h2>
             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0 order-1 order-md-2">
          <img class="img-fluid w-100" src="img/xvertise.png">
        </div>
      </div>
    </div>
 </section>

 <section class="section-sm">
  <div class="container">
    <div class="row">
        <div class="col-lg text-center mb-5">
           <h2>Frequiently Asked Question About Advertise</h2>
        </div>
    </div>
    <ul class="nav nav-pills nav-pills-icon row text-center justify-content-center" id="myTab" role="tablist">
       <li class="nav-item col-md-3 col-sm-6" role="presentation">
          <a class="nav-link shadow active" id="tab-one" data-toggle="tab" href="#tabOne" role="tab" aria-controls="tabOne" aria-selected="true">
             <img src="img/faq/icon-01.svg" alt="">
             <h4 class="text-uppercase mt-3 d-block">Tentang Blog</h4>
          </a>
       </li>
       </li>
       <li class="nav-item col-md-3 col-sm-6" role="presentation">
          <a class="nav-link shadow" id="tab-three" data-toggle="tab" href="#tabThree" role="tab" aria-controls="tabThree" aria-selected="false">
           <img src="img/faq/icon-03.svg" alt="">
           <h4 class="text-uppercase mt-3 d-block">panduan penggunaan</h4>
        </a>
       </li>
       <li class="nav-item col-md-3 col-sm-6" role="presentation">
          <a class="nav-link shadow" id="tab-four" data-toggle="tab" href="#tabFour" role="tab" aria-controls="tabFour" aria-selected="false">
           <img src="img/faq/icon-01.svg" alt="">
           <h4 class="text-uppercase mt-3 d-block">Pricing & Plans</h4>
        </a>
       </li>
    </ul>
    <div class="row">
        <div class="col-12">
           <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="tabOne" role="tabpanel" aria-labelledby="tab-one">
                 <div class="content p-5">
                    <h4 id="responsibility-of-contributors">Responsibility of Contributors</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in tortor cursus. Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit sed interdum lacus. Lorem quis viverra sed</p>
                    <p>pretium, aliquam sit. Praesent elementum magna amet, tincidunt eros, nibh in leo. Malesuada purus, lacus, at aliquam suspendisse tempus. Quis tempus amet, velit nascetur sollicitudin. At sollicitudin eget amet in. Eu velit nascetur sollicitudin erhdfvssfvrgss eget viverra nec elementum. Lacus, facilisis tristique lectus in.</p>
                    <h4 id="protection-of--personal--information">Protection of  Personal- Information</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in tortor cursus.</p>
                    <p>Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit sed interdum lacus. Lorem quis viverra sed
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat</p>
                    <h4 id="gathering-of-personal-information">Gathering of Personal Information</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in tortor cursus. Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit sed interdum lacus. Lorem quis viverra sed</p>
                    <h4 id="privacy-policy-changes">Privacy Policy Changes</h4>
                    <ol>
                      <li>Sll the Themefisher items are designed to be with the latest , We check all</li>
                      <li>comments that threaten or harm the reputation of any person or organization</li>
                      <li>personal information including, but  limited to, email addresses, telephone numbers</li>
                      <li>Any Update come in The technology  Customer will get automatic  Notification.</li>
                    </ol>
                  </div>
              </div>
              
              <div class="tab-pane fade" id="tabThree" role="tabpanel" aria-labelledby="tab-three">
                 <div class="content p-5">
                    <h4 id="protection-of--personal--information">Protection of  Personal- Information</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in tortor cursus.</p>
                    <p>Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit sed interdum lacus. Lorem quis viverra sed
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat</p>
                    <h4 id="responsibility-of-contributors">Responsibility of Contributors</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in tortor cursus. Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit sed interdum lacus. Lorem quis viverra sed</p>
                    <p>pretium, aliquam sit. Praesent elementum magna amet, tincidunt eros, nibh in leo. Malesuada purus, lacus, at aliquam suspendisse tempus. Quis tempus amet, velit nascetur sollicitudin. At sollicitudin eget amet in. Eu velit nascetur sollicitudin erhdfvssfvrgss eget viverra nec elementum. Lacus, facilisis tristique lectus in.</p>
                    <h4 id="gathering-of-personal-information">Gathering of Personal Information</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in tortor cursus. Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit sed interdum lacus. Lorem quis viverra sed</p>
                    <h4 id="privacy-policy-changes">Privacy Policy Changes</h4>
                    <ol>
                      <li>Sll the Themefisher items are designed to be with the latest , We check all</li>
                      <li>comments that threaten or harm the reputation of any person or organization</li>
                      <li>personal information including, but  limited to, email addresses, telephone numbers</li>
                      <li>Any Update come in The technology  Customer will get automatic  Notification.</li>
                    </ol>
                  </div>
              </div>
              <div class="tab-pane fade" id="tabFour" role="tabpanel" aria-labelledby="tab-four">
                 <div class="content p-5">
                    <h4 id="gathering-of-personal-information">Gathering of Personal Information</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in tortor cursus. Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit sed interdum lacus. Lorem quis viverra sed</p>
                    <h4 id="responsibility-of-contributors">Responsibility of Contributors</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in tortor cursus. Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit sed interdum lacus. Lorem quis viverra sed</p>
                    <p>pretium, aliquam sit. Praesent elementum magna amet, tincidunt eros, nibh in leo. Malesuada purus, lacus, at aliquam suspendisse tempus. Quis tempus amet, velit nascetur sollicitudin. At sollicitudin eget amet in. Eu velit nascetur sollicitudin erhdfvssfvrgss eget viverra nec elementum. Lacus, facilisis tristique lectus in.</p>
                    <h4 id="protection-of--personal--information">Protection of  Personal- Information</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce. Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in tortor cursus.</p>
                    <p>Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit sed interdum lacus. Lorem quis viverra sed
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat</p>
                    <h4 id="privacy-policy-changes">Privacy Policy Changes</h4>
                    <ol>
                      <li>Sll the Themefisher items are designed to be with the latest , We check all</li>
                      <li>comments that threaten or harm the reputation of any person or organization</li>
                      <li>personal information including, but  limited to, email addresses, telephone numbers</li>
                      <li>Any Update come in The technology  Customer will get automatic  Notification.</li>
                    </ol>
                  </div>
              </div>
           </div>
        </div>
    </div>
  </div>
</section>
      
@endsection