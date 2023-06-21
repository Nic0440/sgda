<?php
$this->layout("_theme", ['title' => 'Perguntas frequentes']);

if (!empty($faqs)) {
   
    foreach ($faqs as $faq) {
        var_dump($faq->question);
    }
}
/*
-Criar tabela
-Criar rota
-Criar script em themes/web
-Passar as infos para visualização
-Tabela e classes prontas

*/
?>