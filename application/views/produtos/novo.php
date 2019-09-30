<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar Produto</title>

        <link href="<?= base_url("css/sb-admin-2.min.css")?>" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Cadastrar Produto</h1>

            <?php 
            
            echo form_open('produtos/salvar');

            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_label("Descrição", "descricao");
            echo form_input(array(
                "name" => "descricao",
                "id" => "descricao",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_label("Preço", "preco");
            echo form_input(array(
                "name" => "preco",
                "id" => "preco",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo '<br>';

            echo form_button(array(
                "content" => "Cadastrar",
                "type" => "submit",
                "class" => "btn btn-primary"
            ));

            echo form_close();
            
            ?>

        </div>
    </body>
</html>