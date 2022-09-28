@extends('admin.category')

@section('category-content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Manage Category</h4>
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
<div class="container-fluid">
<div class="row">
                    
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Gig Category List</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Count</th>
                            <th scope="col">Featured</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                          <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->icon}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->desc}}</td>
                            <td>{{$item->gig_count}}</td>
                            <td>
                                @if ($item->featured == 1)
                                    Yes
                                @else
                                    No
                                @endif
                            </td>
                            <td> <a href="{{url('admin/category/edit')}}/{{$item->id}}"> <Button type="button" class="btn btn-info me-4">Edit</Button></a><a href="{{url('admin/category/delete')}}/{{$item->id}}"> <Button type="button" class="btn btn-danger">Delete</Button></a></td>
                        </tr>  
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection