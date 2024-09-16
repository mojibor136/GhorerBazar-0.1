@extends('admin.dashboard')

@section('content')
    <style>
        .form-content {
            padding: 70px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .form-content form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .form-group label {
            font-family: 'Roboto', sans-serif;
        }

        .form-group .button {
            display: flex;
            justify-content: flex-end;
        }

        .form-group .button .btn {
            border-radius: 3px;
            width: 30%;
        }

        @media (max-width: 640px) {
            .form-content {
                padding: 20px;
                max-height: 80vh;
            }

            .form-group .button .btn {
                border-radius: 3px;
                width: 100%;
            }
        }
    </style>
    <div class="form-content">
        <form action="{{ route('store.product') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Description" name="desc">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <label for="exampleSelect">Category</label>
                <select class="form-control" id="exampleSelect" name="categoryId">
                    <option value="1">হাইব্রিড ফুলকপি</option>
                    <option value="1">মিস্টি কুমড়া</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelect">SubCategory</label>
                <select class="form-control" id="exampleSelect" name="subcategoryId">
                    <option value="1">হাইব্রিড ফুলকপি</option>
                    <option value="1">মিস্টি কুমড়া</option>
                </select>
            </div>
            <div class="form-group">
                <div>
                    <label for="formFileDisabled" class="form-label mb-1">Add Image</label>
                    <input class="form-control" type="file" id="formFileDisabled" name="image" />
                </div>
            </div>
            <div class="form-group">
                <div class="button">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </div>
        </form>
    </div>
@endsection
