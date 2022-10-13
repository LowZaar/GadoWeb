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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        @include('components.header')
        
        @include('components.backoffice.sidebar')
        
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Adicionar Usuário</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('backoffice.index')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('backoffice.users')}}">Usuários</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Adicionar Usuário</li>
                                </ol>
                            </nav>
                        </div>
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
                        <form>
                            <div class="form-group">
                                <label>Tipo de cadastro</label> 
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input name="tipoCadastro" id="tipoCadastro_0" type="radio" class="form-check-input" value="PF"> 
                                        <label for="tipoCadastro_0" class="form-check-label">Pessoa Fisica</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="tipoCadastro" id="tipoCadastro_1" type="radio" class="form-check-input" value="PJ"> 
                                        <label for="tipoCadastro_1" class="form-check-label">Pessoa Juridica</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="companyName" id="companyNameLabel">Razão Social</label> 
                                        <input id="companyName" name="companyName" type="text" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="doc_number" id="doc_numberLabel">CPF</label> 
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-address-card"></i>
                                                </div>
                                            </div> 
                                            <input id="doc_number" name="doc_number" type="text" required="required" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="doc_number2" id="doc_number2Label">RG/IE</label> 
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-credit-card"></i>
                                                </div>
                                            </div> 
                                            <input id="doc_number2" name="doc_number2" type="text" required="required" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="text">Email</label> 
                                        <input id="text" name="text" type="text" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="phone">Telefone</label> 
                                        <input id="phone" name="phone" type="text" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cellphone">Celular</label> 
                                        <input id="cellphone" name="cellphone" type="text" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="cep">CEP</label> 
                                        <input id="cep" name="cep" type="text" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="address">Endereço</label> 
                                        <input id="address" name="address" type="text" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="number">Número</label> 
                                        <input id="number" name="number" type="text" required="required" class="form-control">
                                    </div>    
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="district">Bairro</label> 
                                        <input id="district" name="district" type="text" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="city">Cidade</label> 
                                        <input id="city" name="city" type="text" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="state">Estado</label> 
                                        <select id="state" name="state" required="required" class="form-control">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="born_date" id="born_dateLabel">Data de Nascimento</label> 
                                        <input id="born_date" name="born_date" type="date" required="required" class="form-control">
                                    </div> 
                                </div>        
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <button name="submit" type="submit" class="btn btn-lg btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <script>
                $('#tipoCadastro_0').click(function (){
                    $('#companyNameLabel').text('Nome Completo')
                    $('#doc_numberLabel').text('CPF')
                    $('#doc_number2Label').text('RG')
                    $('#born_dateLabel').text('Data de Nascimento')
                })

                $('#tipoCadastro_1').click(function (){
                    $('#companyNameLabel').text('Razão Social')
                    $('#doc_numberLabel').text('CNPJ')
                    $('#doc_number2Label').text('IE')
                    $('#born_dateLabel').text('Data de Abertura')
                })

            </script>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    
</body>
@include('components.footer')
</html>