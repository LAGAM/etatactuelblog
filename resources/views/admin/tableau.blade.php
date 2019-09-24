@extends('layouts.base')
@section('title')
  <title> Admin - Dashboad</title>

@section('content')

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2" style="background-color: #99bae5;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Articles Postés</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">95</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-alt fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2" style="background-color: #a2e599;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Artcles Aimés</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">25</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-heart fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2" style="background-color: #8ed2f1;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Nombre de Commentaires</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">300</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comment-alt fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2" style="background-color: #f1c48e;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Nombres de Vues</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-eye fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="container bg-white" style="border-radius: 12px; padding-top: 30px;">
              <h2 style="font-weight: bold; text-align: center;">TOP 4 DES ARTICLES LES PLUS VUES</h2><br/>
              <div class="row" style="color:#12A650; font-weight: bold;">
                  <div class="col-md-2">N°</div>
                  <div class="col-md-4">Titre</div>
                  <div class="col-md-2">Vues</div>
                  <div class="col-md-2">Aimés</div>
                  <div class="col-md-2">Commentaires</div>
              </div><br/>
              <div class="row">
                  <div class="col-md-2">1</div>
                  <div class="col-md-4">La journée Open Access Week</div>
                  <div class="col-md-2">200</div>
                  <div class="col-md-2">160</div>
                  <div class="col-md-2">450</div>
              </div><br/>
              <div class="row">
                  <div class="col-md-2">2</div>
                  <div class="col-md-4">Numérisation des theses de l'UFHB</div>
                  <div class="col-md-2">160</div>
                  <div class="col-md-2">100</div>
                  <div class="col-md-2">200</div>
              </div><br/>
              <div class="row">
                  <div class="col-md-2">3</div>
                  <div class="col-md-4">Lancement du concour génie UVCI</div>
                  <div class="col-md-2">150</div>
                  <div class="col-md-2">90</div>
                  <div class="col-md-2">190</div>
              </div><br/>
              <div class="row">
                  <div class="col-md-2">4</div>
                  <div class="col-md-4">Formation des bibliothécaires</div>
                  <div class="col-md-2">100</div>
                  <div class="col-md-2">60</div>
                  <div class="col-md-2">10</div>
              </div><br/>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-gray-200">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  @endsection

 