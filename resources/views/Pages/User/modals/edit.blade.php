<!-- Modal Add -->
<div class="modal fade" role="dialog" id="modalEdit">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New {{ $backUrl }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editForm" novalidate method="POST" action="{{ route($backUrl . '.update') }}"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="form-id-edit" value="" name="id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-name-edit" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control form-input-edit"
                                            id="form-name-edit" required>
                                        <div class="invalid-feedback" id="error-name-edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-email-edit" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control form-input-edit"
                                            id="form-email-edit" required>
                                        <div class="invalid-feedback" id="error-email-edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-username-edit" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control form-input-edit"
                                            id="form-username-edit" required>
                                        <div class="invalid-feedback" id="error-username-edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-password-edit" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control form-input-edit"
                                            id="form-password-edit" required>
                                        <div class="invalid-feedback" id="error-password-edit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <label for="form-level-edit" class="form-label">Level</label>
                                        <select name="level" id="form-level-edit"
                                            class="form-control form-input-edit select2">
                                            @if (count((array)$user_level))
                                            <option class="d-none" disabled value="" selected>Pilih Level User</option>
                                            @endif
                                            @forelse ($user_level as $level)
                                            <option value="{{ $level->id }}">{{ $level->name }}</option>
                                            @empty
                                            <option disabled>Tambah User Level Dahulu</option>
                                            @endforelse
                                        </select>
                                        <div class="invalid-feedback" id="error-level">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group mt-3">
                                <div class="col-12">
                                    <label for="img" class="form-label-edit">Image</label>
                                </div>
                                <div class="col-12">
                                    <input type="file" name="img" placeholder="Choose image" id="img-edit" class="mb-2">
                                    <div class="invalid-feedback" id="error-img-edit">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <img id="form-img-edit" src="{{ asset('images\faces\1.jpg') }}" alt="preview img"
                                        onerror="this.src='images/faces/1.jpg'" style="max-height: 250px;"
                                        class="img-fluid form-input-edit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btn-ubah">Ubah Data</button>
                </div>
            </form>

        </div>
    </div>
</div>
