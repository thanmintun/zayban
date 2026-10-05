@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Create Item</h1>
        <a href="{{route('admin.index')}}" class="btn btn-primary float-end">Back</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="">Items</a></li>
        <li class="breadcrumb-item active">Create Item</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Item
        </div>
        <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="code-no" class="form-label">Code No</label>
                <input type="text" class="form-control" name="code_no" id="code-no" >
               
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Item Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" accept="image/*" class="form-control" name="image" id="image">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>
            <div class="mb-3">
                <label for="discount" class="form-label">Discount</label>
                <input type="text" class="form-control" name="discount" id="discount">
            </div>
            <div class="mb-3">
                <label for="inStock" class="form-label">InStock</label>
                <select class="form-select" name="in_stock" id="inStock">
                    <option value="1" selected>Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    <option value="">Choose Category</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>
 <script>
      $('#description').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
@endsection