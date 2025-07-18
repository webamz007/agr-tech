@extends('admin.layout.app')

@section('title', 'Admin - Create Credit Package')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Credit Package</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.services.store') }}">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="credits">Credits</label>
                                    <input type="number" name="name" id="credits" class="form-control" value="{{ old('name') }}" required>
                                </div>

                                <div class="form-group col-6">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Package</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

