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
              <h2 class="panel-title">Create New Publicattion of <strong>{{ $partner->name }}</strong></h2>
            </header>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                  <a href="{{ route('partners.publication.list', request()->partner_id) }}" class="brn btn-success btn-sm">List of Publication</a>
                </div>
              </div>

              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif
              <form action="{{ route('partners.publication.store', request()->partner_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Name</label>
                      <input type="text" name="name" placeholder="partners name" value="{{ old('name') }}"
                             class="form-control @error('name') is-invalid @enderror">
                      @error('name')
                      <strong class="text-danger">{{ $errors->first('name') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Link</label>
                      <input type="text" name="link" placeholder="link name" value="{{ old('link') }}"
                             class="form-control @error('link') is-invalid @enderror">
                      @error('link')
                      <strong class="text-danger">{{ $errors->first('link') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Image <label class="text-danger">*</label></label>
                      <input type="file" name="image" required placeholder="partners image" value="{{ old('image') }}"
                             class="form-control @error('image') is-invalid @enderror">
                      @error('image')
                      <strong class="text-danger">{{ $errors->first('image') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">File <label class="text-danger">*</label></label>
                      <input type="file" name="file" required placeholder="publication file" value="{{ old('file') }}"
                             class="form-control @error('file') is-invalid @enderror">
                      @error('file')
                      <strong class="text-danger">{{ $errors->first('file') }}</strong>
                      @enderror
                    </div>
                  </div>
                  {{-- <div class="col-sm-12">
                    <div class="form-group">
                      <label class="control-label">Biography</label>
                      <textarea name="biography" class="form-control @error('biography') is-invalid @enderror" rows="5">{{ old('biography') }}</textarea>
                      @error('biography')
                      <strong class="text-danger">{{ $errors->first('biography') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Life Sketch</label>
                      <input type="text" name="life_sketch" placeholder="partners life_sketch" value="{{ old('life_sketch') }}"
                             class="form-control @error('life_sketch') is-invalid @enderror">
                      @error('life_sketch')
                      <strong class="text-danger">{{ $errors->first('life_sketch') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Qualifications</label>
                      <input type="text" name="qualifications" placeholder="partners qualifications" value="{{ old('qualifications') }}"
                             class="form-control @error('qualifications') is-invalid @enderror">
                      @error('qualifications')
                      <strong class="text-danger">{{ $errors->first('qualifications') }}</strong>
                      @enderror
                    </div>
                  </div> --}}


                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Status<span class="text-danger">*</span></label>
                      <select name="status" required class="form-control @error('status') is-invalid @enderror">
                        <option value="">Choose a status</option>
                        @foreach(\App\Models\Publication::$statusArray as $statys)
                          <option value="{{ $statys }}"
                                  @if(old('status') == $statys) selected @endif>{{ ucfirst($statys) }}</option>
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
