@extends('admin.layout.app')

@section('title', 'Admin - Update Course')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Course</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">Course Title</label>
                                    <input type="text" class="form-control" name="title" id="title" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="duration">Duration</label>
                                    <input type="text" class="form-control" name="duration" id="duration" placeholder="e.g. 4 weeks">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="level">Level</label>
                                    <select class="form-control" name="level" id="level" required>
                                        <option value="">Select Level</option>
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="advanced">Advanced</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="image">Course Image</label>
                                    <input type="file" class="form-control" name="image" id="image" onchange="previewImage(event)">
                                    
                                    <div class="mt-2">
                                        <img id="imagePreview" src="https://fastly.picsum.photos/id/222/200/200.jpg?hmac=GngU-e1fHxK6MMBinwEkzsh8sMkjssl_vp8G6vJrb8U" class="img-thumbnail" style="max-height: 150px;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Course Description</label>
                                <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Course</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection