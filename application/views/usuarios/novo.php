<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar Usuário</title>

        <link href="<?= base_url("css/sb-admin-2.min.css")?>" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Cadastrar Usuário</h1>

            <?php 
            
            echo form_open('usuarios/salvar');

            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_label("E-mail", "email");
            echo form_input(array(
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_label("Senha", "senha");
            echo form_input(array(
                "name" => "senha",
                "type" => "password",
                "id" => "senha",
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