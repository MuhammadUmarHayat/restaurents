@extends('layouts.admin')
@section('title', 'Add Category')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Add Category Form</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                <form method="post" action={{ route('admin.categories.store') }} enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName"
                            placeholder="Enter name">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="sm:col-span-6">
                        <label for="image"> Image </label>
                        <div>
                            <input type="file" id="image" name="image"
                                class="block @error('name') border-red-400 @enderror" />
                        </div>
                        @error('image')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription">Description</label>
                        <input type="text" name="description" class="form-control" id="exampleInputDescription"
                            placeholder="Enter Description">
                        <span class="text-danger">
                            @error('description')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
