@extends('layouts.admin')


@section('stylesheet')
  <!-- DataTables -->
  <link href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css"/>
  <link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css"/>

  <link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css"/>


@endsection

@section('content')


<div class="card">
    <div class="card-body">
      
        <h2 class="panel-title">Create Who we are</h2>
  
      @if(session()->has('status'))
       {!! session()->get('status') !!}
      @endif

      <div class="row">
        <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
          <a href="{{ route('who.we.are.view') }}" class="brn btn-success btn-sm">View</a>
        </div>
      </div>
        <form class="mt-5" action="{{ route('who.we.are.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              
              <div class="col-md-12">
                <h3><strong>Form English</strong></h3>
              </div>
                <div class="col-sm-5">
                  <div class="form-group">
                    <label class="control-label">Attach Image <span class="text-danger">*</span></label>
                    <br>
                    <input type="file" class="form-control @error('image_en') is-invalid @endif" name="image_en">
                    @error('image_en')
                    <strong class="text-danger">{{ $errors->first('image_en') }}</strong>
                    @enderror
                  </div>
                  </div>
                  
                  
              <div class="col-sm-7">
                <div class="form-group">
                  <label class="control-label">Sub Title <span class="text-danger">*</span></label>
                  <input type="text" name="sub_title_en" placeholder="Sub Title" value="{{ old('sub_title_en') }}"
                         class="form-control @error('sub_title_en') is-invalid @enderror">
                  @error('sub_title_en')
                  <strong class="text-danger">{{ $errors->first('sub_title_en') }}</strong>
                  @enderror
                </div>
              </div>
              
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="control-label">Description <span class="text-danger">*</span></label><br>
                  <textarea name="description_en" class="form-control @error('description_en') is-invalid @enderror" id="" cols="40" rows="3" placeholder="Description">{{ old('description_en') }}</textarea>
                  
                  @error('description_en')
                  <strong class="text-danger">{{ $errors->first('description_en') }}</strong>
                  @enderror
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-12">
                <h3><strong>Form Bangla</strong></h3>
              </div>
                <div class="col-sm-5">
                  <div class="form-group">
                    <label class="control-label">Attach Image <span class="text-danger">*</span></label>
                    <br>
                    <input type="file" class="form-control" name="image_bn"> 
                    @error('image_bn')
                    <strong class="text-danger">{{ $errors->first('image_bn') }}</strong>
                    @enderror
                  </div>
                  </div>
                  
              <div class="col-sm-7">
                <div class="form-group">
                  <label class="control-label">Sub Title <span class="text-danger">*</span></label>
                  <input type="text" name="sub_title_bn" placeholder="Sub Title" value="{{ old('sub_title_bn') }}"
                         class="form-control @error('sub_title_bn') is-invalid @enderror">
                  @error('sub_title_bn')
                  <strong class="text-danger">{{ $errors->first('sub_title_bn') }}</strong>
                  @enderror
                </div>
              </div>
              
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="control-label">Description <span class="text-danger">*</span></label><br>
                  <textarea name="description_bn" class="form-control @error('description_bn') is-invalid @enderror" id="" cols="40" rows="3" placeholder="Description_bn">{{ old('description_bn') }}</textarea>
                  
                  @error('description_bn')
                  <strong class="text-danger">{{ $errors->first('description_bn') }}</strong>
                  @enderror
                </div>
              </div>
              
            </div>
            
            <div class="row mt-4">
              <div class="col-sm-12 text-right">
                <button class="btn btn-danger btn-sm" type="submit">Submit</button>
              </div>
            </div>
          </form>
    </div>
</div>
@endsection