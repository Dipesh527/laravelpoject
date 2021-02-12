@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">

            <div class="col-md-3">
                <form action="/faculties" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Faculty Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        
                    @enderror
                    <button type="submit" class="btn btn-primary mt-4">Save</button>
                </form>
            </div>
            <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            Faculty list
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-sm">
                                <tr>
                                    <th>SN</th>
                                    <th>Faculty Name</th>
                                    <th>photo</th>
                                    <th>action</th>
                                </tr>
                                @foreach ($faculties as $key => $faculty)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $faculty->name }}</td>
                                        <td></td>
                                        <td>
                                            <a href="" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                        </div>
                        
                    </div>
            </div>
        </div>
    </div>
    
@endsection