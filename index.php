<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>XPloreSkills</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <!--PHP-->
  <?php
  require_once("sparqllib.php");
  $test = "";
  if (isset($_POST['search-data'])) {
    $test = $_POST['search-data'];
    $data = sparql_get(
      "http://localhost:3030/projek",
      "
PREFIX data: <http://learningsparql.com/ns/addressbook#> 
PREFIX id:  <http://learningsparql.com/ns/data#> 
PREFIX rdf: <https://www.ldf.fi/service/gambar#> 

SELECT ?name ?email ?school ?gender ?position ?departement ?job
      WHERE
      {
        ?id data:name ?name ;
            data:email ?email ;
            data:school ?school ;
            data:hasGender ?nameGender ;
            data:hasPosition ?namePosition ;
            data:hasDepartement ?nameDepartement ;
            data:hasJob ?nameJob ;.
            
            ?nameGender data:gender ?gender .
            ?namePosition data:position ?position .
            ?nameDepartement data:departement ?departement .
            ?nameJob data:job ?job .
            FILTER (regex (?name,  '$test', 'i') || regex (?email,  '$test', 'i') || regex (?school,  '$test', 'i') || regex (?gender,  '$test', 'i') || regex (?position,  '$test', 'i') || regex (?departement,  '$test', 'i') || regex (?job,  '$test', 'i'))

      }"
    );
  } else {
    $data = sparql_get(
      "http://localhost:3030/projek",
      "
PREFIX data: <http://learningsparql.com/ns/addressbook#> 
PREFIX id:  <http://learningsparql.com/ns/data#> 
PREFIX rdf: <https://www.ldf.fi/service/gambar#> 

SELECT ?name ?email ?school ?gender ?position ?departement ?job
      WHERE
      {
        ?id data:name ?name ;
            data:email ?email ;
            data:school ?school ;
            data:hasGender ?nameGender ;
            data:hasPosition ?namePosition ;
            data:hasDepartement ?nameDepartement ;
            data:hasJob ?nameJob ;.
            
            ?nameGender data:gender ?gender .
            ?namePosition data:position ?position .
            ?nameDepartement data:departement ?departement .
            ?nameJob data:job ?job .
              
      }

            "
    );
  }

  if (!isset($data)) {
    print "<p>Error: " . sparql_errno() . ": " . sparql_error() . "</p>";
  }

  ?>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/ilustrasi.svg" alt="team page" width="450" />
      <form action="" method="post" id="nameform">
      <div class="search-box">
        <input type="text" name="search-data" placeholder="Cari Data Karyawan" />
        <button type="submit" class="btn btn-primary">Cari</button>
      </div>
      <i class="bi bi-search"></i>
      </form>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
      

        <div class="row tentang">
        <div class="col-lg-6">
          <img src="img/company2.jpg" alt="tentang" class="img-fluid" />
        </div>
        <div class="col-lg">
          <h3>Apa itu <span>XPloreSkills ?</span></h3>
          <p>
          XPloreSkills merupakan perusahaan startup penyedia jasa layanan aplikasi teknologi yang sudah dipercaya oleh banyak client. Xploreskills berdiri pada tahun 2022 di mana perusahaan memiliki visi jadikan indonesia lebih baik dan berkembang. Saat ini Xplore skills bergerak dalam pembuatan jasa data, teknologi dan produk.
          </p>
        </div>
      </div>


      <!-- Rekomendasi Minuman -->
        <div class="row rekom row text-center mb-3">
          <div class="col">
            <h2>Meet Our Team</h2>
            <br>
          </div>
        </div>
        <div class="row key">
          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/daren.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Daren</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/alex.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Alex</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/ayu.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Ayu</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/dandi.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Dandi</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
        </div>

        <div class="row key">
          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/dian.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Dian</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/derek.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Derek</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/ilham.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Ilham</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/ivan.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Ivan</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
        </div>

        <div class="row key">
          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/karen.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Karin</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/krisna.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">krisna</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/lala.jpg" class="card-img-top" alt="" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Lala</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card shadow" style="width: 15rem">
              <div class="inner">
                <img src="img/sabil.jpg" class="card-img-top" alt="pad" />
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Sabil</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
        </div>
        
      <!-- Hasil Pencarian -->

        <div class="row text-center mb-3 hasil">
          <div class="col">
            <h2>Hasil Pencarian data</h2>
          </div>
        </div>
        <div class="row fs-5">
          <div class="col-md-5">
            <p>
              Menampilkan pencarian data karyawan:
              <br />
            </p>
            <p>
              <span>
          <?php
          if ($test != NULL) {
            echo $test;
          } else {
            echo "Data Karyawan :";
          }
          ?></span>
            </p>
          </div>
        </div>
          
        <div class="row">

<?php $i = 0; ?>
<?php foreach ($data as $dat) : ?>
  <div class="col-md-4">
  <div class="box"> 
    <ul class="list-group list-group-flush">
          <div class="header-data"> <b>Nama:</b></div>
          <div class="item-data"><?= $dat['name'] ?></div>
  
          <div class="header-data"> <b>Email :</b></div>
          <div class="item-data"><?= $dat['email'] ?></div>
        
          <div class="header-data"> <b>Sekolah :</b></div>
          <div class="item-data"><?= $dat['school'] ?></div>

          <div class="header-data"> <b>Jenis Kelamin :</b></div>
          <div class="item-data"><?= $dat['gender'] ?></div>

          <div class="header-data"> <b>Posisi :</b></div>
          <div class="item-data"><?= $dat['position'] ?></div>

          <div class="header-data"> <b>Departemen :</b></div>
          <div class="item-data"><?= $dat['departement'] ?></div>

          <div class="header-data"> <b>Pekerjaan :</b></div>
          <div class="item-data"><?= $dat['job'] ?></div>

      </ul>
    </div>
  </div>

<?php endforeach; ?>
</div>



      </div>
    </section>
    <!-- Akhir About -->

    <!-- Footer -->
    <footer class="footer text-black text-center pb-3">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse minima
        incidunt odio nam facilis, eligendi <br />
        Itaque fugiat cupiditate consectetur. Aliquid ab deserunt
        exercitationem, illum molestiae dolorem.</p>
      
        <div class="icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin"></i>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>



