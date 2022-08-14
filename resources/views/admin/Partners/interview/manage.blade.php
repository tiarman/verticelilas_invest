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
              <h2 class="panel-title">Manage Membership</h2>
            </header>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                  <a href="{{ route('partners.interview.list',request()->partner_id) }}" class="brn btn-success btn-sm">Interview list</a>
                </div>
              </div>
              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif

              <form action="{{ route('partners.interview.store', request()->partner_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $interview->id }}">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Link</label>
                      <input type="text" name="link" placeholder="partners link" value="{{ old('link', $interview->link) }}"
                             class="form-control @error('link') is-invalid @enderror">
                      @error('link')
                      <strong class="text-danger">{{ $errors->first('link') }}</strong>
                      @enderror
                    </div>
                  </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Type<span class="text-danger">*</span></label>
                            <select name="type"  class="form-control @error('type') is-invalid @enderror">
                                <option value="">Choose a type</option>
                                @foreach(\App\Models\Interview::$typeArray as $statys)
                                    <option value="{{ $statys }}"
                                            @if(old('type', $interview->type) == $statys) selected @endif>{{ ucfirst($statys) }}</option>
                                @endforeach
                            </select>
                            @error('type')
                            <strong class="text-danger">{{ $errors->first('type') }}</strong>
                            @enderror
                        </div>
                    </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Status<span class="text-danger">*</span></label>
                      <select name="status"  class="form-control @error('status') is-invalid @enderror">
                        <option value="">Choose a status</option>
                        @foreach(\App\Models\Interview::$statusArray as $statys)
                          <option value="{{ $statys }}"
                                  @if(old('status', $interview->status) == $statys) selected @endif>{{ ucfirst($statys) }}</option>
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
