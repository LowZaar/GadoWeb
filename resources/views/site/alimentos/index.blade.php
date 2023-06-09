<?php
    const TIPOS_ALIMENTOS = [
        1 => 'Ração',
        2 => 'Orgânica',
        3 => 'Suplemento'
    ]
?>
<!DOCTYPE html>
@include('components.head')
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    @include('components.site.header')

    @include('components.site.sidebar')

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h4 class="page-title">Alimentos Cadastrados</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('site.index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Listagem de Alimentos Cadastrados</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <button class="btn btn-primary mr-2" id="openModal" data-toggle="modal" data-target="#modalAlimento"> Adicionar Alimento</button>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Tipo</th>
                                    <th>Descrição</th>
                                    <th>Data Cadastro</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alimentos as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{TIPOS_ALIMENTOS[$item->type]}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{date("d/m/Y", strtotime($item->created_at))}}</td>
                                        <td>
                                            <div class="text-right">
                                                <a href="{{route('site.alimentos.excluir', ['id' => $item['id']])}}" class="btn btn-confirm-exclusao btn-danger">Excluir</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<div class="modal fade" id="modalAlimento" tabindex="-1" role="dialog" aria-labelledby="modalAlimentoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAlimentoLabel">Inserir Alimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('site.alimentos.novo')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="nomeAlimento">Nome</label>
                      <input id="nomeAlimento" name="nomeAlimento" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="tipoAlimento">Tipo</label>
                      <select id="tipoAlimento" name="tipoAlimento" class="form-control">
                        <option value="1">Ração</option>
                        <option value="2">Orgânica</option>
                        <option value="3">Suplemento</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="descricao">Descrição</label>
                      <textarea id="descricao" name="descricao" cols="40" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>

</body>

@include('components.footer')
