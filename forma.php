<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Filter Reviews</h1>
    <form action="display.php" method="post">

<div id="data">
    <label>Order by rating:</label>
    <select name="rating_string">
           <option value="Highest">Highest</option>
           <option value="Lowest">Lowest</option>
</select>
<br>
    <label>Minimum Rating:</label>
    <select name="rating_number">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
</select>
<br>
    <label>Order by Date:
       <select name="Date">
           <option value="Oldest First">Oldest First</option>
           <option value="Newest First">Newest First</option>
</select>
<br>

           <label>Prioritize by text:</label>
           <select name="text">
           <option value="Yes">Yes</option>
           <option value="No">No</option>
</select>
</div>

<div id="buttons">
    <label>&nbsp;</label>
    <input type="submit" value="Filter"/><br />
</div>

</form>
</body>
</html>