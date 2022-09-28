@extends('admin.category')
@if ($id>0)
   @section('page_title','Edit Category') 
@else
@section('page_title','Add Category') 
@endif

@section('category-content')

<div class="page-breadcrumb">
  <div class="row align-items-center">
      <div class="col-5">
          <h4 class="page-title">@yield('page_title')</h4>
          <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Manage Category</li>
                  </ol>
              </nav>
          </div>
      </div>
      <div class="col-7">
          <div class="text-end upgrade-btn">
              <a href="{{route('category.add')}}" class="btn btn-primary text-white">Add Category</a>
          </div>
      </div>
  </div>
</div>
  @if (session('message'))
    <div class="alert alert-success">
      {{session('message')}}
    </div>
  @endif
  <div class="container-fluid">
<div class="row">
    <form method="post" action="{{route('category.insert')}}">
        @csrf
        <div class="form-group">
          <label for="formGroupExampleInput">Icon</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="icon" value="{{$icon}}" required>
        </div>
        @error('icon')
          <div class="alert alert-danger">
              {{$message}}
          </div>
        @enderror
        <div class="form-group">
          <label for="formGroupExampleInput">Name</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$name}}" required>
        </div>
        @error('name')
        <div class="alert alert-danger">
          {{$message}}
      </div>
        @enderror
        <div class="form-group">
          <label for="formGroupExampleInput">Description</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="desc" value="{{$desc}}" required>
        </div>
        @error('desc')
        <div class="alert alert-danger">
          {{$message}}
      </div>
        @enderror
        <div class="form-group">
          <label for="formGroupExampleInput2">Slug</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="slug" value="{{$slug}}" required>
        </div>
        @error('slug')
        <div class="alert alert-danger">
          {{$message}}
      </div>
        @enderror
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="featured" id="flexCheckChecked" {{$is_selected}}>
          <label class="form-check-label" for="flexCheckChecked">
            Show in Home Page
          </label>
        </div>
        <input type="hidden" name="id" value="{{$id}}">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
</div>
@endsection