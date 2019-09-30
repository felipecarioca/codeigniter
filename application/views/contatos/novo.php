<h1>Contatos</h1>
<h3>Formulário de Contatos</h3>

<?php echo form_open('contatos/salvar'); ?>

<label for="nome">Nome</label>
<input type="input" name="nome" /><br />

<label for="text">Telefone</label>
<input type="input" name="telefone"><br />

<label for="text">Email</label>
<input type="input" name="email"><br />

<input type="submit" name="submit" value="Salvar" />

</form>