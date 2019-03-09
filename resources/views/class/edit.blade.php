@extends('layouts.admin.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Class</strong> Update
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
                        <form action="{{ route('class.update', $class->id) }}" method="post" class="">
                            @csrf
                            @method('PATCH')
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Name</label>
                                    <input type="text"  name="name"  class="form-control" value="{{ $class->name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="level" class=" form-control-label">Level</label>
                                    <input type="text"  name="level"  class="form-control" value="{{ $class->level }}" />
                                </div>
                                <div class="form-group">
                                    <label for="year" class=" form-control-label">Year</label>
                                    <input type="number" maxlength="4" name="year"  class="form-control" value="{{ $class->year }}" />
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                                <button type="reset" class="btn btn-danger">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                                <a href="{{ route('class.index') }}" class="btn btn-info">
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