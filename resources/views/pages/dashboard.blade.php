@extends('layouts.dashboard')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
      </div>
      <div class="row match-height">
          <div class="col-12">
              <div class="">
                  <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
              </div>
          </div>
      </div>
      <!-- Chart -->
      <!-- eCommerce statistic -->
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card pull-up ecom-card-1 bg-white">
                <div class="card-content ecom-card2 height-150">
                    <h5 class="text-muted dark position-absolute p-1">Admin</h5>
                    <div>
                        <i class="ft-users dark font-large-1 float-right p-1"></i>
                    </div>
                    <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                      <div class="card-body">
                          <h4 class="card-title text-muted dark">....?</h4>
                          <h6 class="card-subtitle text-muted">Jumlah Admin</h6>
                      </div>
                     
                  </div>
                </div>
                
            </div>
        </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
              <div class="card pull-up ecom-card-1 bg-white">
                  <div class="card-content ecom-card2 height-150">
                      <h5 class="text-muted danger position-absolute p-1">Academy Package</h5>
                      <div>
                          <i class="la la-folder danger font-large-1 float-right p-1"></i>
                      </div>
                      <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                        <div class="card-body">
                            <h4 class="card-title text-muted danger">....?</h4>
                            <h6 class="card-subtitle text-muted">Total Package</h6>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card pull-up ecom-card-1 bg-white">
                <div class="card-content ecom-card2 height-150">
                    <h5 class="text-muted success position-absolute p-1">Silabus</h5>
                    <div>
                        <i class="la la-edit success font-large-1 float-right p-1"></i>
                    </div>
                    <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                      <div class="card-body">
                          <h4 class="card-title text-muted success">...?</h4>
                          <h6 class="card-subtitle text-muted">Silabus Item</h6>
                      </div>
                    </div>
                </div>
            </div>
        </div>
         
      </div>
      <!--/ eCommerce statistic -->
      
      <!-- Statistics -->

      <!--/ Statistics -->
              </div>
            </div>
          </div>
          <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection