<!DOCTYPE html>
<html>
<head>
	<title>Class, Student and Teacher</title>
</head>
<body>
    <style>
        table{
            border-collapse: collapse;
        }
        th{
            font-weight: bolder;
            font-size: 1.2em;
        }
        th,td{
            padding: 10px;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
    @foreach ($classes as $class)
    <h1>Class - {{ $class->name }} {{ $class->level }} ({{ $class->year }})</h1>
    <h2>Teacher : @if($class->teacher) {{ $class->teacher->first_name }} {{ $class->teacher->last_name }} @else <i>Empty</i> @endif</h2>
    <table border="1" style="width:50%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
           @forelse ($class->student as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                    <td>{{ $student->address }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" align="center">Empty data</td>
                </tr>
            @endforelse
            
        </tbody>
    </table>
    @if($loop->iteration!=count($classes))
    <div class="page-break"></div>
    @endif

    @endforeach
</body>
</html>