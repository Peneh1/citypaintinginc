<div class="section section-lg text-center" style="background-color: rgba(245,250,254, 0.8);" id="work">
  <h2>Recent Projects</h2>
    <div class="container-fluid ps-0 pe-0">
      <p>Take a look at some of our recent jobs finished this year!</p>
      <div class="row row-12 hoverdir justify-content-center" data-lightgallery="group">

@foreach($portfolios as $portfolio)
        <div class="col-sm-6 col-lg-5 col-xl-3">
          <!-- Thumbnail Modern--><a class="thumbnail thumbnail-modern context-dark hoverdir-item wow {{$portfolio['slide']}}" href="images/portfolio/originals/{{$portfolio['inside_img']}}" data-lightgallery="item" data-hoverdir-target=".thumbnail-modern-caption">
            <div class="thumbnail-modern-figure"><img src="images/portfolio/small/{{$portfolio['outside_img']}}" alt=""  height="340px"/>
            </div>
            <div class="thumbnail-modern-caption">
              
              <p class="thumbnail-modern-text">{{$portfolio['text1']}}</p>
              <p class="thumbnail-modern-author">{{$portfolio['text2']}}</p>
            </div></a>
        </div>
        @endforeach

{{--}}       
        <div class="col-sm-6 col-lg-5 col-xl-3">
          <!-- Thumbnail Modern--><a class="thumbnail thumbnail-modern context-dark hoverdir-item wow slideInUp" href="images/originals/grid-gallery-02-original.jpg" data-lightgallery="item" data-hoverdir-target=".thumbnail-modern-caption">
            <div class="thumbnail-modern-figure"><img src="images/grid-gallery-02-471x340.jpg" alt="" width="471" height="340"/>
            </div>
            <div class="thumbnail-modern-caption">
              <div class="thumbnail-modern-icon">
                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.25" d="M17.601 -1.95818e-06L17.601 9.62601C17.601 19.2231 13.8526 26.421 6.35591 31.2195L4.85208e-07 26.4499C2.67274 24.6576 4.53062 22.7498 5.57364 20.7263C6.61666 18.7606 7.13817 16.1301 7.13817 12.8347L0.293348 12.8347L0.293349 -3.47127e-06L17.601 -1.95818e-06ZM40 0L40 9.62602C40 19.7435 36.2516 27.2014 28.7549 32L22.399 27.2304C25.0066 25.4959 26.8645 23.5014 27.9727 21.2466C29.0809 18.9919 29.635 16.1879 29.635 12.8347L22.7902 12.8347L22.7902 -1.50453e-06L40 0Z" fill="white"></path>
                </svg>
              </div>
              <p class="thumbnail-modern-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet tortor, consequat.</p>
              <p class="thumbnail-modern-author">- Virginia Turner, Client</p>
            </div></a>
        </div>
        <div class="col-sm-6 col-lg-5 col-xl-3">
          <!-- Thumbnail Modern--><a class="thumbnail thumbnail-modern context-dark hoverdir-item wow slideInDown" href="images/originals/grid-gallery-03-original.jpg" data-lightgallery="item" data-hoverdir-target=".thumbnail-modern-caption">
            <div class="thumbnail-modern-figure"><img src="images/grid-gallery-03-471x340.jpg" alt="" width="471" height="340"/>
            </div>
            <div class="thumbnail-modern-caption">
              <div class="thumbnail-modern-icon">
                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.25" d="M17.601 -1.95818e-06L17.601 9.62601C17.601 19.2231 13.8526 26.421 6.35591 31.2195L4.85208e-07 26.4499C2.67274 24.6576 4.53062 22.7498 5.57364 20.7263C6.61666 18.7606 7.13817 16.1301 7.13817 12.8347L0.293348 12.8347L0.293349 -3.47127e-06L17.601 -1.95818e-06ZM40 0L40 9.62602C40 19.7435 36.2516 27.2014 28.7549 32L22.399 27.2304C25.0066 25.4959 26.8645 23.5014 27.9727 21.2466C29.0809 18.9919 29.635 16.1879 29.635 12.8347L22.7902 12.8347L22.7902 -1.50453e-06L40 0Z" fill="white"></path>
                </svg>
              </div>
              <p class="thumbnail-modern-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet tortor, consequat.</p>
              <p class="thumbnail-modern-author">- Virginia Turner, Client</p>
            </div></a>
        </div>
        <div class="col-sm-6 col-lg-5 col-xl-3">
          <!-- Thumbnail Modern--><a class="thumbnail thumbnail-modern context-dark hoverdir-item wow slideInLeft" href="images/originals/grid-gallery-04-original.jpg" data-lightgallery="item" data-hoverdir-target=".thumbnail-modern-caption">
            <div class="thumbnail-modern-figure"><img src="images/grid-gallery-04-471x340.jpg" alt="" width="471" height="340"/>
            </div>
            <div class="thumbnail-modern-caption">
              <div class="thumbnail-modern-icon">
                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.25" d="M17.601 -1.95818e-06L17.601 9.62601C17.601 19.2231 13.8526 26.421 6.35591 31.2195L4.85208e-07 26.4499C2.67274 24.6576 4.53062 22.7498 5.57364 20.7263C6.61666 18.7606 7.13817 16.1301 7.13817 12.8347L0.293348 12.8347L0.293349 -3.47127e-06L17.601 -1.95818e-06ZM40 0L40 9.62602C40 19.7435 36.2516 27.2014 28.7549 32L22.399 27.2304C25.0066 25.4959 26.8645 23.5014 27.9727 21.2466C29.0809 18.9919 29.635 16.1879 29.635 12.8347L22.7902 12.8347L22.7902 -1.50453e-06L40 0Z" fill="white"></path>
                </svg>
              </div>
              <p class="thumbnail-modern-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet tortor, consequat.</p>
              <p class="thumbnail-modern-author">- Virginia Turner, Client</p>
            </div></a>
        </div>
        <div class="col-sm-6 col-lg-5 col-xl-3">
          <!-- Thumbnail Modern--><a class="thumbnail thumbnail-modern context-dark hoverdir-item wow slideInRight" href="images/originals/grid-gallery-05-original.jpg" data-lightgallery="item" data-hoverdir-target=".thumbnail-modern-caption">
            <div class="thumbnail-modern-figure"><img src="images/grid-gallery-05-471x340.jpg" alt="" width="471" height="340"/>
            </div>
            <div class="thumbnail-modern-caption">
              <div class="thumbnail-modern-icon">
                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.25" d="M17.601 -1.95818e-06L17.601 9.62601C17.601 19.2231 13.8526 26.421 6.35591 31.2195L4.85208e-07 26.4499C2.67274 24.6576 4.53062 22.7498 5.57364 20.7263C6.61666 18.7606 7.13817 16.1301 7.13817 12.8347L0.293348 12.8347L0.293349 -3.47127e-06L17.601 -1.95818e-06ZM40 0L40 9.62602C40 19.7435 36.2516 27.2014 28.7549 32L22.399 27.2304C25.0066 25.4959 26.8645 23.5014 27.9727 21.2466C29.0809 18.9919 29.635 16.1879 29.635 12.8347L22.7902 12.8347L22.7902 -1.50453e-06L40 0Z" fill="white"></path>
                </svg>
              </div>
              <p class="thumbnail-modern-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet tortor, consequat.</p>
              <p class="thumbnail-modern-author">- Virginia Turner, Client</p>
            </div></a>
        </div>
        <div class="col-sm-6 col-lg-5 col-xl-3">
          <!-- Thumbnail Modern--><a class="thumbnail thumbnail-modern context-dark hoverdir-item wow slideInUp" href="images/originals/grid-gallery-06-original.jpg" data-lightgallery="item" data-hoverdir-target=".thumbnail-modern-caption">
            <div class="thumbnail-modern-figure"><img src="images/grid-gallery-06-471x340.jpg" alt="" width="471" height="340"/>
            </div>
            <div class="thumbnail-modern-caption">
              <div class="thumbnail-modern-icon">
                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.25" d="M17.601 -1.95818e-06L17.601 9.62601C17.601 19.2231 13.8526 26.421 6.35591 31.2195L4.85208e-07 26.4499C2.67274 24.6576 4.53062 22.7498 5.57364 20.7263C6.61666 18.7606 7.13817 16.1301 7.13817 12.8347L0.293348 12.8347L0.293349 -3.47127e-06L17.601 -1.95818e-06ZM40 0L40 9.62602C40 19.7435 36.2516 27.2014 28.7549 32L22.399 27.2304C25.0066 25.4959 26.8645 23.5014 27.9727 21.2466C29.0809 18.9919 29.635 16.1879 29.635 12.8347L22.7902 12.8347L22.7902 -1.50453e-06L40 0Z" fill="white"></path>
                </svg>
              </div>
              <p class="thumbnail-modern-text">The team of Stract provides true expertise when it comes to interior renovation and project planning.</p>
              <p class="thumbnail-modern-author">- Virginia Turner, Client</p>
            </div></a>
        </div>
        <div class="col-sm-6 col-lg-5 col-xl-3">
          <!-- Thumbnail Modern--><a class="thumbnail thumbnail-modern context-dark hoverdir-item wow slideInDown" href="images/originals/grid-gallery-07-original.jpg" data-lightgallery="item" data-hoverdir-target=".thumbnail-modern-caption">
            <div class="thumbnail-modern-figure"><img src="images/grid-gallery-07-471x340.jpg" alt="" width="471" height="340"/>
            </div>
            <div class="thumbnail-modern-caption">
              <div class="thumbnail-modern-icon">
                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.25" d="M17.601 -1.95818e-06L17.601 9.62601C17.601 19.2231 13.8526 26.421 6.35591 31.2195L4.85208e-07 26.4499C2.67274 24.6576 4.53062 22.7498 5.57364 20.7263C6.61666 18.7606 7.13817 16.1301 7.13817 12.8347L0.293348 12.8347L0.293349 -3.47127e-06L17.601 -1.95818e-06ZM40 0L40 9.62602C40 19.7435 36.2516 27.2014 28.7549 32L22.399 27.2304C25.0066 25.4959 26.8645 23.5014 27.9727 21.2466C29.0809 18.9919 29.635 16.1879 29.635 12.8347L22.7902 12.8347L22.7902 -1.50453e-06L40 0Z" fill="white"></path>
                </svg>
              </div>
              <p class="thumbnail-modern-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet tortor, consequat.</p>
              <p class="thumbnail-modern-author">- Virginia Turner, Client</p>
            </div></a>
        </div>
        <div class="col-sm-6 col-lg-5 col-xl-3">
          <!-- Thumbnail Modern--><a class="thumbnail thumbnail-modern context-dark hoverdir-item wow slideInLeft" href="images/originals/grid-gallery-08-original.jpg" data-lightgallery="item" data-hoverdir-target=".thumbnail-modern-caption">
            <div class="thumbnail-modern-figure"><img src="images/grid-gallery-08-471x340.jpg" alt="" width="471" height="340"/>
            </div>
            <div class="thumbnail-modern-caption">
              <div class="thumbnail-modern-icon">
                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.25" d="M17.601 -1.95818e-06L17.601 9.62601C17.601 19.2231 13.8526 26.421 6.35591 31.2195L4.85208e-07 26.4499C2.67274 24.6576 4.53062 22.7498 5.57364 20.7263C6.61666 18.7606 7.13817 16.1301 7.13817 12.8347L0.293348 12.8347L0.293349 -3.47127e-06L17.601 -1.95818e-06ZM40 0L40 9.62602C40 19.7435 36.2516 27.2014 28.7549 32L22.399 27.2304C25.0066 25.4959 26.8645 23.5014 27.9727 21.2466C29.0809 18.9919 29.635 16.1879 29.635 12.8347L22.7902 12.8347L22.7902 -1.50453e-06L40 0Z" fill="white"></path>
                </svg>
              </div>
              <p class="thumbnail-modern-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet tortor, consequat.</p>
              <p class="thumbnail-modern-author">- Virginia Turner, Client</p>
            </div></a>
        </div>
        {{--}}
      </div>
    </div>
  </div>