@extends('layouts.admin.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Configure Class</strong> Teacher
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                        <form action="{{ route('configure.teacher', $class->id) }}" method="post" class="">
                            @csrf
                            @method('PATCH')
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="teacher" class=" form-control-label">Teacher Name</label>
                                    <select class="select2-basic" name="teacher">
                                        <option value="">--- SELECT TEACHER ----</option>
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id }}" @if($class->teacher_id==$teacher->id) selected @endif>{{ $teacher->getFullName() }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                                <button type="reset" class="btn btn-danger">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                                <a href="{{ route('home') }}" class="btn btn-info">
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