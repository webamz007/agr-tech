@extends('admin.layout.app')

@section('title', 'Admin - Bookings List')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Bookings List
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Slot Date</th>
                                    <th>Slot Time</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John</td>
                                    <td>john@gmail.com</td>
                                    <td>10-08-2025</td>
                                    <td>12:00 AM</td>
                                    <td>
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


