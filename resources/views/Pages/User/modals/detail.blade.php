<!-- Modal Add -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalDetail">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail {{ $backUrl }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="index-table" style="width: 100%">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td id="detail-name"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td id="detail-email"></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td id="detail-username"></td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td>:</td>
                                <td id="detail-level"></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>:</td>
                                <td>
                                    <img src="" alt="preview-image" id="detail-img" style="max-width: 200px;"
                                        onerror="this.src='{{ asset('images/faces/1.jpg') }}'">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
