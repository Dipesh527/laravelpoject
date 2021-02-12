@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Students Info</h1>
        <address>
            <img src="{{ asset($student->image) }}" alt="" width="64"> <br>
            Student Name:{{ $student->name }} <br>
            Student Address:{{ $student->address }} <br>
            Student city:{{ $student->city }} <br>
            Student faculty:{{ $student->faculty->name }} <br>
            Student dob:{{ $student->dob }} <br>

        </address>
        <a href="/students" class="btn btn-primary">Back</a>
    </div>
    
@endsection