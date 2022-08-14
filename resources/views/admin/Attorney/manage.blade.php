@extends('layouts.admin')

@section('stylesheet')
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <section class="panel">
            <header class="panel-heading">
              <h2 class="panel-title">Manage attorney</h2>
            </header>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                  <a href="{{ route('attorney.list') }}" class="brn btn-success btn-sm">attorney list</a>
                </div>
              </div>
              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif

              <form action="{{ route('attorney.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $attorney->id }}">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="control-label">Title</label>
                      <input type="text" name="title" placeholder="attorney title" value="{{ old('title', $attorney->title) }}"
                             class="form-control @error('title') is-invalid @enderror">
                      @error('title')
                      <strong class="text-danger">{{ $errors->first('title') }}</strong>
                      @enderror
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Designation</label>
                      <input type="text" name="designation" placeholder="attorney designation" value="{{ old('designation', $attorney->designation) }}"
                             class="form-control @error('designation') is-invalid @enderror">
                      @error('designation')
                      <strong class="text-danger">{{ $errors->first('designation') }}</strong>
                      @enderror
                    </div>
                  </div>



                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Link1</label>
                      <input type="text" name="link1" placeholder="attorney link1" value="{{ old('link1', $attorney->link1) }}"
                             class="form-control @error('link1') is-invalid @enderror">
                      @error('link1')
                      <strong class="text-danger">{{ $errors->first('link1') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Link2</label>
                      <input type="text" name="link2" placeholder="attorney link2" value="{{ old('link2', $attorney->link2) }}"
                             class="form-control @error('link2') is-invalid @enderror">
                      @error('link2')
                      <strong class="text-danger">{{ $errors->first('link2') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Link3</label>
                      <input type="text" name="link3" placeholder="attorney link3" value="{{ old('link3', $attorney->link3) }}"
                             class="form-control @error('link3') is-invalid @enderror">
                      @error('link3')
                      <strong class="text-danger">{{ $errors->first('link3') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Link4</label>
                      <input type="text" name="link4" placeholder="attorney link4" value="{{ old('link4', $attorney->link4) }}"
                             class="form-control @error('link4') is-invalid @enderror">
                      @error('link4')
                      <strong class="text-danger">{{ $errors->first('link4') }}</strong>
                      @enderror
                    </div>
                  </div>






                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Image <label class="text-danger">*</label></label>
                      <input type="file" name="image"  placeholder="attorney image" value="{{ old('image', $attorney->image) }}"
                             class="form-control @error('image') is-invalid @enderror">
                      @error('image')
                      <strong class="text-danger">{{ $errors->first('image') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Status<span class="text-danger">*</span></label>
                      <select name="status"  class="form-control @error('status') is-invalid @enderror">
                        <option value="">Choose a status</option>
                        @foreach(\App\Models\attorney::$statusArray as $statys)
                          <option value="{{ $statys }}"
                                  @if(old('status', $attorney->status) == $statys) selected @endif>{{ ucfirst($statys) }}</option>
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
@endsection
