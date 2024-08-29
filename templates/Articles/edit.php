<h2>Edição do Artigo</h2>
<?php
    echo $this->Form->create($article);

    echo $this->Form->control('title', [
        'label' => false, // Remove o label automático
        'class' => 'custom-input-class', // Adiciona uma classe CSS personalizada
        'placeholder' => 'Digite o título do artigo aqui' // Adiciona um placeholder
    ]); 

    echo '<br>';

    echo '<h3>Conteúdo</h3>';
    echo $this->Form->input('body', [
        'type' => 'textarea', // Especifica que este campo é uma textarea
        'rows' => '10', // Define o número de linhas
        'class' => 'custom-textarea-class', // Adiciona uma classe CSS personalizada
        'placeholder' => 'Digite o conteúdo do artigo aqui...', // Adiciona um placeholder
        'maxlength' => '2000', // Limita o número de caracteres
        'style' => 'resize:none;' // Impede que o usuário redimensione a textarea
    ]);

    echo '<br>';
    echo $this->Form->button(__('Salvar artigo'), [
        'class' => 'custom-button-class' // Adiciona uma classe CSS personalizada ao botão
    ]);

    echo $this->Form->end();
?> 
