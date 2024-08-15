<?php

$dataPoints = array(
  ["y" => 25, "label" => "Sunday"],
  array("y" => 15, "label" => "Monday"),
  array("y" => 25, "label" => "Tuesday"),
  array("y" => 5, "label" => "Wednesday"),
  array("y" => 10, "label" => "Thursday"),
  array("y" => 0, "label" => "Friday"),
  array("y" => 20, "label" => "Saturday")
);

?>
<script>
  window.onload = function() {
    CanvasJS.addColorSet("red",
      [
        "red"
      ]);
    var chart = new CanvasJS.Chart("chartContainer", {
      title: {
        text: "Push-ups Over a Week"
      },
      axisY: {
        title: "Number of Push-ups"
      },
      data: [{
        type: "line",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
      }],
      backgroundColor: "#242729",
      colorSet: "red",
    });
    chart.render();

  }
</script>

<body>
  <div class="d-flex justify-content-center align-items-center container mt-4">
    <div id="chartContainer" style="height: 370px; width: 50%;"></div>
  </div>