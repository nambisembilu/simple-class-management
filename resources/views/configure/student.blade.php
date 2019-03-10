@extends('layouts.admin.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Configure Class</strong> Student
                            <form class="float-right" action="{{ route('configure.students_reset', $class->id)}}" method="post">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-ban"></i> Reset Student on this Class
                                </button>
                            </form>
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
                        <form action="{{ route('configure.student', $class->id) }}" method="post" class="">
                            @csrf
                            @method('PATCH')
                            <div class="card-body card-block">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $student->getFullName() }}</td>
                                                <td>{{ $student->address }}</td>
                                                <td class="text-center">
                                                    @if($student->class)
                                                        {{ $student->class->name }}  {{ $student->class->level }}  {{ $student->class->year }}
                                                    @else
                                                        <input type="checkbox" name="students[]" value="{{ $student->id }}"/>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-dot-circle-o"></i> Update
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