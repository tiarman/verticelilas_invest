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
              <h2 class="panel-title">Manage team</h2>
            </header>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                  <a href="{{ route('team.list') }}" class="brn btn-success btn-sm">team list</a>
                </div>
              </div>
              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif

              <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $team->id }}">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="control-label">Title</label>
                      <input type="text" name="name" placeholder="team name" value="{{ old('name', $team->name) }}"
                             class="form-control @error('name') is-invalid @enderror">
                      @error('name')
                      <strong class="text-danger">{{ $errors->first('name') }}</strong>
                      @enderror
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Designation</label>
                      <input type="text" name="designation" placeholder="team designation" value="{{ old('designation', $team->designation) }}"
                             class="form-control @error('designation') is-invalid @enderror">
                      @error('designation')
                      <strong class="text-danger">{{ $errors->first('designation') }}</strong>
                      @enderror
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Description</label>
                      <input type="text" name="description" placeholder="team description" value="{{ old('description', $team->description) }}"
                             class="form-control @error('description') is-invalid @enderror">
                      @error('description')
                      <strong class="text-danger">{{ $errors->first('description') }}</strong>
                      @enderror
                    </div>
                  </div>



                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Image <label class="text-danger">*</label></label>
                      <input type="file" name="image"  placeholder="team image" value="{{ old('image', $team->image) }}"
                             class="form-control @error('image') is-invalid @enderror">
                      @error('image')
                      <strong class="text-danger">{{ $errors->first('image') }}</strong>
                      @enderror
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Type<span class="text-danger">*</span></label>
                      <select name="type"  class="form-control @error('type') is-invalid @enderror">
                        <option value="">Choose a type</option>
                        @foreach(\App\Models\Team::$typeArray as $types)
                          <option value="{{ $types }}"
                                  @if(old('type', $team->type) == $types) selected @endif>{{ ucfirst($types) }}</option>
                        @endforeach
                      </select>
                      @error('type')
                      <strong class="text-danger">{{ $errors->first('type') }}</strong>
                      @enderror
                    </div>
                  </div>



                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">TypeStatus<span class="text-danger">*</span></label>
                      <select name="status"  class="form-control @error('status') is-invalid @enderror">
                        <option value="">Choose a status</option>
                        @foreach(\App\Models\Team::$statusArray as $statys)
                          <option value="{{ $statys }}"
                                  @if(old('status', $team->status) == $statys) selected @endif>{{ ucfirst($statys) }}</option>
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
