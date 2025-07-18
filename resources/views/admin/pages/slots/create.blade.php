@extends('admin.layout.app')

@section('title', 'Admin - Create Slot')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Slot</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.services.store') }}">
                            @csrf

                            <div class="form-row">

                                <div class="form-group col-6">
                                    <label>Slot Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="name" id="title" class="form-control datepicker" value="{{ old('name') }}" required>
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label>Slot Time</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="name" id="title" class="form-control timepicker" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Slot</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

