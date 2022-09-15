@extends('layouts.main')

@section('title')
  Academy
@endsection

@section('main-content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Academy {{ $item->title }}</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><a href="">Academy</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
     
<!-- Striped rows start -->
    
        <section id="header-footer">
          <div class="row match-height justify-content-left">
            <div class="col-lg-7 col-md-12">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title justify-content-center">Picture</h1>
                </div>
                  <img src="{{ $item->picture }}" >
             
              </div>
            </div>
            <div class="col-lg-5 col-md-12">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title justify-content-center">Other Information</h1>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <p>Mentor Name</p>
                    </div>
                    <div class="col">
                     <ul class="list-unstyled">
                       <li>{{ $item->mentor }}</li>
                     </ul>
                    </div>
                    <div class="col-md-6">
                      <p>Type</p>
                    </div>
                    <div class="col">
                     <ul class="list-unstyled">
                       <li>{{ $item->type }}</li>
                     </ul>
                    </div>
                    <div class="col-md-6">
                      <p>Rating</p>
                    </div>
                    <div class="col">
                     <ul class="list-unstyled">
                       <li>{{ $item->rating }}</li>
                     </ul>
                    </div>
                    <div class="col-md-6">
                      <p>Time</p>
                    </div>
                    <div class="col">
                     <ul class="list-unstyled">
                       <li>{{ $item->time }} hours</li>
                     </ul>
                    </div>
                    <div class="col-md-6">
                      <p>Lesson</p>
                    </div>
                    <div class="col">
                     <ul class="list-unstyled">
                       <li>{{ $item->lesson }} Lesson</li>
                     </ul>
                    </div>  
                    <div class="col-md-6">
                      <p>Level</p>
                    </div>
                    <div class="col">
                     <ul class="list-unstyled">
                       <li>{{ $item->level }}</li>
                     </ul>
                    </div>    
                  </div>
                </div>
                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                  <span class="float-right">
                    <a href="{{ route('AcademyPackage.index') }}" class="card-link">Kembali
                      <i class="la la-angle-right"></i>
                    </a>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title justify-content-center">Description Academy Package</h1>
                </div>
                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <p>Description Detail</p>
                <br>
                <p class="card-text">{{ $item->desc_detail }}</p>
                </div>
                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                  <p>Description Goals</p>
                  <br>
                  <p class="card-text">{{ $item->desc_goal }}</p>
                  </div>
                  <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                    <p>Description Silabus</p>
                    <br>
                    <p class="card-text">{{ $item->desc_syllabus }}</p>
                    </div>
                  
              </div>
            </div>
          </div>
        </section>
     
<!-- Striped rows end -->
      </div>
</div>
@endsection