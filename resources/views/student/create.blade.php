@extends('layouts.admin.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Student</strong> Create
                        </div>
                        <form action="{{ route('student.store') }}" method="post" class="">
                            @csrf
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="first_name" class=" form-control-label">First Name</label>
                                    <input type="text"  name="first_name"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class=" form-control-label">First Name</label>
                                    <input type="text"  name="last_name"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="first_name" class=" form-control-label">Address</label>
                                    <textarea class="form-control" name="address" style="width:100%;height:80px;resize:none"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-dot-circle-o"></i> Create
                                </button>
                                <button type="reset" class="btn btn-danger">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                                <a href="{{ route('student.index') }}" class="btn btn-info">
                                    <i class="fa fa-arrow-left"></i> Back
                                </a>
                            </div>                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection