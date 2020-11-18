<?php 
/* Alisson Prado - 
  MODELO DE CONEXÃO FIREBASE 
*/

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

$factory = (new Factory())->withDatabaseUri('https://digitalprecadastro.firebaseio.com/');
$database = $factory->createDatabase();
$contato = $database->getReference('Contatos')->getSnapshot();

//print_r($contato->getValue());


?>

<!-- Dashboard 2 Content -->
<div class="row">
    
   <?php foreach ($contato->getValue() as $contato) :  ?>
    <p>CPF: <?php echo $contato['CPF'];?></p>
    <p>Nome: <?php echo $contato['Primeiro Nome'];?></p>
   <?php endforeach; ?>
</div>
  


<?php 
/* 
 * Alisson Prado - 
 * Modelo de como deve ser a chama de cabeça e rodaé transformando ao meio com as necessidades de acordo com o link 
 */
?>