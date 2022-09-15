@extends('layouts.main')
@section('title')
  Academy Create
@endsection


@section('main-content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Academy Packages</h3>
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
        <x-form-create :action="route('AcademyPackage.store')" :upload="true">
         <div class="row">
             <div class="col-md-6">
            <x-input label="Title" name="title" placeholder="Input Title..."/>
            <x-input label="Type" name="type" placeholder="Input Type..."/> 
             </div>

            <div class="col-md-6">
            <x-input label="Mentor Name" name="mentor"  placeholder="Input Mentor.."/>
            <x-input label="Rating"  name="rating"  placeholder="Input Rating.."/>
            </div>

            <div class="col-md-6">
            <x-input label="Time" name="time" type="number" placeholder="Input Time.."/>  
            </div>
          
            <div class="col-md-6">
            <x-input label="Lesson" name="lesson" type="number" placeholder="Input Lesson.."/>
            </div>
             
            <div class="col-md-6">
             <x-input label="Level" name="level"  placeholder="Input Level.."/>  
             </div>
               
              <div class="col-md-6">
                <x-input label="Picture" name="picture" type="file" keterangan="Picture Type : png. jpg. jpeg"
                placeholder="Input Picture.."/>  
              </div>
             
           <div class="col-12">
            <x-textarea label="Description Detail" name="desc_detail" type="text" placeholder="Input Description Detail"/>
           </div>
           <div class="col-12">
            <x-textarea label="Descrtiption Goals" name="desc_goal" type="text" placeholder="Input Description Goals"/>
           </div>
           <div class="col-12">
            <x-textarea label="Description Syllbus" name="desc_syllabus" type="text" placeholder="Input Description Syllbus"/>
           </div>
         </div>
        </x-form-create>    
<!-- Striped rows end -->
      </div>
</div>
@endsection