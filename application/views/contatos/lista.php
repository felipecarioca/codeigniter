<h1>Contatos</h1>
<h3>Tabela de Contatos</h3>

<a href="<?php echo base_url('contatos/novo');?>">Novo</a>

<table>
<tr>
    <th>Nome</th>
    <th>Telefone</th>
    <th>Email</th>
</tr>
<?php foreach ($contatos as $cont): ?>
<tr>
    <td><?php echo $cont["nome"]; ?></td>
    <td><?php echo $cont["telefone"]; ?></td>
    <td><?php echo $cont["email"]; ?></td>
</tr>
<?php endforeach; ?>
</table>