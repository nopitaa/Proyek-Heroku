@extends('layouts.main')

@section('container')
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">

      <div class="section-title">
        <h2>Projects</h2>
        <p>When I was in school, I was assigned to make several projects as a school assignment.
            And here is the project that I have made.</p>
      </div>

      <div class="row portfolio-container">


        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('images/projek1.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Project 1</h4>
                <p>Website Lavina Wedding</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4  portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('images/projek2.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Project 2</h4>
                <p>Website Portofolio</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4  portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('images/projek3.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Project 3</h4>
                <p> Calculator</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4  portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('images/projek4.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Project 4</h4>
                <p>Mobile App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4  portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('images/projek5.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Project 5</h4>
                <p>Web Calculator</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4  portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('images/projek6.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Project 6</h4>
                <p>Inventory Management</p>
              </div>
            </div>
          </div>
    </div>
  </section>
    @endsection