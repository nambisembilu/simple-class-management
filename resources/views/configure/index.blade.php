@extends('layouts.admin.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Configure Classes</h2>
                        <a target="_blank"  href="{{ route('configure.export_pdf') }}" class="btn btn-warning btn-lg">
                            <i class="zmdi zmdi-collection-pdf"></i> Export PDF
                        </a>
                    </div>
                    <hr/>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    @if(session()->get('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}  
                    </div><br />
                    @endif
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}  
                    </div><br />
                    @endif
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th class="text-center">Level</th>
                                    <th class="text-center">Year</th>
                                    <th class="text-center">Teacher</th>
                                    <th class="text-center">Number of Student</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($classes as $class)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $class->name }}</td>
                                        <td class="text-center">{{ $class->level }}</td>
                                        <td class="text-center">{{ $class->year }}</td>
                                        <td class="text-center">
                                            @if(!empty($class->teacher)) 
                                                {{ $class->teacher->first_name }} {{ $class->teacher->last_name }} 
                                            @else 
                                                <label class="badge badge-danger">Empty</label> 
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $class->student->count() }}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{ route('configure.teacher', $class->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Teacher">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </a>
                                                <a href="{{ route('configure.student', $class->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Student">
                                                    <i class="zmdi zmdi-accounts"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    
                                @endforelse
                                                                
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
