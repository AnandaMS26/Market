@extends('layouts.main')

@section('title')
  Silabus Package
@endsection

@section('main-content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Academy Package {{ $AcademyPackage->title }}</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Silabus
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
<!-- Striped rows start -->
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">
                 <x-btn-create :link="route('Academy.Silabus.create',['Academy'=>$AcademyPackage->id])"/>
                </h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                  <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
              </div>
          </div>
          <div class="card-content collapse show">
    <x-card-table>   
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Silabus Title</th>
                        <th scope="col">Silabus Time</th>
                        <th scope="col">Silabus Lesson</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $no =1;?>
                @forelse ($data as $item)
                <tr>
                <th scope="row">{{ $no++ }}</th>
                <th scope="row">{{ $item->silabus_title }}</th>
                <th scope="row">{{ $item->silabus_time }} Minute</th>
                <th scope="row">{{ $item->silabus_Lesson }} Lesson</th>
                <td>
          
                <a href="{{ route('Materi.index',['Academy'=>$item->id]) }}"
                  class="mr-1"><i class="la la-bookmark" title="Silabus"></i>
                </a>
                @can('role','admin')
              <x-btn-edit :link="route('Academy.Silabus.edit',['Academy'=>$AcademyPackage->id,'Silabu'=>$item->id])"/>
              <x-btn-delete :link="route('Academy.Silabus.destroy',['Academy'=>$AcademyPackage->id,'Silabu'=>$item->id])"/>
              @endcan
                </td>
            </tr> 

                @empty
                <tr>
                <td colspan="5" class="text-center py-5" >
                  Data not found
                </td>
                </tr>

                @endforelse
                </tbody>
        </x-card-table>


       
             
          </div>
      </div>
  </div>
</div>
<!-- Striped rows end -->
      </div>
    </div>
</div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection

@section('modal')
  <x-modal-delete/>
@endsection