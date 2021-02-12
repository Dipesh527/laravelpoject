@extends('admin.templates.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="/students/create" class="btn btn-primary">Add Student</a>
                    <a href="/students" class="btn btn-primary" > Student Details</a>
            
                    <a href="/faculties/create" class="btn btn-primary">Add Faculty</a>
                    <a href="/faculties" class="btn btn-primary" > Faculty Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
