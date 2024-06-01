@extends('dashboard')
@section('Content')


<a href="#" onclick="ModalTambahKontak()" class="btn btn-success"> + Add New Data</a>


<table class="table table-bordered">
    <tr>
        <th>Kode Kontak</th>
        <th>Nama Kontak</th>
        <th>Opsi</th>
    </tr>
    @foreach($kontak as $Get)
    <tr>
        <td>{{ $Get->kd_kontak }}</td>
        <td>{{ $Get->nama_kontak }}</td>
        <td>
            <a href="#" onclick="ModalEditKontak({{ $Get->kd_kontak }} ,'{{ $Get->nama_kontak }}')"
                class="btn btn-info">Update</a>
            |
            <a href="#" onclick="ModalHapusKontak({{ $Get->kd_kontak }})" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>





<!-- Form Modal Tambah Kontak -->
<form action="kontak/tambah" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahKontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Kode Kontak</label>
                        <input type="text" class="form-control" name="kd_kontak" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Kontak</label>
                        <textarea name="nama_kontak" class="form-control" required></textarea>
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
<!-- Form Modal Tambah Kontak -->


<!-- Form Modal Hapus Kontak-->
<form action="kontak/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusKontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                <div class="modal-footer">
                    <input type="hidden" name="kd_kontak">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Hapus">
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Form Modal Hapus Kontak-->



<!-- Form Modal Edit Kontak -->
<form action="kontak/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditKontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Kode Kontak</label>
                        <input type="text" class="form-control" name="kd_kontak" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Kontak</label>
                        <input type="text" class="form-control" name="nama_kontak" required>
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
<!-- Form Modal Edit Kontak -->



<script>
// Modal Tambah Kontak
function ModalTambahKontak() {
    $('#ModalTambahKontak').modal('show');
}
// Modal Tambah Kontak


// Modal Hapus Kontak
function ModalHapusKontak($id) {
    $('[name="kd_kontak"]').val($id);
    $('#ModalHapusKontak').modal('show');
}
// Modal Tambah Kontak


// Modal Edit Kontak
function ModalEditKontak(id, nama) {

    $('[name="kd_kontak"]').val(id);
    $('[name="nama_kontak"]').val(nama);
    $('#ModalEditKontak').modal('show');
}
// Modal Edit Kontak



</script>


@endsection