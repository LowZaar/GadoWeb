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

        @include('components.backoffice.header')

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
                                    <li class="breadcrumb-item"><a href="{{route('backoffice.company.index')}}">Usuários</a></li>
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
                        <div class="row mb-2">
                            <div class="col-12">
                                <ul class="nav nav-tabs" id="menuTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="nav-empresa-tab" data-toggle="tab" data-target="#empresa" type="button" role="tab" aria-controls="empresa" aria-selected="true">Empresa</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link disabled" id="nav-usuario-tab" data-toggle="tab" data-target="#usuario" type="button" role="tab" aria-controls="usuario" aria-selected="false">Usuario</button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <form action="{{route('backoffice.company.new')}}" method="post">
                            @csrf
                            <div class="tab-content">
                                <div class="tab-pane show active" id="empresa" role="tabpanel" aria-labelledby="nav-empresa-tab">
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
                                                <input id="companyName" name="companyName" type="text" class="form-control">
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
                                                    <input id="doc_number" name="doc_number" type="text" class="form-control cpf">
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
                                                    <input id="doc_number2" name="doc_number2" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label for="text">Email</label>
                                                <input id="text" name="email" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="phone">Telefone</label>
                                                <input id="phone" name="phone" type="text" class="form-control tel">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="cellphone">Celular</label>
                                                <input id="cellphone" name="cellphone" type="text" class="form-control cel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="cep">CEP</label>
                                                <input id="cep" name="cep" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label for="address">Endereço</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="number">Número</label>
                                                <input id="number" name="number" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="district">Bairro</label>
                                                <input id="district" name="district" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="city">Cidade</label>
                                                <input id="city" name="city" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="state">Estado</label>
                                                <select id="state" name="state" class="form-control">
                                                    <option value="" selected disabled>SELECIONE</option>
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="born_date" id="born_dateLabel">Data de Nascimento</label>
                                                <input id="born_date" name="born_date" type="date" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group float-right mr-5">
                                                <button class="btn btn-lg btn-primary" id="proxButton" type="button">Proximo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade hide " id="usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nameUser">Nome do Usuário</label>
                                                <input id="nameUser" name="nameUser" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="emailUser">Email de Login</label>
                                                <input id="emailUser" name="emailUser" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="userPhone">Celular</label>
                                                <input id="userPhone" name="userPhone" type="text" class="form-control cel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cpfUser">CPF</label>
                                                <input id="cpfUser" name="cpfUser" type="text" class="form-control cpf">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="passUser">Senha</label>
                                                <input id="passUser" name="passUser" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="passUserConfirm">Confirme a senha</label>
                                                <input id="passUserConfirm" name="passUserConfirm" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <button class="btn btn-lg btn-primary" id="voltButton" type="button">Voltar</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
                                            </div>
                                        </div>
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

                $('#proxButton').click(function(){
                    $('#empresa').removeClass('active')
                    $('#empresa').removeClass('show')
                    $('#empresa').addClass('hide')
                    $('#nav-empresa-tab').removeClass('active')
                    $('#nav-empresa-tab').addClass('disabled')


                    $('#usuario').addClass('active')
                    $('#usuario').addClass('show')
                    $('#nav-usuario-tab').addClass('active')
                    $('#nav-usuario-tab').removeClass('disabled')

                })

                $('#voltButton').click(function(){
                    $('#usuario').removeClass('active')
                    $('#usuario').removeClass('show')
                    $('#usuario').addClass('hide')
                    $('#nav-usuario-tab').removeClass('active')
                    $('#nav-usuario-tab').addClass('disabled')


                    $('#empresa').addClass('active')
                    $('#empresa').addClass('show')
                    $('#nav-empresa-tab').addClass('active')
                    $('#nav-empresa-tab').removeClass('disabled')
                })

                $('#tipoCadastro_0').click(function (){
                    $('#companyNameLabel').text('Nome Completo')
                    $('#doc_numberLabel').text('CPF')
                    $('#doc_number').removeClass('cnpj')
                    $('#doc_number').addClass('cpf')
                    $('.cpf').mask('999.999.999-99')
                    $('#doc_number2Label').text('RG')


                    $('#born_dateLabel').text('Data de Nascimento')
                })

                $('#tipoCadastro_1').click(function (){
                    $('#companyNameLabel').text('Razão Social')
                    $('#doc_numberLabel').text('CNPJ')
                    $('#doc_number').removeClass('cpf')
                    $('#doc_number').addClass('cnpj')

                    $('.cnpj').mask('99.999.999/9999-99')

                    $('#doc_number2Label').text('IE')
                    $('#born_dateLabel').text('Data de Abertura')
                })

            </script>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <script>
        $(document).ready(function(){
            setTimeout(() => {
                $('#liveToast').fadeOut()
            }, 2000);
        })
        $('#tipoCadastro_0').trigger('click')
    </script>
</body>
@include('components.footer')

