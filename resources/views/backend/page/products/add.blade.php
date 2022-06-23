@extends('backend.layout.main')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
    </div>
    <form action="{{route('adminAddSaveProducts')}}" method="POST" class="row" enctype="multipart/form-data">
        @csrf
        <div class="col-md-8">
            <div class="card mb-4 border-left-primary">
                <div class="card-body">
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Product Code</label>
                        <input type="text" name="product_code" class="form-control bg-dark text-light border-0 small col-md-8" required readonly value="{{"PROD-".time()}}">
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Product Name</label>
                        <input type="text" name="product_name" class="form-control bg-dark text-light border-0 small col-md-8" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Product Price</label>
                        <input type="number" name="product_price" class="form-control bg-dark text-light border-0 small col-md-8" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Product Photo</label>
                        <input type="file" name="product_photo" class="form-control-file bg-dark text-light border-0 small col-md-8" style="padding-top: 7px;" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Product Flag</label>
                        <select name="flag" class="form-control bg-dark text-light border-0 small col-md-8" required>
                            <option value="">Pilih</option>
                            <option value="0">Not Sale</option>
                            <option value="1">Sale</option>
                        </select>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control bg-dark text-light border-0 small col-md-8"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p>
                        Pastikan data yang anda masukan sudah sesuai dengan data yang diminta dan pastikan tidak kosong.
                    </p>
                    <a href="{{route('adminProducts')}}" class="btn btn-outline-danger">Batal</a>
                    <button type="submit" class="btn btn-outline-success">Simpan Data</button>
                </div>
            </div>
        </div>
    </form>
@endsection
