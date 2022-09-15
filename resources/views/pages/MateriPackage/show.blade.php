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
                      <p>Title</p>
                    </div>
                    <div class="col">
                     <ul class="list-unstyled">
                       <li>{{ $item->title }}</li>
                     </ul>
                    </div>
                    <div class="col-md-6">
                      <p>Link</p>
                    </div>
                    <div class="col">
                     <ul class="list-unstyled">
                       <li>{{ $item->link }}</li>
                     </ul>
                    </div>
                  </div>
                </div>
                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                  <span class="float-right">
                    <a href="{{ route('Materi.index') }}" class="card-link">Kembali
                      <i class="la la-angle-right"></i>
                    </a>
                  </span>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </section>
     
<!-- Striped rows end -->
      </div>
</div>
@endsection