 <div id="blue">
    <div class="container">
      <div class="row">
        <h3>Pendaftaran</h3>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /blue -->


  <!-- *****************************************************************************************************************
   CONTACT FORMS
   ***************************************************************************************************************** -->

  <div class="container mtb">
    <div class="row">
      <div class="col-lg-8">
        <h4>Lengkapi Data Diri Berikut:</h4>
        <div class="hline"></div>
        <p>Pastikan data yang anda masukkan adalah da.</p>
        <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

                          <fieldset>
                                    <table border="0" cellspacing="20" width="800" align="center">
                                    <tbody>

                                    <tr>
                                       <td><font color="black"><strong>NIK</strong></font></td>
                                       <td><input type="text" name="nik" placeholder="Masukan NIK" size="50" maxlength="30" autocomplete="off" autofocus/></td>
                                    </tr>

                                    <tr>
                                       <td><font color="black"><strong>NIS</strong></font></td>
                                       <td><input type="text" name="nis" placeholder="Masukan Nomor Induk Siswa" size="50" maxlength="30" autocomplete="off" autofocus/></td>
                                    </tr>

                                    <tr>
                                       <td><font color="black"><strong>Nama</strong></font></td>                                      
                                       <td><input type="text" name="name" placeholder="Masukan Nama Lengkap" size="50" maxlength="30" autocomplete="off" autofocus/></td>
                                    </tr>

                                   <tr>
                                     <td><font color="black"><strong>Tanggal Lahir</strong></font></td>
                                     <td><input type="date" name="tanggal" /></td>                              
                                    </tr>  


                                    <tr>
                                       <td><font color="black"><strong>Usia</strong></font></td>
                                       <td><input type="number" min="10" max="90" name="umur"/></td>
                            

                                    </tr>  

                                     <tr>
                                       <td><font color="black"><strong>Jenis kelamin</strong></font></td>
                                       <td><p><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki
                                       <input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</p></td>
                                   

                                    </tr>  

                                     <tr>
                                       <td><font color="black"><strong>Asal Sekolah</strong></font></td>
                                       <td><input type="text" name="sekolah" placeholder="Masukan Nama Sekolah" size="50" maxlength="30" autocomplete="off" autofocus/></td>

                                    </tr>  

                                     <tr>
                                       <td><font color="black"><strong>Agama</strong></font></td>
                                       <td><select name="agama">
                                          <option value="islam">Islam</option>
                                          <option value="kristen">Kristen</option>
                                          <option value="hindu">Hindu</option>
                                          <option value="budha">Budha</option>
                                      </select></td>

                                    </tr>  

                                    <tr>
                                       <td><font color="black"><strong>Kompetensi Keahlian</strong></font></td>
                                       <td><select name="kk">
                                          <option value="akl">Akuntansi dan Keuangan Lembaga</option>
                                          <option value="oto">Otomatisasi dan Tata Kelola Perkantoran</option>
                                          <option value="bdp">Bisnis Daring dan Pemasaran</option>
                                          <option value="rpl">Rekayasa Perangkat Lunak</option>
                                          <option value="tkj">Teknik Komputer dan Jaringan</option>
                                      </select></td>

                                    </tr>  

                                    <tr>
                                       <td><font color="black"><strong>Kelas</strong></font></td>
                                       <td><select name="kelas">
                                          <option value="islam">X</option>
                                          <option value="kristen">XI</option>
                                          <option value="hindu">XII</option>
                                      </select></td>  

                                    </tr>  

                                    <tr>
                                        <td><font color="black"><strong>Alamat</strong></font></td>
                                        <td><textarea name="alamat" size="50" maxlength="30" placeholder="Masukan Alamat" ></textarea></td>                              
                                    </tr>  


                                    <tr>
                                       <td><font color="black"><strong>No. HP</strong></font></td>
                                       <td><input type="number" name="hp" size="50" maxlength="30" placeholder="Masukan No. HP" /></td>
                                    </tr>  

                                    <tr>
                                        <td><font color="black"><strong>Email</strong></font></td>
                                        <td><input type="email" name="email"size="50" maxlength="30" placeholder="Masukan Email" ></td>                        
                                    </tr>  

                                      <tr>
                                        <td><font color="black"><strong>Upload Foto</strong></font></td>
                                        <td><p><input type='file' name='foto' accept='image/*' /></p></td>                        
                                    </tr> 


                                     <tr>
                                       <td><div class="field">
                                       <button class="field_bt">Kirim</button>
                                       </div></td>
                                    </tr>           

                                 </tbody>
                              </table>
                                 </fieldset>
            </div>

          </form>
      </div>

    </div>
  </div>