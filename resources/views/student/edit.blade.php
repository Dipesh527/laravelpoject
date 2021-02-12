@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <form action="/students/{{ $student->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $student->name  }}">
                </div>
                <div class="form-group">
                    <label for="roll">Roll</label>
                    <input id="roll" class="form-control" type="text" name="roll" value="{{ $student->roll  }}">
                </div>  
                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" class="form-control" type="text" name="address" value="{{ $student->address  }}">
                </div>
                <div class="form-group">
                    <label for="city">city</label>
                    <input id="city" class="form-control" type="text" name="city" value="{{ $student->city  }}">
                </div>
                <div class="form-group">
                    <label for="faculty">faculty</label>
                    <select id="faculty" class="form-control" name="faculty" value="{{ $student->faculty }}">
                        <option value="1">science</option>
                        <option value="2">commerce</option>
                        <option value="3">education</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dob">DOB</label>
                    <input id="dob" class="form-control" type="date" name="dob" value="{{ $student->dob  }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
@endsection