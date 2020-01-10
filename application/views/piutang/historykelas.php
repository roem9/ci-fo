<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 mt-3"><?= $header?></h1>
        </div>

        <!-- <div class="row fo-13">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info">
                        <div class="row">
                            <div class="col-6">Data Kelas</div>
                        </div>
                    </li>
                    <li class="list-group-item"><i class="fa fa-male"></i> Ikhwan</li>
                    <li class="list-group-item"><i class="fa fa-female"></i> Akhwat</li>
                </ul>
            </div>
        </div> -->
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                            <a href="#" class='nav-link' id="detailKelas" data-id=""><i class="fas fa-book"></i></a>
                            </li>
                            <li class="nav-item">
                            <a href="#" class='nav-link' id="detailPeserta" data-id=""><i class="fas fa-user"></i></a>
                            </li>
                            <li class="nav-item">
                            <a href="#" class='nav-link' id="detailJadwal" data-id=""><i class="fas fa-clock"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body fo-13">
                    <ul class="list-group" id="dataKelas">
                        <li class="list-group-item list-group-item-info">Data Akademik</li>
                        <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                            Status
                            </div>
                            <div class="col-6" id="status"> 
                            
                            </div>
                        </div>
                        </li>
                        <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                            Program
                            </div>
                            <div class="col-6" id="program"> 
                            
                            </div>
                        </div>
                        </li>
                        <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                            Koordinator
                            </div>
                            <div class="col-6" id="koordinator"> 
                            
                            </div>
                        </div>
                        </li>
                        <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                            Pengajar
                            </div>
                            <div class="col-6" id="kpq"> 
                            
                            </div>
                        </div>
                        </li>
                        <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                            Tipe Pengajar
                            </div>
                            <div class="col-6" id="pengajar"> 
                            
                            </div>
                        </div>
                        </li>
                    </ul>

                    <ul class="list-group" id="dataPeserta">
                        <li class="list-group-item list-group-item-info">List Peserta <span class="badge badge-danger badge-pill" id="totalPeserta"></span></li>
                        <div id="list-peserta"></div>
                    </ul>
                    
                    <ul class="list-group" id="dataJadwal">
                        <li class="list-group-item list-group-item-info">List Jadwal</li>
                        <div id="list-jadwal"></div>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>

<script>
    $("#piutang").addClass("active")
    
    
    $("#detailKelas").addClass('active');
    $("#detailPeserta").removeClass('active');
    $("#detailJadwal").removeClass('active');
    $("#dataKelas").show();
    $("#dataPeserta").hide();
    $("#dataJadwal").hide();

    $("#detailKelas").click(function(){
        const id = $(this).data('id');
        // console.log(id)
        $.ajax({
            url : "<?=base_url()?>kelas/datakelasbyid",
            method : "POST",
            data : {id_kelas : id},
            async : true,
            dataType : 'json',
            success : function(data){
                $("#status").html(data.status);
                $("#program").html(data.program);
                $("#koordinator").html(data.nama_peserta);
                $("#kpq").html(data.nama_kpq);
                $("#pengajar").html(data.pengajar);
            }
        })

        $("#detailKelas").addClass('active');
        $("#detailPeserta").removeClass('active');
        $("#detailJadwal").removeClass('active');
        $("#dataKelas").show();
        $("#dataPeserta").hide(); 
        $("#dataJadwal").hide();
    })
    
    $("#detailPeserta").click(function(){
        const id = $(this).data('id');
        // console.log(id)
        $.ajax({
            url : "<?=base_url()?>kelas/datapesertabyid",
            method : "POST",
            data : {id_kelas : id},
            async : true,
            dataType : 'json',
            success : function(data){
                // console.log(data)
                $('#totalPeserta').html(data.length);
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<li class="list-group-item">'+data[i].nama_peserta+'</li>';
                }
                $('#list-peserta').html(html);
            }
        })

        $("#detailKelas").removeClass('active');
        $("#detailPeserta").addClass('active');
        $("#detailJadwal").removeClass('active');
        $("#dataKelas").hide();
        $("#dataPeserta").show();
        $("#dataJadwal").hide();
    })

    $("#detailJadwal").click(function(){
        const id = $(this).data('id');
        // console.log(id)
        $.ajax({
            url : "<?=base_url()?>kelas/datajadwalbyid",
            method : "POST",
            data : {id_kelas : id},
            async : true,
            dataType : 'json',
            success : function(data){
                // console.log(data)
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<li class="list-group-item">'+data[i].tempat+' ('+data[i].hari+' '+data[i].jam+')</li>';
                }
                $('#list-jadwal').html(html);
            }
        })

        $("#detailKelas").removeClass('active');
        $("#detailPeserta").removeClass('active');
        $("#detailJadwal").addClass('active');
        $("#dataKelas").hide();
        $("#dataPeserta").hide();
        $("#dataJadwal").show();
    })
</script>