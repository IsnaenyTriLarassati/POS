@if (empty($barang))
<div id="modal-master" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kesalahan</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang anda cari tidak ditemukan.
                </div>
                <a href="{{ url('/barang') }}" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>
</div>
@else
<form action="{{ url('/barang/' . $barang->barang_id . '/delete_ajax') }}" method="POST" id="form-delete">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <div id="modal-master" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data Barang</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Konfirmasi!</h5>
                        Yakin ingin menghapus data berikut?
                    </div>
                    <table class="table table-sm table-bordered">
                        <tr>
                            <th class="text-right col-3">Kategori Barang :</th>
                            <td>{{ $barang->kategori->kategori_nama }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Kode Barang :</th>
                            <td>{{ $barang->barang_kode }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Nama Barang :</th>
                            <td>{{ $barang->barang_nama }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Harga Beli :</th>
                            <td>{{ $barang->harga_beli }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Harga Jual :</th>
                            <td>{{ $barang->harga_jual }}</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
@endif
$(document).ready(function() {
    $("#form-delete").on("submit", function(e) {
        e.preventDefault();
        const form = this;

        $.ajax({
            url: form.action,
            type: 'POST',
            data: $(form).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.status) {
                    $('#modal-master').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: response.message
                    });
                    dataBarang.ajax.reload();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: response.message
                    });
                }
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Server Error',
                    text: 'Terjadi kesalahan pada server. Coba lagi nanti.'
                });
            }
        });
    });
});