<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body fo-14">
        <form action="<?=base_url()?>piutang/hapusInvoice" method="POST">
          <ul class="list-group">
              <li class="list-group-item active">List Invoice</li>
              <div id="list-invoice"></div>
          </ul>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-danger btn-sm" value="Hapus" id="hapusInvoice">
        </div>
      </form>
    </div>
  </div>
</div>