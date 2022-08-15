<?php
include_once('../../../model/funcionario.php');
include_once('../../../controller/crud-funcionario.php');

$select = new CrudFuncionario();


$id = filter_input(INPUT_POST, 'id');
if($id) {
    $dados=$select->findById($id);

}
?>


<div class="container">
    <form method="POST" class="form-label">
        
    <div class="form-group row">
                            <div class="col-sm-5 mb-3 mb-sm-0">
                            <label class="text-gray-900" id=""><strong>Nome Completo</strong></label>
                            <input type="text" class="form-control" id="nomeFuncionario1" placeholder="" value="<?php echo $dados->getNome(); ?>" required/>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Email</strong></label>
                                 <input type="email" class="form-control" id="emailFuncionario1" value="<?php echo $dados->getEmail(); ?>" placeholder="" required/>
                            </div>
                           
        </div>

        <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900" id="cliente"><strong>Nº do BI</strong></label>
                            <input type="text" class="form-control" id="biFuncionario1" value="<?php echo $dados->getBi(); ?>" placeholder="" required>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Telefone</strong></label>
                                 <input type="number" id="telefone1" class="form-control" value="<?php echo $dados->getTelefone(); ?>" placeholder="" required>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Morada </strong></label>
                            <input type="text" class="form-control" value="<?php echo $dados->getMorada(); ?>" id="morada1" placeholder="" required>
                            </div>

         </div>


         <div class="form-group row">
                       <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="text-gray-900"><strong>Data de Nascimento </strong></label>
                            <input type="date" class="form-control" value="<?php echo $dados->getDataNascimento(); ?>" id="dataNascimento1" placeholder="" required>
                            </div>

                          
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                 <label class="text-gray-900"><strong>Permissão</strong></label>
                                 <select class="form-control" id="permicao" >
                    
                               <?php    
                                    //Incluir a Permição
                                   include_once('../../../model/permicao.php');
                                   include_once('../../../controller/crud-permicao.php');
                                  $permicao = new CrudPermicao();
                                  $permicao->readPermicaoList($dados->getPermicao());
                                 ?>
                               </select>
                            </div>

                       </div>


        <input type="hidden" value="<?php echo $id;?>" id="idFuncionario" name="id">

        <hr>
        <button class="btn btn-outline-primary btn-theme">Editar</button>
        <button type="button" onclick="fechar()" class="btn btn-primary ">Cancelar</button>

        
    </form>
</div>