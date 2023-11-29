<?php
include __DIR__ . "/partials/header.php";

function tableTitle($word)
{
  return strtoupper((str_replace("_", " ", $word)));
}

?>

<main>
  <table class="table">
    <thead>
      <tr>
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
      foreach ($hotels as $hotel) { ?>
      <tr>
        <?php
          foreach ($hotel as $value) { ?>
        <td>
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