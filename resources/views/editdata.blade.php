@extends('applayout')
@section('content')
<div class="table-title">
    <div class="row">
        <div class="col-sm-5">
            <h2>User <b>Management</b></h2>
        </div>
        <div class="col-sm-7">
        
        </div>
       
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        
        <div class="register-form">
            <form class="form" method="post" action="{{ URL::to('updatedata/'.$student->id) }}">
                @csrf
                <div class="note">
                    <p>Update  User</p>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" name="name" value="{{ $student->name }}" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Phone Email *" value="{{ $student->email }}"/>
                            </div>
                            <div class="form-group">
                            <input type="text" name="phone" placeholder="Your Phone" class="form-control" value="{{ $student->phone }}" />
                           
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </form>
        </div>

    </div>
</div>

@endsection