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
              <h2 class="panel-title">Create New Membership of <strong>{{ $partner->name }}</strong></h2>
            </header>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                  <a href="{{ route('partners.membership.list', request()->partner_id) }}" class="brn btn-success btn-sm">List of Membership</a>
                </div>
              </div>

              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif
              <form action="{{route('partners.membership.store', request()->partner_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="control-label">Name</label>
                      <input type="text" name="title" placeholder="partners title" value="{{ old('title') }}"
                             class="form-control @error('title') is-invalid @enderror">
                      @error('title')
                      <strong class="text-danger">{{ $errors->first('title') }}</strong>
                      @enderror
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="control-label">Short Description</label>
                      <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror" rows="5">{{ old('short_description') }}</textarea>
                      @error('short_description')
                      <strong class="text-danger">{{ $errors->first('short_description') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Link</label>
                      <input type="text" name="link" placeholder="partners link" value="{{ old('link') }}"
                             class="form-control @error('link') is-invalid @enderror">
                      @error('link')
                      <strong class="text-danger">{{ $errors->first('link') }}</strong>
                      @enderror
                    </div>
                  </div>


                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Status<span class="text-danger">*</span></label>
                      <select name="status" required class="form-control @error('status') is-invalid @enderror">
                        <option value="">Choose a status</option>
                        @foreach(\App\Models\ProfessionalMembership::$statusArray as $statys)
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
