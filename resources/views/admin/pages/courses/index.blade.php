@extends('admin.layout.app')

@section('title', 'Admin - Courses List')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Courses Management
                        </h4>
                    </div>
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('admin.courses.create') }}" class="btn btn-primary mr-4">Create Course</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Title</th>
                                    <th>Duration</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Advanced Web Development</td>
                                    <td>8 weeks</td>
                                    <td>Intermediate</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


