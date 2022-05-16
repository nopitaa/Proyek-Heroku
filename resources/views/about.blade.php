@extends('layouts.main')

@section('container')
<section id="about" class="about">
<div class="container" data-aos="zoom-in" data-aos-delay="100">
      <div class="section-title">
        <h2>About Me</h2>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <img src="images/{{ $gambar }}" alt="{{$nama }}" class="img-fluid" width="600px" weight="600px">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3>{{$nama}}</h3>
          <p>
            {{$isi}}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$email}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$hp}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$kota}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$lahir}}</span></li>
            </ul> 
            </div>
          </div>
        </div>
      </div>

      <section id="skills" class="skills section-bg">
  
          <div class="section-title">
            <h2>Skills</h2>
            <p>MY SPECIAL EXPERTISE
            </p>
          </div>
  
          <div class="row skills-content">
  
            <div class="col-lg-6">
  
              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">C++ <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
            </div>
  
            <div class="col-lg-6">
  
              <div class="progress">
                <span class="skill">PHP <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">Laravel <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">Kotlin <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Illustrator <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
            </div>
  
          </div>
  
        </div>
      </section>

  </section>
    @endsection