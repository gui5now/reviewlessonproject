<?php include_once 'includes/header.inc.php' ?>


<div class="row container">
    <div class="col s12">
        <h5 class="light">Consultas</h5><hr>

        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</tr>
                </tr>   
            </thead>
            <tbody>
                <?php
                include_once 'banco_de_dados/read.php';
                ?>

            </tbody>
        </table>
    </div>
</div>

<?php include_once 'includes/footer.inc.php' ?>