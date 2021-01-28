<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">       
	<title>Subscribe</title>
</head>

<style>
    div{
    padding-bottom:20px;
    }
    .container {
        max-width:70%;
        padding:20px;
    }
</style>

<body>
    <div class = "container bg-light text-dark border border-dark">
        <div>
            <h2>Subscribe to our newsletter and be notified weekly!</h2>
        </div>
    
        <form method="Post" action="login.php">
            <div class="input-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <input class="col-sm-10" type="text" name="username">
            </div>
            <div class="input-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <input class="col-sm-10" type="password" name="password1">
            </div>
            <div class="input-group offset-sm-2">
                <button class="btn btn-danger" type="submit" name="login">Subscribe</button>
            </div>
        </form>
    </div>
    
    <!-- Currently don't have js functions -->
<!--     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!--     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  
</body>

</html>