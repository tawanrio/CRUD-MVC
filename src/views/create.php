<main class="main">
        <div class="card  card-create">
            <div class="card-header"><h3>Preencha os campos para realizar o cadastro</h3></div>
            <div class="card-main">
                <form class="form-create" action="#" method="post">
                    <div class="create-main row1">
                        <input required class="create input-row1" type="text" name="nome" placeholder="Nome">
                        <input required class="create input-row2" type="date" name="nascimento" placeholder="Nascimento">
                    </div>
                    <div class="create-main row2">
                        <input required class="create input-row1" type="text" name="profissao" placeholder="Profissão">
                        <input required class="create input-row2" type="text" name="nacionalidade" placeholder="Nacionalidade">
                    </div>
                    <div class="create-main row3">
                        <input required class="create input-row1" type="text" name="sexo" placeholder="Sexo">
                        <input required class="create input-row2" type="number" name="peso" step="0.01" max="300" placeholder="Peso">
                        <input required class="create input-row3" type="number" name="altura" step="0.01" max="3" placeholder="Altura">
                        <input required class="create input-row4" type="text" name="curso" placeholder="Curso preferido">
                    </div>
                    <div class="create-main row4">
                    <button class="create-main row4">Cadastrar</button>
                    </div>
                </form>

            </div>
            <div class="card-footer">
            <?php 
                if(count($arr) > 4){
                if(User::createPerson($arr)){
                    echo "Cadastro Realizado com Sucesso";
                }
            }
             ?>
                
            </div>
        </div>
    </div>
</main>