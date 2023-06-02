@extends('layout')

@section('title')
    Charity | Dashboard
@endsection

@section('style_css')
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')

    <body style="background: lightgray">

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <!-- charity_new adalah nama file view -->
                            <a href="#" class="btn btn-md btn-success mb-3">
                                Tambah Charity</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Charity Image</th>
                                        <th scope="col">Charity Name</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($charity as $charity)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ $charity->charity_img }}" class="rounded"
                                                    style="width:  150px">
                                            </td>
                                            <td>{{ $charity->charity_title }}</td>
                                            <td>{{ $charity->type->type_name }}</td>
                                            <td>{{ $charity->category->category_name }}</td>
                                            <td>{{ $charity->charity_location }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin?');" action="#"
                                                    method="POST">
                                                    <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                                </form>
                                            </td>

                                        </tr>

                                    @empty
                                        <div class="alert alert-danger">
                                            Data belum tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{-- {{ $charity->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            //message with toaster
            @if (session()->has('success'))

                toastr.success('{{ session('success') }}', 'Success!');
            @elseif (session()->has('error'))

                toastr.error('{{ session('error') }}', 'Failed');
            @endif
        </script>

    </body>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="js/listActivity.js"></script>
@endsection
