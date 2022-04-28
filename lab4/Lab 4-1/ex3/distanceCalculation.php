<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Distance Calculation</title>
</head>

<body>
  <form action="distanceCalculationResult.php" method="post">
    <h1>Welcome to the Distance Calculation Page</h1>
    <p>Calculate the distance from Chicago</p>
    <label>Select a destination:</label>
    <br>
    <select name="destination[]" multiple size="9">
      <option value="Boston"> Boston </option>
      <option value="Dallas"> Dallas </option>
      <option value="Las Vegas"> Las Vegas </option>
      <option value="Miami"> Miami </option>
      <option value="Nashville"> Nashville </option>
      <option value="Pittsburgh"> Pittsburgh </option>
      <option value="San Francisco"> San Francisco </option>
      <option value="Toronto"> Toronto </option>
      <option value="Washington, DC"> Washington, DC </option>
    </select>
    <br><br>
    <input type="submit">
    <input type="reset">
  </form>

</body>

</html>