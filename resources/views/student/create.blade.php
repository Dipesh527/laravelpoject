@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/students" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="roll">Roll</label>
                        <input id="roll" class="form-control" type="text" name="roll">
                    </div>  
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input id="address" class="form-control" type="text" name="address">
                    </div>
                    <div class="form-group">
                        <label for="city">city</label>
                        <input id="city" class="form-control" type="text" name="city">
                    </div>
                    <div class="form-group">
                        <label for="faculty">Faculty</label>
                        <select id="faculty" class="form-control" name="faculty">
                            @foreach ($faculties as $faculty)
                                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                            @endforeach
                                
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dob">DOB</label>
                        <input id="dob" class="form-control" type="date" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="image">Upload</label>
                        <input id="image" class="form-control-file" type="file" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection