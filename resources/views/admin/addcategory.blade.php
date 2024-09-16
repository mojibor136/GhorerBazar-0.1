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
            gap: 15px;
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
        <form action="{{ route('store.category') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name">
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
