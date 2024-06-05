@extends('dashboard.layout.app')
@section('content')

        {{-- <div class="container-fluid"> --}}
            <div class="row">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('danger'))
                    <div class="alert alert-danger">{{ session('danger') }}</div>
                @endif
                <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Category List
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                {{-- <th style="width:50px;">
                                                    <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                        <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th> --}}
                                                <th><strong>Sl. No</strong></th>
                                                <th><strong>Catergory Name</strong></th>
                                                <th><strong>Status</strong></th>
                                                <th><strong>Action</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($category as $sl=>$categories)
                                                <tr>
                                                    {{-- <td>
                                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                            <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                            <label class="form-check-label" for="customCheckBox2"></label>
                                                        </div>
                                                    </td> --}}
                                                    <td><strong>{{ $sl+1 }}</strong></td>

                                                    <td><div class="d-flex align-items-center"><img src="{{ url('/'.$categories->image)}}" class="rounded-lg me-2" width="20" alt=""> <span class="w-space-no">{{ $categories->name }}</span></div></td>
                                                    <td><span class="badge light badge-success">{{ $categories->status }}</span></td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ route('category.edit', $categories->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>

                                                            <form action="{{ route('category.destroy', $categories->id) }}" method="POST">
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

                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" @error('name') is-invalid @enderror" placeholder="Enter Category Name" name="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Add Category Image</label>
                                    <input class="form-control" @error('image') is-invalid @enderror" type="file" id="formFile" name="image">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
            </div>
        {{-- </div> --}}


@endsection
