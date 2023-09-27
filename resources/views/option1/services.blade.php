<section class="section section-lg bg-default" id="services">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-xxl-6 text-center">
          <h2>Our Services</h2>
          <p>City Painting offers a wide range of commercial painting services to both existing and new customers. All the information you need has been provided below.</p>
        </div>
      </div>
      <div class="owl-carousel owl-theme-1" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-dots="true">

@foreach ($services as $service)

    <article class="box-service hover-shadow"><a class="figure" href=""><img src="images/services/{{$service['img']}}" alt="{{$service['title']}}" width="370" height="220"/></a>
          <div class="box-content">
            <h4 class="box-title"><a href="">{{$service['title']}}</a></h4>
            <p class="box-text">{{$service['text']}}</p>
          </div>
    </article>

@endforeach

        
        
      </div>
    </div>
  </section>