<?php
include __DIR__ . "/partials/header.php";
function tableTitle($word)
{
  return strtoupper((str_replace("_", " ", $word)));
}

$filteredHotels = $hotels;

function filter($hotel)
{
  $parking = $_GET['parking'];
  return $hotel['parking'] == $parking || $parking === 'all';
}

if (isset($_GET['parking'])) {
  $filteredHotels = array_filter($filteredHotels, 'filter');
}

function filterVote($hotel)
{
  $vote = $_GET['voting'];
  return $hotel['vote'] >= $vote || $vote === 'all';
}

if (isset($_GET['voting'])) {
  $filteredHotels = array_filter($filteredHotels, 'filterVote');
}



?>

<main class="container">
  <table class="table">
    <thead>
      <tr class="text-center">
        <?php
        $firstHotel = reset($hotels);
        foreach ($firstHotel as $key => $value) { ?>
        <th scope="col">
          <?php echo tableTitle($key) ?>
        </th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($filteredHotels as $hotel) { ?>
      <tr>
        <?php
          foreach ($hotel as $value) { ?>
        <td class="text-center">
          <?php if ($value == 'parking') {
                echo "Yes";
              } else if (!$value == 'parking') {
                echo "No";
              } else {
                echo $value;
              }
              ?>
        </td>
        <?php } ?>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</main>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>

</html>