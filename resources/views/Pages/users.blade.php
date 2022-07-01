@extends('Layouts.main')

@section('container')

<div class="page-content">

    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div>
                <button type="button" class="btn btn-outline-success d-flex align-items-center px-2 ms-4">
                    <div class=" col-md-2 d-flex align-items-center">
                        <i class="bi bi-plus-circle"></i>
                    </div>
                    <div class="d-none d-sm-block col-12 pe-4">Tambah Data</div>
                </button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 3; $i++) <tr>
                            <td><img src="images/faces/1.jpg" alt="foto" style="max-width:50px;"></td>
                            <td>Muhammad Arif Saputra</td>
                            <td>arifsp8420@gmail.com</td>
                            <td>arifsp</td>
                            <td>Admin</td>
                            <td>
                                <button class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </td>
                            </tr>

                            @endfor
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <section class="basic-choices">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Choices</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h6>Basic Choices</h6>
                                    <div class="form-group d-flex">
                                        <select class="choices form-select me-3" id="dropdown_users"
                                            onchange="checkSelect()">
                                            <option value="square">Square</option>
                                            <option value="rectangle">Rectangle</option>
                                            <option value="rombo">Rombo</option>
                                        </select>
                                        <button type="button"
                                            class="btn btn-outline-success d-flex align-items-center px-3"
                                            data-bs-toggle="modal" data-bs-target="#inlineForm">
                                            <div class="col-md-2 d-flex align-items-center">
                                                <i class="bi bi-plus-circle"></i>
                                            </div>
                                            <div class="d-none d-sm-block col-12 me-3 pe-4 ms-2">new option
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Default Editor</h4>
                    </div>
                    <div class="card-body">
                        <div id="summernote"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--login form Modal -->
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">new option </h4>
                    <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x"></i>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" placeholder="option" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <span class="">Close</span>
                        </button>
                        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                            <span class="">Insert</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- summernote --}}
<script src="{{asset('vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendors/summernote/summernote-lite.min.js')}}"></script>
<script>
    $('#summernote').summernote({
        tabsize: 2,
        height: 500,
        placeholder: "start your blog!"
    })

</script>
@endsection
