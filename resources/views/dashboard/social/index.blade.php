@extends('dashboard.layout.app')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fa-solid fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="" class="disabled">Settings</a></li>
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Social Links</a></li>
</ol>
    {{-- <div class="container-fluid"> --}}
        <div class="row">

                <div class="col-lg-5">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-header">
                            <h4 class="card-title">Social Links</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('social.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group row">
                                    <label for="formFile" class="form-label">Logo</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" @error('logo') is-invalid @enderror type="text" id="formFile" name="logo">
                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                            <br>
                                            <p class="text-danger">*Click icon to select logo</p>
                            <li class="list-inline-item"><a href="#"><i id="fab" class="fab fa-facebook-f"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-telegram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-blogger"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-soundcloud"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-skype"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-spotify"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitch"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-viber"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-snapchat"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-tiktok"></i></a></li>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Link</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" @error('link') is-invalid @enderror placeholder="Enter Link Address" name="link">
                                        @error('link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="active" checked>
                                            <label class="form-check-label">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="inactive">
                                            <label class="form-check-label">
                                                Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                @if(session('danger'))
                    <div class="alert alert-danger">{{ session('danger') }}</div>
                @endif
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 class='card-title'>All Social Links</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th><strong>Sl. No</strong></th>
                                            <th><strong>Logo</strong></th>
                                            <th><strong>Link</strong></th>
                                            <th><strong>Status</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($social as $sl=>$social_links)
                                            <tr>
                                                <td width="5%"><strong>{{ $sl+1 }}</strong></td>

                                                <td width="10%"><li class="list-inline-item"><i class="{{ $social_links->logo }}"></i></a></li></td>

                                                <td width="20%"><span class="w-space-no">{{ $social_links->link }}</span></td>

                                                <td width="20%"><span class="badge light {{ $social_links->status == 'inactive' ? 'badge-danger' : 'badge light' }} badge-success">{{ $social_links->status }}</span></td>

                                                <td width="20%">
                                                    <div class="d-flex">
                                                        <a href="{{ route('social.edit', $social_links->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>

                                                        <form action="{{ route('social.destroy', $social_links->id) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    {{-- </div> --}}
@endsection

@section('script')
    <script>
        var listItems = document.querySelectorAll('.list-inline-item');
        let inputs = document.getElementById('formFile');
        // Add click event listener to each list item
        listItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var iconName = item.querySelector('i').className; // Get class name of the <i> tag
            inputs.value = iconName;
        });
        });
    </script>
@endsection
