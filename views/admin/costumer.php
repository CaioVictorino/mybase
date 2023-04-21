<? require_once VIEW . 'snippets/header.php'; ?>

<body class="sidebar-mini sidebar-collapse">

     <? require_once __DIR__ . '/../snippets/topbar.php'; ?>
     <? require_once __DIR__ . '/../snippets/sidebar.php'; ?>


     <div class="content-wrapper">


          <div class="row">
               <div class="col-md-12 pTitle">
                    Clientes
               </div>
          </div>

          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header">
                              Tabela Clientes
                         </div>
                         <div class="card-body">
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-register" data-toggle="modal" data-target="#costumerRegister">
                                             Cadastrar Cliente
                                        </button>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-12">
                                        <table class="table table-dark">
                                             <thead>
                                                  <th>Nome</th>
                                                  <th>CPF/CNPJ</th>
                                                  <th><center>Ações</center></th>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>1</td>
                                                       <td>2</td>
                                                       <td>
                                                            <center>
                                                            <div class="btn-group">
                                                                 <button type="button" class="btn btn-info">
                                                                      <i class="fa-solid fa-user-pen"></i>
                                                                 </button>
                                                                 <button type="button" class="btn btn-danger">
                                                                      <i class="fa-solid fa-circle-xmark"></i>
                                                                 </button>
                                                            </div>
                                                            </center>
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>


     </div>


     <!-- Modal -->
<div class="modal fade" id="costumerRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header pTitle">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Aluno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <form>
               <h5>Informações pessoais</h5>
               <div class="input-group mb-3">
                    <div class="input-group mb-3">
                         <div class="col-md-6 mb-3">
                              <input type="text" name="name" class="form-control form-custom" placeholder="Nome"  required/>
                         </div>
                         <div class="col-md-6 mb-3">
                              <input type="text" name="surname" class="form-control form-custom" placeholder="Sobrenome"  required/>
                         </div>
                    </div>
                    <div class="input-group mb-3">
                         <div class="col-md-4 mb-3">
                              <span class="labels">Data de nascimento</span>
                              <input type="date" name="born_date" max="<?php echo date('Y-m-d');?>"  class="form-control form-custom" required/>
                         </div>
                         <div class="col-md-4 mb-3">
                              <span class="labels">CPF</span>
                              <input type="text" name="cpf" pattern="[0-9]{11}" class="form-control form-custom" placeholder="(Somente Números)" required/>
                         </div>
                         <div class="col-md-4 mb-3">
                              <span class="labels">Contato</span>
                              <input type="text" name="cpf" pattern="[0-9]" class="form-control form-custom" placeholder="DDD+Número" required/>
                         </div>
                         <div class="col-md-6 mb-3">
                              <span class="labels">Email</span>
                              <input type="email" name="email" class="form-control form-custom" placeholder="Digite o email" required/>
                         </div>
                    </div>
               </div>
               
               <h5>Endereço</h5>
               <div class="input-group mb-3">
                         <div class="col-md-3 mb-3">
                              <span class="labels">CEP</span>
                              <input type="text" inputmode="number" minlength="8" maxlength="8" name="zipcode" id="zipcode" class="form-control form-custom" placeholder="28911000" onblur="getCep(this.value)" required/>
                         </div>
                         <div class="col-md-1 mb-3">
                              <span class="labels">Estado</span>
                              <select class="form-control form-custom" id="state" name="state" disabled>
                                   <option default selected>UF</option>
                                   <?php
                                        $states = array('RJ', 'SP', 'MG', 'PR', 'RS', 'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'PA', 'PB', 'PE', 'PI', 'PI', 'RN', 'RS', 'RO', 'RR', 'SC', 'SE', 'TO');

                                        foreach($states as $st){
                                             echo "<option value='$st'>$st</option>";
                                        }
                                   ?>
                              </select>
                         </div>
                         <div class="col-md-4 mb-3">
                              <span class="labels">Cidade</span>
                              <input type="text" id="city" name="city" class="form-control form-custom" placeholder="Cidade" disabled required/>
                         </div>
                         <div class="col-md-4 mb-3">
                              <span class="labels">Bairro</span>
                              <input type="text" id="neighborhood" name="neighborhood" class="form-control form-custom" placeholder="Bairro" required/>
                         </div>
                         <div class="col-md-12 mb-3">
                              <span class="labels">Logradouro</span>
                              <input type="text" id="street" name="street" class="form-control form-custom" placeholder="Logradouro" required/>
                         </div>
               </div>

               <h5>Características Físicas</h5>
               <div class="input-group mb-3">
                         <div class="col-md-4 mb-3">
                              <span class="labels">Altura</span>
                              <input type="number" inputmode="number" step="0.01" class="form-control form-custom" placeholder="1,80 M" required/>
                         </div>
                         <div class="col-md-4 mb-3">
                              <span class="labels">Peso</span>   
                              <input type="text" inputmode="number" id="weight" class="form-control form-custom" placeholder="0,00 KG" required/>

                         </div>
               </div>
               
               <span class="labels">Avaliação Inicial</span>
               <div class="input-group mb-3">
                    <div class="col-md-12 mb-3">
                         <textarea class="form-control form-custom"></textarea>
                    </div>
               </div>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>
  </div>
</div>

<script src="/assets/js/viacep.js"></script>


     <? require_once VIEW . '/snippets/footer.php'; ?>
</body>