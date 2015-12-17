<?php
require_once 'class.user.php';
require_once 'dbconfig.php';
require_once 'class.crud.php';
extract($_POST);
$decks = new FlashCard();
// get total
$c = $category;
$total = $total;
$count = $counter;
$percentage = ($count / $total)*100;


// Display the Flashcards
if($count<=$total)
{ ?>

<div class='stage'>
  <div class='flashcard'>
    <div class='front'>
      <p> 
      <? echo $decks->viewFront($count, $total, $c); ?>
     </p>
    </div>
    <div class='back'>
      <p>
      <? echo $decks->viewBack($count, $total, $c); ?>
      </p>
    </div>
  </div>  
</div>
<?php echo $count; ?>
 of
<?php echo $total; ?>

<div class="progress progress-success progress-striped">
 <div class="bar" style="width:<?php echo $percentage; ?>%"></div>
 </div>

<?php
}
else if($count=$total)
{ ?>
<div class='stage'>
  <div class='flashcard'>
    <div class='front'>
      <p>No more flashcards</p>
    </div>
  </div>  
</div>
<?php echo "The End"; ?>

<div class="progress progress-success progress-striped">
 <div class="bar" style="width:<?php echo $percentage; ?>%"></div>
 </div>
 
<?php
}
?>



<script type="text/javascript">

        $(document).ready(function() {
        $('.flashcard').on('click', function() {
        $('.flashcard').toggleClass('flipped');
        });
        });
</script>
