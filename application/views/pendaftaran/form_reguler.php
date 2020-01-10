<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-6">
                <?php if( $this->session->flashdata('peserta') ) : ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data pendaftar <strong>berhasil</strong> <?= $this->session->flashdata('peserta');?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 mt-3"><?= $header?></h1>
                </div>
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link <?php if($tabs == 'reguler') echo 'active'?>" href="<?= base_url()?>pendaftaran/reguler">Reguler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($tabs == 'pvkhusus') echo 'active'?>" href="<?= base_url()?>pendaftaran/pvkhusus">Pv Khusus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($tabs == 'pvluar') echo 'active'?>" href="<?= base_url()?>pendaftaran/pvluar">Pv Luar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($tabs == 'event') echo 'active'?>" href="<?= base_url()?>pendaftaran/event">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($tabs == 'pvinstansi') echo 'active'?>" href="<?= base_url()?>pendaftaran/pvinstansi">Instansi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body pt-2">
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 0%" aria-valuemin="0" aria-valuemax="100" id="progress">0%</div>
                        </div>
                        <form action="<?= base_url()?>pendaftaran/tambahreguler" method="post">
                            
                            <div class="card" id="dataAkademik">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary mb-1"><i class="fa fa-book"></i> &nbsp;Data Akademik</h6>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" name="tipe_peserta" value="<?= $tipe?>">
                                    <div class="form-group">
                                        <label for="program">Program <span class="text-danger">*</span></label>
                                        <select name="program" id="program" class="form-control form-control-sm" required>
                                            <option value="">Pilih Program</option>
                                            <?php foreach ($program as $program) :?>
                                                <option value="<?=$program['nama_program']?>"><?=$program['nama_program']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="hari">Hari <span class="text-danger">*</span></label>
                                        <select name="hari" id="hari" class="form-control form-control-sm" required>
                                            <option value="">Pilih Hari</option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Ahad">Ahad</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jam">Jam <span class="text-danger">*</span></label>
                                        <select name="jam" id="jam" class="form-control form-control-sm" required>
                                            <option value="">Pilih Jam</option>
                                            <option value="05.00-06.30">05.00-06.30</option>
                                            <option value="05.30-07.00">05.30-07.00</option>
                                            <option value="06.00-07.30">06.00-07.30</option>
                                            <option value="06.30-08.00">06.30-08.00</option>
                                            <option value="07.00-08.30">07.00-08.30</option>
                                            <option value="07.30-09.00">07.30-09.00</option>
                                            <option value="08.00-09.30">08.00-09.30</option>
                                            <option value="08.30-10.00">08.30-10.00</option>
                                            <option value="09.00-10.30">09.00-10.30</option>
                                            <option value="09.30-11.00">09.30-11.00</option>
                                            <option value="10.00-11.30">10.00-11.30</option>
                                            <option value="10.30-12.00">10.30-12.00</option>
                                            <option value="11.00-12.30">11.00-12.30</option>
                                            <option value="11.30-13.00">11.30-13.00</option>
                                            <option value="12.00-13.30">12.00-13.30</option>
                                            <option value="12.30-14.00">12.30-14.00</option>
                                            <option value="13.00-14.30">13.00-14.30</option>
                                            <option value="13.30-15.00">13.30-15.00</option>
                                            <option value="14.00-15.30">14.00-15.30</option>
                                            <option value="14.30-16.00">14.30-16.00</option>
                                            <option value="15.00-16.30">15.00-16.30</option>
                                            <option value="15.30-17.00">15.30-17.00</option>
                                            <option value="16.00-17.30">16.00-17.30</option>
                                            <option value="16.30-18.00">16.30-18.00</option>
                                            <option value="17.00-18.30">17.00-18.30</option>
                                            <option value="17.30-19.00">17.30-19.00</option>
                                            <option value="18.00-19.30">18.00-19.30</option>
                                            <option value="18.30-20.00">18.30-20.00</option>
                                            <option value="19.00-20.30">19.00-20.30</option>
                                            <option value="19.30-21.00">19.30-21.00</option>
                                            <option value="20.00-21.30">20.00-21.30</option>
                                            <option value="20.30-22.00">20.30-22.00</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat">Tempat Belajar <span class="text-danger">*</span></label>
                                        <textarea name="tempat" id="tempat" class="form-control form-control-sm" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="info">Informasi <span class="text-danger">*</span></label>
                                        <select name="info" id="info" class="form-control form-control-sm" required>
                                            <option value="">Pilih Informasi</option>
                                            <option value="Teman">Teman</option>
                                            <option value="Spanduk">Spanduk</option>
                                            <option value="Media Elektronik">Media Elektronik</option>
                                            <option value="Civitas Tar-Q">Civitas Tar-Q</option>
                                            <option value="Brosur">Brosur</option>
                                            <option value="Peserta">Peserta</option>
                                            <option value="Event">Event</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-success btn-sm" id="nextDiri"><i class="fa fa-arrow-right"></i> Data Diri</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="dataDiri">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary mb-1"><i class="fa fa-user"></i> &nbsp;Data Diri</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_peserta">Nama Lengkap <span class="text-danger">*</span></label>
                                        <input class='form-control form-control-sm' type="text" name="nama_peserta" id="nama_peserta" required autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No Handphone</label>
                                        <input class='form-control form-control-sm' type="text" name="no_hp" id="no_hp" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="t4_lahir">Tempat Lahir</label>
                                        <input class='form-control form-control-sm' type="text" name="t4_lahir" id="t4_lahir" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input class='form-control form-control-sm' type="date" name="tgl_lahir" id="tgl_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="umur">Umur</label></th>
                                        <input type="text" name="umur" id="umur" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Gender <span class="text-danger">*</span></label>
                                        <select name="jk" id="jk" class='form-control form-control-sm' required>
                                            <option value="">Pilih Gender</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan <span class="text-danger">*</span></label>
                                        <select name="pendidikan" id="pendidikan" class='form-control form-control-sm' required>
                                            <option value="">Pilih Pendidikan</option>
                                            <option value="SD/Sederajat">SD/Sederajat</option>
                                            <option value="SMP/Sederajat">SMP/Sederajat</option>
                                            <option value="SMA/Sederajat">SMA/Sederajat</option>
                                            <option value="Diploma I/II/III">Diploma I/II/III</option>
                                            <option value="S1/S2/S3">S1/S2/S3</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_nikah">Status Menikah <span class="text-danger">*</span></label>
                                        <select name="status_nikah" id="status_nikah" class='form-control form-control-sm' required>
                                            <option value="">Pilih Status</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Janda/Duda">Janda/Duda</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="btn btn-success btn-sm" id="backAkademik"><i class="fa fa-arrow-left"></i> Data Akademik</a>
                                        <a href="#" class="btn btn-success btn-sm" id="nextAlamat"><i class="fa fa-arrow-right"></i> Data Alamat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="dataAlamat">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary mb-1"><i class="fa fa-map-marker-alt"></i> &nbsp;Data Alamat</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                        <textarea class='form-control form-control-sm' name="alamat" id="alamat" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="kel">Kelurahan</label>
                                        <input type="text" name="kel" id="kel" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="kd_pos">Kode Pos</label>
                                        <input type="text" name="kd_pos" id="kd_pos" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="kec">Kecamatan</label>
                                        <input type="text" name="kec" id="kec" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="kab_kota">Kabupaten / Kota</label>
                                        <input type="text" name="kab_kota" id="kab_kota" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <input type="text" name="provinsi" id="provinsi" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_telp">No. Telepon</label>
                                        <input type="text" name="no_telp" id="no_telp" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="text" name="email" id="email" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="btn btn-success btn-sm" id="backDiri"><i class="fa fa-arrow-left"></i> Data Diri</a>
                                        <a href="#" class="btn btn-success btn-sm" id="nextPekerjaan"><i class="fa fa-arrow-right"></i> Data Pekerjaan</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="dataPekerjaan">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary mb-1"><i class="fa fa-map-marker-alt"></i> &nbsp;Data Pekerjaan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan <span class="text-danger">*</span></label>
                                        <select name="pekerjaan" id="pekerjaan" class="form-control form-control-sm" required>
                                            <option value="">Pilih Pekerjaan</option>
                                            <option value="Pelajar">Pelajar</option>
                                            <option value="Mahasiswa">Mahasiswa</option>
                                            <option value="Swasta">Swasta</option>
                                            <option value="PNS/BUMN">PNS/BUMN</option>
                                            <option value="TNI/POLRI">TNI/POLRI</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_perusahaan">Nama Instansi</label>
                                        <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_perusahaan">Alamat Instansi</label>
                                        <textarea name="alamat_perusahaan" id="alamat_perusahaan" rows="3" class="form-control form-control-sm"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_telp_perusahaan">No. Telepon</label>
                                        <input type="text" name="no_telp_perusahaan" id="no_telp_perusahaan" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="btn btn-success btn-sm" id="backAlamat"><i class="fa fa-arrow-left"></i> Data Alamat</a>
                                        <a href="#" class="btn btn-success btn-sm" id="nextOrtu"><i class="fa fa-arrow-right"></i> Data Ortu</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="dataOrtu">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary mb-1"><i class="fa fa-map-marker-alt"></i> &nbsp;Data Orang Tua</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_ibu">Nama Ibu <span class="text-danger">*</span></label>
                                        <input type="text" name="nama_ibu" id="nama_ibu" class="form-control form-control-sm" autocomplete="off" autocorrect="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="t4_lahir_ibu">Tempat Lahir</label>
                                        <input type="text" name="t4_lahir_ibu" id="t4_lahir_ibu" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir_ibu">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir_ibu" id="tgl_lahir_ibu" class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_ayah">Nama Ayah <span class="text-danger">*</span></label>
                                        <input type="text" name="nama_ayah" id="nama_ayah" class="form-control form-control-sm" autocomplete="off" autocorrect="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="t4_lahir_ayah">Tempat Lahir</label>
                                        <input type="text" name="t4_lahir_ayah" id="t4_lahir_ayah" class="form-control form-control-sm" autocomplete="off" autocorrect="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir_ayah">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir_ayah" id="tgl_lahir_ayah" class="form-control form-control-sm">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="btn btn-success btn-sm" id="backPekerjaan"><i class="fa fa-arrow-left"></i> Data Pekerjaan</a>
                                        <button type="submit" class="btn btn-primary btn-sm" id="tambah">Tambah Peserta</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#tambahPeserta").addClass("active");
    $("#dataDiri").hide();
    $("#dataAlamat").hide();
    $("#dataPekerjaan").hide();
    $("#dataOrtu").hide();

    //data akademik
    $("#nextDiri").click(function(){
        if($("#tipe_peserta").val() == '' || $("#program").val() == '' || $("#hari").val() == '' || $("#jam").val() == '' || $("#tempat").val() == '' || $("#info").val() == ''){
            Swal.fire({
                icon: 'error',
                text: 'Harap mengisi yang bertanda *'
            })
        } else {
            $("#progress").css("width", "25%");
            $("#progress").html("25%");
            $("#dataAkademik").hide();
            $("#dataDiri").show();
            $("#dataAlamat").hide();
            $("#dataPekerjaan").hide();
            $("#dataOrtu").hide();
        }
    })

    //data diri
    $("#backAkademik").click(function(){
        $("#progress").css("width", "0%");
        $("#progress").html("0%");
        $("#dataAkademik").show();
        $("#dataDiri").hide();
        $("#dataAlamat").hide();
        $("#dataPekerjaan").hide();
        $("#dataOrtu").hide();
    })

    $("#nextAlamat").click(function(){
        if($("#nama_peserta").val() == '' || $("#jk").val() == '' || $("#pendidikan").val() == '' || $("#status_nikah").val() == ''){
            Swal.fire({
                icon: 'error',
                text: 'Harap mengisi yang bertanda *'
            })
        } else {
            $("#progress").css("width", "50%");
            $("#progress").html("50%");
            $("#dataAkademik").hide();
            $("#dataDiri").hide();
            $("#dataAlamat").show();
            $("#dataPekerjaan").hide();
            $("#dataOrtu").hide();
        }
    })

    // data alamat
    $("#backDiri").click(function(){
        $("#progress").css("width", "25%");
        $("#progress").html("25%");
        $("#dataAkademik").hide();
        $("#dataDiri").show();
        $("#dataAlamat").hide();
        $("#dataPekerjaan").hide();
        $("#dataOrtu").hide();
    })

    $("#nextPekerjaan").click(function(){
        if($("#alamat").val() == ''){
            Swal.fire({
                icon: 'error',
                text: 'Harap mengisi yang bertanda *'
            })
        } else {
            $("#progress").css("width", "75%");
            $("#progress").html("75%");
            $("#dataAkademik").hide();
            $("#dataDiri").hide();
            $("#dataAlamat").hide();
            $("#dataPekerjaan").show();
            $("#dataOrtu").hide();
        }
    })
    
    //data pekerjaan
    $("#backAlamat").click(function(){
        $("#progress").css("width", "50%");
        $("#progress").html("50%");
        $("#dataAkademik").hide();
        $("#dataDiri").hide();
        $("#dataAlamat").show();
        $("#dataPekerjaan").hide();
        $("#dataOrtu").hide();
    })
    

    $("#nextOrtu").click(function(){
        if($("#pekerjaan").val() == ''){
            Swal.fire({
                icon: 'error',
                text: 'Harap mengisi yang bertanda *'
            })
        } else {
            $("#progress").css("width", "100%");
            $("#progress").html("100%");
            $("#dataAkademik").hide();
            $("#dataDiri").hide();
            $("#dataAlamat").hide();
            $("#dataPekerjaan").hide();
            $("#dataOrtu").show();
        }
    })

    // data ortu
    $("#backPekerjaan").click(function(){
        $("#progress").css("width", "75%");
        $("#progress").html("75%");
        $("#dataAkademik").hide();
        $("#dataDiri").hide();
        $("#dataAlamat").hide();
        $("#dataPekerjaan").show();
        $("#dataOrtu").hide();
    })

    $("#tambah").click(function(){
        if($("#nama_ayah").val() == '' || $("#nama_ibu").val() == ''){
            Swal.fire({
                icon: 'error',
                text: 'Harap mengisi yang bertanda *'
            })
        } else {
            var c = confirm('Yakin akan menambahkan data?')
            return c;
        }
    })

</script>