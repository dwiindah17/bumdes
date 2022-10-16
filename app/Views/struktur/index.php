<?= $this->extend('template/indexuser'); ?>
<?= $this->section('page-content'); ?>

<div class="content-wrapper">
  <div class="container">
    <div class="col-sm-12">
      <div class="card" data-aos="fade-up">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="font-weight-600 mb-4">
                Susunan Kepengurusan Badan Usaha Milik Desa "Tambaknegara Berkarya"
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-sm-12 grid-margin">
                  <h6>PENASIHAT:</h6>
                  <P>Kepala Desa Tambak Negara</P>
                  <h6>PELAKSANA OPERASIONAL:</h6>
                  <!-- <table class="table"> -->
                  <table class="table table-success table-striped">

                    <thead>
                      <tr>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Periode</th>
                        <th scope="col">Nama</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Direktur</th>
                        <td>2017 - 2022</td>
                        <td>Aris Mulyono Narjan</td>

                      </tr>
                      <tr>
                        <th scope="row" rowspan="2">Sekretaris</th>
                        <td>2017 - 2021</td>
                        <td> Azka Miftahudin, S. Pd</td>

                      </tr>
                      <tr>
                        <td>2021 - 2022</td>
                        <td> Novi Utami, S.T.</td>
                      </tr>
                      <tr>
                        <th scope="row">Bendahara</th>
                        <td>2017 - 2022</td>
                        <td colspan="2">Kuat Agung Suroso</td>
                      </tr>
                    </tbody>
                  </table>
                  <h6>PENGAWAS:</h6>
                  <table class="table table-success table-striped">
                    <tbody>
                      <tr>
                        <th scope="row">Ketua</th>
                        <td>Nur Sodiq, S.Pd.I</td>

                      </tr>
                      <tr>
                        <th scope="row">Sekretaris</th>
                        <td>Ruslan</td>

                      </tr>
                      <tr>
                        <th scope="row">Anggota</th>
                        <td colspan="2">Cikun Supriyadi</td>
                      </tr>
                    </tbody>
                    <!-- </table> -->
                  </table>
                  <h4>Berikut Merupakan File Persetujuan Kementerian Desa, Pembangunan Daerah Tertinggal Dan Transmigrasi Republik Indonesia Atas Pendaftaran Nama Bum Desa/Bum Desa Bersama Bum Desa Tambaknegara Berkarya</h4>

                  <a class="link-btn btn btn-lg" href="https://drive.google.com/uc?export=download&id=17fntIYPIylK7z2Kk9GN1p6Qdfjddpwjv" download>File Persetujuan Bumdesa</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>