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
      
        <h2 class="panel-title">Manage Practice Area</h2>
  
      @if(session()->has('status'))
       {!! session()->get('status') !!}
      @endif

      <div class="row">
        <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
          <a href="{{ route('legal.practice.area.view') }}" class="brn btn-success btn-sm">View</a>
        </div>
      </div>
        <form class="mt-5" action="{{ route('legal.practice.area.store') }}" method="post" enctype="multipart/form-data">
            @csrf
          <input type="hidden" name="id" value="{{ $datas->id }}">
            <div class="row">
                  
              <div class="col-sm-7">
                <div class="form-group">
                  <label class="control-label">Title <span class="text-danger">*</span></label>
                  <input type="text" name="title" placeholder="Sub Title" value="{{ old('title', $datas->title) }}"
                         class="form-control @error('title') is-invalid @enderror">
                  @error('title')
                  <strong class="text-danger">{{ $errors->first('title') }}</strong>
                  @enderror
                </div>
              </div>
              
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="control-label">Description <span class="text-danger">*</span></label><br>
                  <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="" cols="40" rows="3" placeholder="Description">{{ old('description', $datas->description) }}</textarea>
                  
                  @error('description')
                  <strong class="text-danger">{{ $errors->first('description') }}</strong>
                  @enderror
                </div>
              </div> 
            </div>
            
            <div class="col-sm-6">
              <div class="form-group">
                <label class="control-label">Status<span class="text-danger">*</span></label>
                <select name="status"  class="form-control @error('status') is-invalid @enderror">
                  <option value="">Choose a status</option>
                  @foreach(\App\Models\LegalPracticeArea::$statusArray as $statys)
                    <option value="{{ $statys }}"
                            @if(old('status', $datas->status) == $statys) selected @endif>{{ ucfirst($statys) }}</option>
                  @endforeach
                </select>
                @error('status')
                <strong class="text-danger">{{ $errors->first('status') }}</strong>
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