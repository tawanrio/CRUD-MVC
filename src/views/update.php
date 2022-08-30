<main class="main">
        <div class="card  card-create">
            <div class="card-header"><h3>Alterar usuário</h3></div>
            <div class="card-main">
            <form class="form-create" action="index.php?page=update" method="post">
                    <input type="hidden" name="id" value="<?php $arr['nome'] ? print_r($arr['id']) : null; ?>">
                    <div class="create-main row1">
                        <input required class="create input-row1" type="text" name="nome" placeholder="Nome"
                        value="<?php $arr['nome'] ? print_r($arr['nome']) : null; ?>">
                        <input required class="create input-row2" type="date" name="nascimento" placeholder="Nascimento"
                        value="<?php $arr['nascimento'] ? print_r($arr['nascimento']) : null;?>">
                    </div>
                    <div class="create-main row2">
                        <input required class="create input-row1" type="text" name="profissao" placeholder="Profissão"
                        value="<?php $arr['profissao'] ? print_r($arr['profissao']) : null; ?>">
                        <input required class="create input-row2" type="text" name="nacionalidade" placeholder="Nacionalidade"
                        value="<?php $arr['nacionalidade'] ? print_r($arr['nacionalidade']) : null; ?>">
                    </div>
                    <div class="create-main row3">
                        <input required class="create input-row1" type="text" name="sexo" placeholder="Sexo"
                        value="<?php $arr['sexo'] ? print_r($arr['sexo']) : null; ?>">
                        <input class="create input-row2" type="number" name="peso" step="0.01" max="300" placeholder="Peso"
                        value="<?php $arr['peso'] ? print_r($arr['peso']) : null; ?>">
                        <input class="create input-row3" type="number" name="altura" step="0.01" max="3" placeholder="Altura"
                        value="<?php $arr['altura'] ? print_r($arr['altura']) : null; ?>">
                        <input class="create input-row4" type="text" name="curso" placeholder="Curso preferido"
                        value="<?php $arr['cursopreferido'] ? print_r($arr['cursopreferido']) : null; ?>">
                    </div>
                    <div class="create-main row4">
                     <button class="create-main row4" >Alterar</button>

                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a class="card-btn" href="index.php?page=read">Realizar nova Pesquisa</a><br><br>
                <?php isset($arr['msg']) ? print_r($arr['msg']) : null ?>
            </div>
        </div>
    </div>
</main>