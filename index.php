<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Vaccine Availability</title>
</head>
<body>
	<form method="POST" action="checkavailability.php">
	<div class="mb-3">
	<label for="Input1" class="form-label">Enter your Pincode : </label>
	<input type="number" class="form-control" name="pin" placeholder="331506" id="pin" style="width:30%;" required>
    </div>
    <div class="mb-3">
    <label for="Input2" class="form-label">Enter date : </label>
    <input type="text" class="form-control" placeholder="dd-mm-yyyy(ex.21-03-2021)" name ="date" id="date" style="width:30%;" required>
    </div>
	<button class="btn btn-primary" type="submit">Check</button>
	</form>
</body>
</html>