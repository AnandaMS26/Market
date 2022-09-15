@extends('layouts.main')

@section('title')
  Academy Package
@endsection


@section('main-content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Academy</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Academy
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
                @can('role','admin')
                <x-btn-create :link="route('AcademyPackage.create')"/>
                @endcan
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
                              <th scope="col">Title</th>
                              <th scope="col">Mentor Name</th>
                              <th scope="col">Type</th>
                              <th scope="col">Lesson</th>
                              <th scope="col">Level</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                    <?php $no = $data->firstItem();?>
                     @forelse ($data as $item)
                     <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <th scope="row">{{ucwords( $item->title) }}</th>
                        <td scope="row">{{ucwords( $item->mentor) }}</td>
                        <th scope="row">{{ $item->type }} </th>
                        <td scope="row">{{ $item->lesson }}  Lesson</td>
                        <td scope="row">{{ $item->level }}</td>
                      
                        <td>
                        
                        
                         <a href="{{ route('Academy.Silabus.index',['Academy'=>$item->id]) }}"
                          class="mr-1"><i class="la la-bookmark" title="Silabus"></i>
                         </a>
                      <x-btn-show :link="route('AcademyPackage.show',['AcademyPackage'=>$item->id])"/>

                      @can('role','admin')
                      <x-btn-edit :link="route('AcademyPackage.edit',['AcademyPackage'=>$item->id])"/>
                        <x-btn-delete :link="route('AcademyPackage.destroy',['AcademyPackage'=>$item->id])"/> 
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


        <div class="d-flex justify-content-end mr-2">
            {{ $data->appends(['search' => request()->search])->links('pagination') }}
        </div>
             
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