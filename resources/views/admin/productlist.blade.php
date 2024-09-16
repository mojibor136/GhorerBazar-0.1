@extends('admin.dashboard')

@section('content')
    <style>
        .main {
            overflow-x: auto;
        }

        .main::-webkit-scrollbar {
            display: none;
        }

        .table-content {
            padding: 30px 20px;
            overflow-x: auto;
            max-width: 100%;
            white-space: nowrap;
        }

        .table-content::-webkit-scrollbar {
            display: none;
        }

        .table {
            width: 100%;
            max-width: 100%;
        }

        .table>:not(caption)>*>* {
            vertical-align: middle;
            font-family: 'Robot', sans-serif;
        }

        th {
            text-transform: uppercase;
            font-size: 12px;
            text-align: center;
        }

        td {
            font-size: 13px;
            font-family: 'Robot', sans-serif;
            text-align: center;
        }

        td a {
            text-decoration: none;
            font-size: 18px;
        }

        .navbar {
            padding: 10px 0;
        }

        .add-btn .btn {
            border-radius: 3px;
        }

        @media (max-width: 640px) {
            .add-btn .btn {
                display: none;
            }

            .data-search {
                width: 100%;
            }
        }
    </style>
    <div class="table-content">
        <div class="navbar">
            <div class="add-btn">
                <a href="{{ route('add.product') }}" class="btn btn-success">Add Product</a>
            </div>
            <div class="data-search">
                <form action="">
                    <input type="text" class="form-control" placeholder="Search Product..">
                </form>
            </div>
        </div>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Img</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <img src="{{ asset('Logo/man.jpg') }}" alt="" width="40">
                </td>
                <td>টমেটোতে প্রচুর ভোজ্য</td>
                <td>BDT 530</td>
                <td>20</td>
                <td>
                    <a href="">
                        <i class="ri-pencil-line"></i>
                    </a>
                    <a href="">
                        <i class="ri-close-line"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <img src="{{ asset('Logo/man.jpg') }}" alt="" width="40">
                </td>
                <td>টমেটোতে প্রচুর ভোজ্য</td>
                <td>BDT 530</td>
                <td>20</td>
                <td>
                    <a href="">
                        <i class="ri-pencil-line"></i>
                    </a>
                    <a href="">
                        <i class="ri-close-line"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <img src="{{ asset('Logo/man.jpg') }}" alt="" width="40">
                </td>
                <td>টমেটোতে প্রচুর ভোজ্য</td>
                <td>BDT 530</td>
                <td>20</td>
                <td>
                    <a href="">
                        <i class="ri-pencil-line"></i>
                    </a>
                    <a href="">
                        <i class="ri-close-line"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <img src="{{ asset('Logo/man.jpg') }}" alt="" width="40">
                </td>
                <td>টমেটোতে প্রচুর ভোজ্য</td>
                <td>BDT 530</td>
                <td>20</td>
                <td>
                    <a href="">
                        <i class="ri-pencil-line"></i>
                    </a>
                    <a href="">
                        <i class="ri-close-line"></i>
                    </a>
                </td>
            </tr>
        </table>
    </div>
@endsection
