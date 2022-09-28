@extends('admin.category')

@section('category-content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Manage User</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User List</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
<div class="row">
                    
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User List</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gig Category</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Earning</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                          <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->profile_image}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->gig_category}}</td>
                            <td>{{$item->rating}}</td>
                            <td>{{$item->earning}}</td>
                            <td> 
                                <a href="{{url('admin/user/delete')}}/{{$item->id}}"> <Button type="button" class="btn btn-primary">Active</Button></a>
                                <a href="{{url('admin/user/delete')}}/{{$item->id}}"> <Button type="button" class="btn btn-danger">Suspend</Button></a>
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
@endsection