<h1>Códigos e Contos</h1>
<p><?= $this->Html->link('Adicionar artigo', ['action' => 'add'], ['class' => 'btn btn-primary', 'id' => 'add-article-link', 'style' => 'color: black;']) ?></p>

<table>
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Criado</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($articles as $article): ?>
        <tr>
            <td><?= $article->id ?></td>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Deletar',
                    ['action' => 'delete', $article->id],
                    ['confirm' => 'Tem certeza?'])
                ?>
                <?= $this->Html->link('Editar', ['action' => 'edit', $article->id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>