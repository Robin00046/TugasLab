<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih Tombol Logout jika Anda Yakin.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
              this.closest('form').submit();">
                <span>Logout</span>
            </a>
        </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('sb2-admin/') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('sb2-admin/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('sb2-admin/') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('sb2-admin/') }}/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="{{ asset('sb2-admin/') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('sb2-admin/') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('sb2-admin/') }}/js/demo/datatables-demo.js"></script>