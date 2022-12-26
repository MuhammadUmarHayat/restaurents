
@extends('layouts.admin')
@section('title', 'Menu Console')
@section('content')

<div class="containeer">
    <div class="row">
        <a href="{{ route('admin.menus.create') }}">New Category</a>
        <div class="col-sm-6">
<table>
    <tr>
        <th>Name </th>
        <th>Image </th>
        <th>Price </th>
        <th>Description </th>
        <th>Edit </th>
    </tr>
    @foreach ($menus as $menu)
    <tr>
        <td> {{ $menu->name }} </td>
        <td><img src="{{ Storage::url($menu->image) }}"> </td>
        <td>{{ $menu->price }}</td>
        <td>{{ $menu->description }}</td>
        <td>
            <a href="{{ route('admin.menus.edit', $menu->id) }}">Edit</a>
            <form
            method="POST"
            action="{{ route('admin.menus.destroy', $menu->id) }}"
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
