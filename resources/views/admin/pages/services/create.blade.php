@extends('admin.layout.app')

@section('title', 'Admin - Create Service')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Service</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.services.store') }}">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="title">Service Title</label>
                                    <input type="text" name="name" id="title" class="form-control" value="{{ old('name') }}" required>
                                </div>

                                <div class="form-group col-6">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="category">Service Category</label>
                                    <select name="category_id" id="category" class="form-control" required>
                                        <option value="">Select Category</option>
                                        {{-- @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach --}}
                                    </select>
                                </div>

                                <div class="form-group col-6">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Service</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

