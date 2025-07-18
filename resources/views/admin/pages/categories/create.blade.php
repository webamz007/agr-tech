@extends('admin.layout.app')

@section('title', 'Admin - Create Category')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Category</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.categories.store') }}">
                            @csrf

                            <div class="form-group col-md-12">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

