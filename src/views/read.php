<main class="main">
        <div class="card  card-select">
            <div class="card-header"><h3>Preencha os campos para pesquisa</h3></div>
            <div class="card-main">
                <form action="#" method="post">
                    <div class="select-main">
                        <select class="select" name="select">
                            <option value="nome" selected>Nome</option>
                            <option value="profissao">Profissão</option>
                        </select>
                        <input type="text" name="selectDb" placeholder="Digite aqui a informação a ser pesquisada">
                    </div>
                    <button>Pesquisar</button>
                </form>

            </div>
            <div class="card-footer">
                <div class="card-result">
                <?php 
                    if(count($arr) >= 1):
                ?> <table class="result">
                    <?php
                        foreach($arr as $row):
                           ?>
                           <tr>
                              <td> <?php print_r($row['nome']);?></td>
                              <td> <?php print_r($row['profissao']);?></td>
                              <td class="btn-alterar"><a href="index.php?page=update&id=<?= $row['id']?>">Alterar</a></td>
                              <td class="btn-deletar"><a href="index.php?page=delete&id=<?= $row['id']?>">Deletar</a></td>
                           </tr> 
                          
                           <?php endforeach; ?>
                    </table>
                <?php endif; ?> 
                <br>
            
            </div> <br><br>
            <?php isset($arr['msg']) ? print_r($arr['msg']) : null ?>
        </div>
    </div>
</main>