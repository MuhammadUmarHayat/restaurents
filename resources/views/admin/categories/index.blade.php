
@extends('layouts.admin')
@section('title', 'Admin Console')
@section('content')

<div class="containeer">
    <div class="row">
        <a href="{{ route('admin.categories.create') }}">New Category</a>
        <div class="col-sm-6">
<table>
    <tr>
        <th>Name </th>
        <th>Image </th>
        <th>Description </th>
        <th>Edit </th>
    </tr>
    @foreach ($categories as $category)
    <tr>
        <td> {{ $category->name }} </td>
        <td><img src="{{ Storage::url($category->image) }}"> </td>
        <td>{{ $category->description }}</td>
        <td>
            <a href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>
            <form
            method="POST"
            action="{{ route('admin.categories.destroy', $category->id) }}"
            onsubmit="return confirm('Are you sure?');">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
</table>
        </div>
    </div>
</div>





@endsection
