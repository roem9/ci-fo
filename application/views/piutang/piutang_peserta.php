<?php
    function rupiah($angka){
        
        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $hasil_rupiah;
    }
?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 mt-3"><?= $header?></h1>
          </div>

          
          <?php if( $this->session->flashdata('piutang') ) : ?>
              <div class="row">
                  <div class="col-6">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          Data piutang <strong>berhasil</strong> <?= $this->session->flashdata('piutang');?>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  </div>
              </div>
          <?php endif; ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4" style="max-width: 900px;">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link <?php if($tabs == 'reguler') echo 'active'?>" href="<?= base_url()?>piutang/reguler">Reguler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($tabs == 'pvkhusus') echo 'active'?>" href="<?= base_url()?>piutang/pvkhusus">Pv Khusus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($tabs == 'pvluar') echo 'active'?>" href="<?= base_url()?>piutang/pvluar">Pv Luar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($tabs == 'event') echo 'active'?>" href="<?= base_url()?>piutang/event">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($tabs == 'instansi') echo 'active'?>" href="<?= base_url()?>piutang/instansi">Instansi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($tabs == 'kpq') echo 'active'?>" href="<?= base_url()?>piutang/kpq">KPQ</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-sm fo-13" id="dataTable" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Status</th>
                      <th>Nama Peserta</th>
                      <th>Program</th>
                      <th>Hari</th>
                      <th>Waktu</th>
                      <th>Pengajar</th>
                      <th>Invoice</th>
                      <th>Piutang</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Status</th>
                      <th>Nama Peserta</th>
                      <th>Program</th>
                      <th>Hari</th>
                      <th>Waktu</th>
                      <th>Pengajar</th>
                      <th>Invoice</th>
                      <th>Piutang</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    $no = 0;
                    foreach ($piutang as $piutang) :?>
                        <tr>
                            <td><?= ++$no?></td>
                            <td><?= $piutang['status']?></td>
                            <td><?= $piutang['nama_peserta']?></td>
                            <td><?= $piutang['program']?></td>
                            <td><?= $piutang['hari']?></td>
                            <td><?= $piutang['jam']?></td>
                            <td><?= $piutang['nama_kpq']?></td>
                            <td><center><a href="#" class="badge badge-danger modalInvoice" data-toggle="modal" data-target="#exampleModalScrollable" data-id="<?= $piutang['id_peserta']?>"><?= $piutang['invoice']?></a></center></td>
                            <td class="bg-danger text-white"><?= rupiah($piutang['piutang'])?></td>
                        </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

<script>
    $("#piutang").addClass("active");
    $(".modalInvoice").click(function(){
        const id = $(this).data('id');
        $.ajax({
            url : "<?=base_url()?>piutang/getinvoicepeserta",
            method : "POST",
            data : {id_peserta : id},
            async : true,
            dataType : 'json',
            success : function(data){
                $("#exampleModalScrollableTitle").html(data[0].nama_peserta);
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<li class="list-group-item list-group-item-danger">'+
                        '<div class="row">'+
                            '<div class="col-3"><input type="checkbox" class="ce" id="id_invoice['+i+']" name="id_invoice[]" value="'+data[i].id_invoice+'"><label for="id_invoice['+i+']">'+
                                data[i].tgl_invoice+
                              '</label></div>'+
                            '<div class="col-6">'+
                                data[i].uraian+
                            '</div>'+
                            '<div class="col-3">'+
                                formatRupiah(data[i].nominal, 'Rp. ')+
                            '</div>'+
                        '</div>'+
                    '</li>';
                }
                $('#list-invoice').html(html);
            }
        })
    })

    $("#hapusInvoice").click(function(){
      var count = $("input[name='id_invoice[]']").filter(":checked").length;
      if (count == 0){
        Swal.fire({
                icon: 'error',
                text: 'Harap memilih data terlebih dahulu'
            })
            return false;
        } else {
            var c = confirm('Yakin akan menghapus data?')
            return c;
        }
    })
</script>