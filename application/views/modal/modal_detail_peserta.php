<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        <form action="<?=base_url()?>peserta/edit" method="post">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a href="#" class='nav-link' id="akademik" data-id=""><i class="fas fa-book"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class='nav-link' id="diri" data-id=""><i class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class='nav-link' id="alamat" data-id=""><i class="fas fa-map-marker-alt"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class='nav-link' id="job" data-id=""><i class="fas fa-briefcase"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class='nav-link' id="ortu" data-id=""><i class="fas fa-heart"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <input type="hidden" name="id_peserta" id="id_peserta">
                    <div class="form-detail" id="dataDiri">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input class='form-control form-control-sm' type="text" name="nama" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label></td>
                            <input class='form-control form-control-sm' type="text" name="no_hp" id="no_hp">
                        </div>
                        <div class="form-group">
                            <label for="t4_lahir">Tempat Lahir</label>
                            <input class='form-control form-control-sm' type="text" name="t4_lahir" id="t4_lahir">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input class='form-control form-control-sm' type="date" name="tgl_lahir" id="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label for="jk">Gender</label>
                            <select name="jk" id="jk" class='form-control form-control-sm'>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <select name="pendidikan" id="pendidikan" class='form-control form-control-sm'>
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
                            <label for="status_nikah">Status Menikah</label>
                            <select name="status_nikah" id="status_nikah" class='form-control form-control-sm'>
                                <option value="">Pilih Status</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-detail" id="dataAkademik">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control form-control-sm">
                                <option value="">Pilih Status</option>
                                <option value="aktif">Aktif</option>
                                <option value="wl">WL</option>
                                <option value="nonaktif">Nonaktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="program">Program</label>
                            <select name="program" id="program" class="form-control form-control-sm">
                                <option value="">Pilih Program</option>
                                <option value="Pra Tahsin 1">Pra Tahsin 1</option>
                                <option value="Pra Tahsin 2">Pra Tahsin 2</option>
                                <option value="Pra Tahsin 3">Pra Tahsin 3</option>
                                <option value="Tahsin 1">Tahsin 1</option>
                                <option value="Tahsin 2">Tahsin 2</option>
                                <option value="Tahsin 3">Tahsin 3</option>
                                <option value="Tahsin 4">Tahsin 4</option>
                                <option value="Tahsin Lanjutan">Tahsin Lanjutan</option>
                                <option value="Tahfidz Anak">Tahfidz Anak</option>
                                <option value="Tahfidz Dewasa">Tahfidz Dewasa</option>
                                <option value="Bahasa Arab 1">Bahasa Arab 1</option>
                                <option value="Bahasa Arab 2">Bahasa Arab 2</option>
                                <option value="Bahasa Arab 3">Bahasa Arab 3</option>
                                <option value="Bahasa Arab 4">Bahasa Arab 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <select name="hari" id="hari" class="form-control form-control-sm">
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
                            <label for="jam">Jam</label>
                            <select name="jam" id="jam" class="form-control form-control-sm">
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
                            <label for="tempat">Tempat Belajar</label>
                            <textarea name="tempat" id="tempat" class="form-control form-control-sm"></textarea>
                        </div>
                    </div>
                    <div class="form-detail" id="dataAlamat">
                        <div class="form-group">
                            <label for="alamat_peserta">Alamat</label>
                            <textarea class='form-control form-control-sm' name="alamat_peserta" id="alamat_peserta" rows="3"></textarea>
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
                    </div>
                    <div class="form-detail" id="dataJob">
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control form-control-sm" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama_instansi">Nama Instansi</label>
                            <input type="text" name="nama_instansi" id="nama_instansi" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="alamat_instansi">Alamat Instansi</label>
                            <textarea name="alamat_instansi" id="alamat_instansi" rows="3" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="telp_instansi">No. Telepon</label>
                            <input type="text" name="telp_instansi" id="telp_instansi" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="form-detail" id="dataOrtu">
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="t4_lahir_ibu">Tempat Lahir</label>
                            <input type="text" name="t4_lahir_ibu" id="t4_lahir_ibu" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir_ibu">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir_ibu" id="tgl_lahir_ibu" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="nama_ayah">Nama Ayah</label>
                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="t4_lahir_ayah">Tempat Lahir</label>
                            <input type="text" name="t4_lahir_ayah" id="t4_lahir_ayah" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir_ayah">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir_ayah" id="tgl_lahir_ayah" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-sm btn-primary btn-block" value="Update" id="editPeserta">
            </div>
        </form>
    </div>
  </div>
</div>