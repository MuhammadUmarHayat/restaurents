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

                <form method="post" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="exampleInputName"
                            placeholder="Enter name">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <label for="image" > Image </label>
                        <div>
                            <img  src="{{ Storage::url($category->image) }}">
                        </div>
                        <div >
                            <input type="file" id="image" name="image"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('image')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription">Description</label>
                        <input type="text" name="description" value="{{ $category->description }}" class="form-control" id="exampleInputDescription"
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
