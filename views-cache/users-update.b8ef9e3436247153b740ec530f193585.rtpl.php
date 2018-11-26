<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Usuários
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
               <form role="form" action="/admin/users/<?php echo htmlspecialchars( $user["ID"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="NOME">Nome</label>
              <input type="text" class="form-control" id="NOME" name="NOME" placeholder="Digite o nome" value="<?php echo htmlspecialchars( $user["NOME"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="ENDERECO">ENDEREÇO</label>
              <input type="text" class="form-control" id="ENDERECO" name="ENDERECO" placeholder="Digite o endereço" value="<?php echo htmlspecialchars( $user["ENDERECO"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="TELEFONE">Telefone</label>
              <input type="tel" class="form-control" id="TELEFONE" name="TELEFONE" placeholder="Digite o telefone" value="<?php echo htmlspecialchars( $user["TELEFONE"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
                  <div class="form-group">
              <label for="EMAIL">E-mail</label>
              <input type="email" class="form-control" id="EMAIL" name="EMAIL" placeholder="Digite o e-mail" value="<?php echo htmlspecialchars( $user["EMAIL"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="login">Login</label>
              <input type="text" class="form-control" id="login" name="login" placeholder="Digite o login" value="<?php echo htmlspecialchars( $user["login"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Digite o senha" value="<?php echo htmlspecialchars( $user["password"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="inadmin" <?php if( $user["inadmin"] == 1 ){ ?> checked<?php } ?> value="1"> Acesso de Administrador
              </label>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->