<?php
    include_once '../Conexao/departamentoDAO.php';

    $depDao = new DepartamentoDAO();
    $depInfo = $depDao->Listar();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agendamentos</title>

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">

    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="shortcut icon" href="#">
    <!-- <link rel="stylesheet" herf="./assets/css/main.css"> -->


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Clinica São Luiz</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Página Inicial</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="gerenciar-agendamento.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Agendamentos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-departamento.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Departamentos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-especialista.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Especialistas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-paciente.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pacientes</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-servico.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Serviços</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-horario.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Horários</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Agendamentos</h1>

                    <section class="section-cards">
                        <div class="cards bg-primary" id="con-hoje">
                            <p>0</p>
                            <h3>Número de Consultas</h3>
                        </div>
                        <div class="cards bg-warning" id="con-espera">
                            <p>0</p>
                            <h3>Em Espera</h3>
                        </div>
                        <div class="cards bg-info" id="con-atend">
                            <p>0</p>
                            <h3>Em Atendimento</h3>
                        </div>
                        <div class="cards bg-success" id="con-real">
                            <p>0</p>
                            <h3>Realizadas</h3>
                        </div>
                        <div class="cards bg-danger" id="falta">
                            <p>0</p>
                            <h3>Faltas</h3>
                        </div>
                    </section>
                    <div class="table-responsive">
                        <!-- <div class="form-group input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                            <input class="form-control" type="text" id="search" placeholder="Pesquisar">
                        </div> -->
                        <div>
                            <span class="input-group-addon"></span>
                            <input class="form-control" type="date" id="data-consulta" >
                        </div>


                        <table id="table" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Profissional</th>
                                    <th>Serviço</th>
                                    <th>Paciente</th>
                                    <th>Data-Hora</th>
                                    <th>Valor</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>

                            </thead>

                            <tfoot>
                                <tr>
                                    <th>Profissional</th>
                                    <th>Serviço</th>
                                    <th>Paciente</th>
                                    <th>Data-Hora</th>
                                    <th>Valor</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </tfoot>

                            <tbody id="table-agend">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
                    <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Clique em "Sair" para encerrar a sesssão.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.html">Sair</a>
                </div>
            </div>
        </div>
    </div>

    <!-- change status modal -->
    <div class="modal fade" id="status-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info form-style">
                    <h5 class="modal-title" id="exampleModalLabel">Mudar Status</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body form-style">
                    <select name="selectStatus" id="select-status" class="form-control">
                        <option value="Em Atendimento">Em Atendimento</option>
                        <option value="Espera">Espera</option>
                        <option value="Realizada">Realizada</option>
                        <option value="Faltou">Faltou</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" id="confirmStatus" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

    <script>
    var $rows = $('#table tr ');
    $('#search').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });
    </script>
    <script src="./assets/js/agendamento.js"></script>

</body>

</html>