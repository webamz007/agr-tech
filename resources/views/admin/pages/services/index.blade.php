@extends('admin.layout.app')

@section('title', 'Admin - Services List')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Services Management
                        </h4>
                    </div>
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('admin.services.create') }}" class="btn btn-primary mr-4">Create Service</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service Title</th>
                                    <th>Service Category</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Basic Website</td>
                                    <td>Website Development</td>
                                    <td>Here is the Description</td>
                                    <td>$499</td>
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


