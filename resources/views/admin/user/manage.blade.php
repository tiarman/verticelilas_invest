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
              <h2 class="panel-title">{{__('user.manage_user')}}</h2>
            </header>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                  <a href="{{ route('user.list') }}" class="brn btn-success btn-sm">{{__('user.user_list')}}</a>
                </div>
              </div>
              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif

              <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <input type="hidden" name="id" value="{{ $user->id }}">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label">{{__('user.name')}}<span class="text-danger">*</span></label>
                      <input type="text" name="name" placeholder="{{__('user.name')}}" required value="{{ $user->name }}"
                             class="form-control @error('name') is-invalid @enderror">
                      @error('name')
                      <strong class="text-danger">{{ $errors->first('name') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label">{{__('user.email')}}<span class="text-danger">*</span></label>
                      <input type="email" name="email" placeholder="{{__('user.email')}}" required value="{{ $user->email }}"
                             class="form-control @error('email') is-invalid @enderror">
                      @error('email')
                      <strong class="text-danger">{{ $errors->first('email') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label">{{__('user.phone')}}<span class="text-danger">*</span></label>
                      <input type="number" name="phone" placeholder="{{__('user.phone')}}" required value="{{ $user->phone }}"
                             class="form-control @error('phone') is-invalid @enderror">
                      @error('phone')
                      <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label">{{__('user.password')}}</label>
                      <input type="password" name="password" placeholder="{{__('user.password')}}"
                             class="form-control @error('password') is-invalid @enderror">
                      @error('password')
                      <strong class="text-danger">{{ $errors->first('password') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label">{{__('user.status')}}<span class="text-danger">*</span></label>
                      <select name="status" required class="form-control @error('status') is-invalid @enderror">
                        <option value="">{{__('user.choose_a_status')}}</option>
                        @foreach(\App\Models\User::$statusArray as $status)
                          <option value="{{ $status }}"
                                  @if(old('status', $user->status) == $status) selected @endif>{{ ucfirst($status) }}</option>
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
                    <button class="btn btn-danger btn-sm" type="submit">{{__('user.submit')}}</button>
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