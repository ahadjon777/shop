@extends('admin.master.main')
@section('content')

    <div class="container mt-5 bg-label-light">
        <form action="" method="POST">
            @csrf
            @method('put')
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3 col-md-6">
                    <label for="organization" class="form-label">Old password</label>
                    <input
                        type="text" class="form-control" id="organization" name="old_password" value=""/>
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="phoneNumber">Change Password</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"></span>
                        <input
                            type="text" id="phoneNumber" name="change_password" class="form-control" value=""/>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Reset Password</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"></span>
                            <input type="text" id="phoneNumber" name="reset_password" class="form-control"  value=""/>
                        </div>
                </div>

            </div>
        </div>
    </div>
            <button type="submit" class="btn btn-outline-danger">change password</button>
        </form>
    </div>
@endsection
