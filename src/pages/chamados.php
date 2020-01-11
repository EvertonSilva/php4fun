<?php
$title = 'Lista de chamados';
class Chamado
{
    private $titulo;
    private $prioridade;

   function __construct($titulo, $prioridade)
   {
       $this->titulo = $titulo;
       $this->prioridade = $prioridade;
   }
    public function getTitulo() 
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function getPrioridade()
    {
        return $this->prioridade;
    }
    public function setPrioridade($prioridade)
    {
        $this->prioridade = $prioridade;
    }
}

$listaChamados = [
    new Chamado("Cras alemanha odio", ["Alta", "danger"]),
    new Chamado("Dapibus ac facilisis in", ["Média", "warning"]),
    new Chamado("Morbi brasil risus", ["Baixa", "info"]),
    new Chamado("Lorem ipsum dolor sit", ["Baixa", "info"]),
    new Chamado("Lorem ipsum", ["Baixa", "info"])
];

?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php require __DIR__.'/shared/_head.php'; ?>
    <body> 
        <?php require __DIR__.'/shared/_nav.php'; ?>
        <div class="container">
            <h1 class="mb-4">Lista de chamados</h1>
            <ul class="list-group list-group-flush">
                <?php foreach($listaChamados as $chamado) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" title="Ver datalhes"><?php echo $chamado->getTitulo(); ?></a>
                        <span class="badge badge-<?php echo $chamado->getPrioridade()[1]; ?> badge-pill">
                            <?php echo $chamado->getPrioridade()[0]; ?>
                        </span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>