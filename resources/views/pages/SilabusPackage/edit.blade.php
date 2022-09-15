@extends('layouts.main')

@section('title')
Silabu Edit
@endsection


@section('main-content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Academy Package {{ $Academy->title }}</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><a href="">Silabus</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
     
<!-- Striped rows start -->
        <x-form-edit :action="route('Academy.Silabus.update',['Academy'=>$Academy->id,'Silabu'=>$data->id])" :upload="true">
           <div class="row">
            <div class="col-md-6">
                <x-input label="Silabus Title" name="silabus_title" placeholder="Input Silabus Title.."/>
            </div>
            <div class="col-md-3">
                <x-input label="Silabus Time" type="number" name="silabus_time" placeholder="Input Silabus Time.."/>
            </div>
            <div class="col-md-3">
                <x-input label="Silabus Lesson" type="number" name="silabus_lesson" placeholder="Input Silabus Lesson.."/>
            </div>
           </div>
        </x-form-edit>    
<!-- Striped rows end -->
      </div>
</div>
@endsection