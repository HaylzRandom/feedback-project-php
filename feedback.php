<?php
include 'inc/header.php';
?>

<?php

$feedback = [
  [
    'id' => '1',
    'name' => 'Susan Bones',
    'email' => 'susan@email.com',
    'body' => 'Angel Farm Shop sells some tasty cupcakes by their owner Hayley!',
    'date' => '2023-01-01 21:20:30'
  ],
  [
    'id' => '2',
    'name' => 'Arthur Weasley',
    'email' => 'arthur@email.com',
    'body' => 'Angel Farm Shop does contain some wonderful contraptions, must learn about eckeltricity more!',
    'date' => '2023-02-19 21:20:30'
  ],
  [
    'id' => '3',
    'name' => 'Tom Riddle',
    'email' => 'tom@email.com',
    'body' => 'Angel Farm Shop was the worst experience you could ever have. Never go here.',
    'date' => '2023-03-14 21:20:30'
  ],
];

// Would get data from database
/* $sql = 'SELECT * FROM feedback';

$result = mysqli_query($conn, $sql);

$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC); */


?>

<h2>Past Feedback</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt-3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt-22">
        By <?php echo $item['name']; ?> on <?php echo date_format(date_create($item['date']), "d/m/y"); ?>
      </div>
    </div>
  </div>

<?php endforeach; ?>

<?php
include 'inc/footer.php';
?>