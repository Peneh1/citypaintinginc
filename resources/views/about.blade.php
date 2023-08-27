@php
  $years = date('Y') - 2005;  
@endphp
<section class="section section-lg bg-sky-blue" id="about">
    <div class="container">
      <div class="row row-30 align-items-md-center">
        <div class="col-md-6 col-xl-5">
          <h2>Who we are</h2>
          <p>As a trusted painting company, we pride ourselves on our extensive qualifications and 
            experience. Our team of skilled painters possesses {{$years}} years of industry expertise and has 
            successfully completed numerous high-end residential and commercial projects. We are fully 
            licensed and insured, adhering to the highest quality and safety standards. Our commitment to 
            customer satisfaction has earned us accolades and positive feedback from our clients.</p> 
           <p> Your satisfaction is our utmost priority. We are dedicated to delivering a painting project that 
            exceeds your expectations. In the unlikely event of any issues arising after completion, we offer 
            a 1-year warranty on our workmanship. Additionally, we stand behind the materials’ quality and 
            will promptly address any product-related concerns. </p>
            <p>We are confident that our expertise, attention to detail, and dedication to customer satisfaction 
            make us the ideal choice for you as the general contractor and your clients as the property 
            owners. </p>


        </div>
        <div class="col-md-6 col-xl-5 offset-xl-2">
          <div class="box-form bg-white">

            
              <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.25" d="M17.601 -1.95818e-06L17.601 9.62601C17.601 19.2231 13.8526 26.421 6.35591 31.2195L4.85208e-07 26.4499C2.67274 24.6576 4.53062 22.7498 5.57364 20.7263C6.61666 18.7606 7.13817 16.1301 7.13817 12.8347L0.293348 12.8347L0.293349 -3.47127e-06L17.601 -1.95818e-06ZM40 0L40 9.62602C40 19.7435 36.2516 27.2014 28.7549 32L22.399 27.2304C25.0066 25.4959 26.8645 23.5014 27.9727 21.2466C29.0809 18.9919 29.635 16.1879 29.635 12.8347L22.7902 12.8347L22.7902 -1.50453e-06L40 0Z" fill="black"></path>
              </svg>


          <p style="font-size:36px;"> "At City Painting, <b>Customer service</b> isn’t just a department, it's the entire company."</p>
          </div>

          <div class="row row-lg">
            <div class="col-6">
              <!--Counter-->
              <div class="box-counter">
                <div class="box-counter-main h1">
                  <div class="counter">100</div><span class="counter-postfix">%</span>
                </div>
                <div class="box-counter-divider"></div>
                <p class="box-counter-title">Client Satisfaction</p>
              </div>
            </div>
            <div class="col-6">
              <!--Counter-->
              <div class="box-counter">
                <div class="box-counter-main h1">
                  <div class="counter">{{$years}}</div>
                </div>
                <div class="box-counter-divider"></div>
                <p class="box-counter-title">Years of Client Satisfaction</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>