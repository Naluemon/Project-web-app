<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <title>TIMMY.com</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
    <script src="js/bootstrap.bundle.min.js"></script> 
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">TIMMY.com</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto"> <!-- เปลี่ยน ml-auto เป็น ms-auto -->
               
            </ul>
        </div>
    </nav>
    <div class="headpf">Register</div>
    <div class="container">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="firstname" >FirstName :</label>
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="FirstName">
            </div>

            <div class="form-group">
                <label for="lastname">LastName :</label>
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="LastName">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="password123">
            </div>
            
            <div class="form-group">
                <label for="status">Status :</label>
                <select id="dropdown" name="dropdown">
                <option value="Please select">Please select</option>
                <option value="User">User</option>
                <option value="Admin">Admin</option>
            </select>
            </div>
            
            <div style="text-align: right">
            <button type="Cancel" class="btn btn-danger">Cancel</button>
            <button type="Submit" class="btn btn-primary">Submit</button>
</div>
        </form>
    </div>
</div>


</body>


</html>