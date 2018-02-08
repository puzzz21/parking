<!DOCTYPE html>
<html lang="en">
<head>
    <title>Parking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h3>Submit your parking information</h3>
    <form action="{{ url('api/suggest') }}" method="post">
        <div class="form-group">
            <label for="name">Parking name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Parking address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
        </div>
        <div class="form-group">
            <label for="number">mobile number:</label>
            <input type="number" class="form-control" id="number" placeholder="Enter number" name="number">
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <textarea class="form-control" id="desc" placeholder="Enter description" name="desc" rows="5">
            </textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</body>
</html>