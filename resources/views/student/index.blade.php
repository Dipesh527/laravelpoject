@extends('layouts.app')
 @section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="table table-bordered table-striped mt-4" id="datatable">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>faculty</th>
                            <th>DOB</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($students as $key => $student)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->roll }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->city}}</td>
                                <td>{{ $student->faculty->name}}</td>
                                <td>{{ $student->dob}}</td>
                                <td><img src="{{ $student->image }}" alt="" width="64"></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="/students/{{ $student->id }}/edit" class="btn btn-primary">EDIT</a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="/students/{{ $student->id }}" class="btn btn-success">SHOW</a>
                                        </div>
                                        <div class="col">
                                            <form action="students/{{ $student->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    
                             
                                </td>
                            </tr>
                           
                       @endforeach
                    </tbody>
                </table>

                {{ $students->render('pagination::bootstrap-4') }}
            
            </div>
        </div>
     
    </div>

 @endsection