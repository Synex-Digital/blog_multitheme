
@extends('dashboard.layout.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fa-solid fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="" class="disabled">Theme Select</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Select</a></li>
        </ol>
        <div class="col-lg-12">
            <form action="{{ route('theme_select.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="card-header">
                        <h4 class='card-title'>Theme Select</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="col-sm-12 @error('theme_select') is-invalid @enderror">
                                    @foreach ($theme_select as $theme)
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="theme_{{ $theme->name }}" type="radio" name="theme" value="{{ $theme->id }}" {{ $theme->status == 'active' ? 'checked' : '' }} >
                                            <label for="theme_{{ $theme->name }}" class="form-check-label">
                                                {{ $theme->name }}
                                            </label>
                                            <img src="{{ url('/'. $theme->image)}}" class="rounded-lg" width="500" alt="">
                                        </div>
                                    @endforeach

                                    @error('theme_select')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection

