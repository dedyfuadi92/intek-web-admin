@extends('Layouts.main')


@section('styles')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
    integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
    integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('container')

<div class="page-content">

    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="col-12 pe-4">
                    <button class="btn btn-outline-primary d-flex" id="btnCreate">
                        <i class="bi bi-plus-circle" style="margin-top: 2px; margin-right: 8px;"></i>
                        <span>New {{ $backUrl }}</span>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="index-table">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td><img src="images/faces/1.jpg" alt="foto" style="max-width:50px;"></td>
                            <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->user_level->name }}</td>
                    <td>
                        <button class="btn btn-success"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                    </tr>
                    @endforeach
                    </tbody> --}}
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

@include('Pages.'.$backUrl.'.modals.create')
@include('Pages.'.$backUrl.'.modals.edit')
@include('Pages.'.$backUrl.'.modals.delete')
@include('Pages.'.$backUrl.'.modals.detail')

@section('scripts')
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
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="{{asset('vendors/simple-datatables/simple-datatables.js')}}"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('js/crud-index.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#index-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            // ajax: "{{ route($backUrl . '.list') }}",
            ajax: {
                url: "{{ route($backUrl . '.list') }}",
                type: "GET" //(untuk mendapatkan data)
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: true,
                },
                {
                    data: 'foto',
                    name: 'Foto',
                    orderable: false,
                },
                {
                    data: 'name',
                    name: 'Name',
                    orderable: true,
                },
                {
                    data: 'email',
                    name: 'Email',
                    orderable: true,
                },
                {
                    data: 'username',
                    name: 'Username',
                    orderable: true,
                },
                {
                    data: 'level',
                    name: 'Level',
                    orderable: true,
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                },
            ],
            columnDefs: [{
                targets: [0, 1],
                className: 'dt-body-center'
            }, ],
        });
        createData();
        editData();
        deleteData();
        detailData("{{ route($backUrl . '.detail', '') }}", "{{ asset('images/' . $backUrl) }}",
            '#modalDetail');
    });

    function createData() {
        initializeSummer('#form-description', 'Your New Player Description');
        imagePreview('#img', '#preview-img-before-upload');
        modalTrigger('#btnCreate', '#modalCreate');


        $('#createForm').submit(function (e) {
            e.preventDefault();
            $('.invalid-feedback').each(function (i, obj) {
                $(obj).hide();
            });
            $.ajax({
                type: 'POST',
                url: $('#createForm').attr('action'),
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    formValidateSuccess('.form-input');
                    formValidateError(response.error);
                    if (response.hasOwnProperty('success')) {
                        $('#modalCreate').modal('hide');
                        toastSuccess(response.success);
                        clearForm('#createForm', '#preview-img-before-upload',
                            '#form-description',
                            "{{ asset('stisla-master/assets/img/news/img01.jpg') }}"
                        );
                        $('#index-table').DataTable().ajax
                            .reload();
                    } else {
                        toastError();
                    }
                },
            });
        });
    }

    function editData() {
        initializeSummer('#form-description-edit', 'Your New Player Description');
        imagePreview('#img-edit', '#form-img-edit');
        getEditData("{{ route($backUrl . '.detail', '') }}", "{{ asset('images/' . $backUrl) }}", '#modalEdit');


        $('#editForm').submit(function (e) {
            e.preventDefault();
            $('.invalid-feedback').each(function (i, obj) {
                $(obj).hide();
            });
            $.ajax({
                type: 'POST',
                url: $('#editForm').attr('action'),
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    formValidateSuccess('.form-input-edit');
                    formValidateError(response.error, '-edit');
                    if (response.hasOwnProperty('success')) {
                        $('#modalEdit').modal('hide');
                        toastSuccess(response.success);
                        clearForm('#editForm', '#form-img-edit',
                            '#form-description-edit',
                            "{{ asset('stisla-master/assets/img/news/img01.jpg') }}");
                        $('#index-table').DataTable().ajax
                            .reload();
                    } else {
                        toastError();
                    }
                },
            });
        });
    }

</script>
@endsection
@endsection
