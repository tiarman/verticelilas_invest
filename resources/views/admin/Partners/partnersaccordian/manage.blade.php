@extends('layouts.admin')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <section class="panel">
            <header class="panel-heading">
              <h2 class="panel-title">Manage Accordian</h2>
            </header>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                  <a href="{{ route('partners.accordian.list',request()->partner_id) }}" class="brn btn-success btn-sm">Accordian list</a>
                </div>
              </div>
              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif

              <form action="{{ route('partners.accordian.store', request()->partner_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $accordian->id }}">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Title</label>
                      <input type="text" name="title" placeholder="partners title" value="{{ old('title', $accordian->title) }}"
                             class="form-control @error('title') is-invalid @enderror">
                      @error('title')
                      <strong class="text-danger">{{ $errors->first('title') }}</strong>
                      @enderror
                    </div>
                  </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea type="lingText" name="description" placeholder="partners description"
                                      class="form-control summernote @error('description') is-invalid @enderror">{{$accordian->description}}</textarea>
                            @error('description')
                            <strong class="text-danger">{{ $errors->first('description') }}</strong>
                            @enderror
                        </div>
                    </div>


                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Status<span class="text-danger">*</span></label>
                      <select name="status"  class="form-control @error('status') is-invalid @enderror">
                        <option value="">Choose a status</option>
                        @foreach(\App\Models\Accordian::$statusArray as $statys)
                          <option value="{{ $statys }}"
                                  @if(old('status', $accordian->status) == $statys) selected @endif>{{ ucfirst($statys) }}</option>
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
          </section>
        </div>
      </div>
    </div>
  </div>
@endsection
                                @section('script')
                                    <script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.js') }}"></script>
                                    <script>
                                    $(document).ready(function () {
                                    $('.summernote').summernote({
                                    placeholder:'Write here...',
                                    tabsize: 2,
                                    height: 100
                                    });
                                    })
                                    </script>
@endsection
