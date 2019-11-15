@extends('applayout')
@section('content')

<div class="table-title">
    <div class="row">
        <div class="col-sm-5">
            <h2>User <b>Management</b></h2>
        </div>
        <div class="col-sm-7">
            <a href="{{URL::to('/addnewuser')}}" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
            <a href="#" class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>						
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>						
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($student as $user)
        <tr>
            <td>1</td>
            <td><a href="#">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>                        
            <td>{{ $user->phone }}</td>
            <td><span class="status text-success">&bull;</span> Active</td>
            <td>
                <a href="{{ URL::to('singledata/'.$user->id) }}" class="settings" title="Settings" data-toggle="tooltip"><i class="fa fa-eye"></i></a>

                <a href="{{ URL::to('editdata/'.$user->id) }}" class="settings" title="Settings" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>

                <a href="{{ URL::to('deletedata/'.$user->id) }}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons" onclick="return confirm('Are you Sure To Delete?')" >&#xE5C9;</i></a>
            </td>
        </tr>
    @endforeach
        
    </tbody>
</table>
<div class="clearfix">
    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
    <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
    </ul>
</div>
    
@endsection