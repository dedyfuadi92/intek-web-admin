<!-- Modal Add -->
<div class="modal fade" role="dialog" id="modalCreate">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New {{ $backUrl }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="createForm" novalidate method="POST" action="{{ route($backUrl . '.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control form-input" id="form-name"
                                            required>
                                        <div class="invalid-feedback" id="error-name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-email" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control form-input" id="form-email"
                                            required>
                                        <div class="invalid-feedback" id="error-email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control form-input"
                                            id="form-username" required>
                                        <div class="invalid-feedback" id="error-username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control form-input"
                                            id="form-password" required>
                                        <div class="invalid-feedback" id="error-password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <label for="form-level" class="form-label">Level</label>
                                        <select name="level" id="form-level" class="form-control form-input select2">
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
                                    <label for="img" class="form-label">Image</label>
                                </div>
                                <div class="col-12">
                                    <input type="file" name="img" placeholder="Choose image" id="img" class="mb-2">
                                    <div class="invalid-feedback" id="error-img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <img id="preview-img-before-upload" src="{{ asset('images\faces\1.jpg') }}"
                                        alt="preview img" style="max-height: 250px;" class="img-fluid form-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btn-tambah">Tambah Data</button>
                </div>
            </form>

        </div>
    </div>
</div>
