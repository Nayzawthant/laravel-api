@extends('layouts.app')

@section('title', 'Form products')

@section('contents')
    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form plus product</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="item_code">code product</label>
                            <input type="text" class="form-control" id="item_code" name="item_code" value="">
                        </div>
                        <div class="form-group">
                            <label for="productname">Name product</label>
                            <input type="text" class="form-control" id="productname" name="productname" value="">
                        </div>
                        <div class="form-group">
                            <label for="id_category">Category product</label>
                            <select name="id_category" id="id_category" class="custom-select">
                                <option value="" selected disabled hidden>-- Choose Category --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">price product</label>
                            <input type="number" class="form-control" id="price" name="price" value="">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection