<!DOCTYPE html>
<html>
    <head>
        <title>Editar Usuário</title>

        <link href="<?= base_url("css/sb-admin-2.min.css")?>" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Editar Usuário</h1>

            <?php 
            
            echo form_open('usuarios/update');

            echo form_input(array(
                "type" => "hidden",
                "name" => "id",
                "id" => "id",
                "value" => $usuario['id']
            ));

            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "maxlength" => "255",
                "value" => $usuario['nome']
            ));

            echo form_label("E-mail", "email");
            echo form_input(array(
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "maxlength" => "255",
                "value" => $usuario['email']
            ));

            echo form_label("Senha", "senha");
            echo form_input(array(
                "name" => "senha",
                "type" => "password",
                "id" => "senha",
                "class" => "form-control",
                "maxlength" => "255",
                "value" => $usuario['senha']
            ));

            echo '<br>';

            echo form_button(array(
                "content" => "Salvar",
                "type" => "submit",
                "class" => "btn btn-primary"
            ));

            echo form_close();
            
            ?>

        </div>
    </body>
</html>