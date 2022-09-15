@extends('layouts.main')

@section('title')
Silabu Create
@endsection


@section('main-content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Academy Package {{ $SilabusPackage->title }}</h3>
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
        <x-form-create :action="route('Materi.store',['Academy'=>$SilabusPackage->id])" :upload="true">
           <div class="row">
            <div class="col-md-6">
                <x-input label="Title" name="title" placeholder="Masukan judul materi.."/>
            </div>
            <div class="col-md-3">
                <x-input label="Link" name="link" placeholder="Masukan link video.."/>
            </div>
            <div class="col-md-6">
                <x-input label="Picture" name="picture" type="file" keterangan="Picture Type : png. jpg. jpeg"
                placeholder="Input Picture.."/>  
              </div>
           </div>
        </x-form-create>    
<!-- Striped rows end -->
      </div>
</div>
@endsection