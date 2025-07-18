@extends('admin.layout.app')

@section('title', 'Admin - Slots List')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Slots Management
                        </h4>
                    </div>
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('admin.slots.create') }}" class="btn btn-primary mr-4">Create Slot</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Slot Date</th>
                                    <th>Slot Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>10-10-2025</td>
                                    <td>10:00 AM</td>
                                    <td>
                                        <div class="badge badge-primary badge-shadow">Available</div>
                                    </td>
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


