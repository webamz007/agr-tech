@extends('admin.layout.app')

@section('title', 'Admin - Create Membership')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Membership</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.services.store') }}">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-4">
                                    <label for="title">Membership Name</label>
                                    <input type="text" name="name" id="title" class="form-control" value="{{ old('name') }}" required>
                                </div>

                                <div class="form-group col-4">
                                    <label for="price">Membership Price</label>
                                    <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
                                </div>

                                <div class="form-group col-4">
                                    <label for="service_discount">Service Discount</label>
                                    <input type="number" name="service_discount" id="service_discount" class="form-control" value="{{ old('service_discount') }}" required>
                                </div>
                            </div>

                            <div class="form-row">
                
                                <div class="form-group col-12">
                                    <label for="features">Feature List (comma-separated)</label>
                                    <textarea class="form-control" id="features" name="features" rows="3" placeholder="Feature 1, Feature 2, ..."></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Membership</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

