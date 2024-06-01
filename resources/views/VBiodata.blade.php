@extends('dashboard')
@section('Content')


<a href="#" onclick="ModalTambahBiodata()" class="btn btn-success"> + Add New Data</a>


<table class="table table-bordered">
    <tr>
        <th>Kode Biodata</th>
        <th>Nama Biodata</th>
        <th>Opsi</th>
    </tr>
    @foreach($biodata as $Get)
    <tr>
        <td>{{ $Get->kd_biodata }}</td>
        <td>{{ $Get->nama_biodata }}</td>
        <td>
            <a href="#" onclick="ModalEditBiodata({{ $Get->kd_biodata }} ,'{{ $Get->nama_biodata }}')"
                class="btn btn-info">Update</a>
            |
            <a href="#" onclick="ModalHapusBiodata({{ $Get->kd_biodata }})" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>





<!-- Form Modal Tambah Biodata -->
<form action="biodata/tambah" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahBiodata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Kode Biodata</label>
                        <input type="text" class="form-control" name="kd_biodata" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Biodata</label>
                        <textarea name="nama_biodata" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Form Modal Tambah Biodata -->


<!-- Form Modal Hapus Biodata-->
<form action="biodata/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusBiodata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                <div class="modal-footer">
                    <input type="hidden" name="kd_biodata">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Hapus">
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Form Modal Hapus Biodata-->



<!-- Form Modal Edit Biodata -->
<form action="biodata/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditBiodata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Kode Biodata</label>
                        <input type="text" class="form-control" name="kd_biodata" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Biodata</label>
                        <input type="text" class="form-control" name="nama_biodata" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Form Modal Edit Biodata -->



<script>
// Modal Tambah Biodata
function ModalTambahBiodata() {
    $('#ModalTambahBiodata').modal('show');
}
// Modal Tambah Biodata


// Modal Hapus Biodata
function ModalHapusBiodata($id) {
    $('[name="kd_biodata"]').val($id);
    $('#ModalHapusBiodata').modal('show');
}
// Modal Tambah Biodata


// Modal Edit Biodata
function ModalEditBiodata(id, nama) {

    $('[name="kd_biodata"]').val(id);
    $('[name="nama_biodata"]').val(nama);
    $('#ModalEditBiodata').modal('show');
}
// Modal Edit Biodata



</script>


@endsection