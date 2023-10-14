<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: grey;
  color: white;
}
.topnav a.active1 {
  color: white;
}
.h1{
    margin-left: 500px;
}
</style>
<script>
                function validateMenuAndDescription() {
                const menuElement = document.getElementById("menu1");
                const descriptionElement = document.getElementById("pwd1");

                const menuLength = menuElement.value.length;
                const descriptionLength = descriptionElement.value.length;

                if (menuLength >= 100 || descriptionLength >= 1000) {
                    alert("Menu name must less than 100 and Menu Description must less 1000 characters");
                    return false;
                }
                return true;
                }
                </script>
</head>
<body>

<div class="topnav">
  <a class="active">CANETE POS</a>
  <a class="active1">Manage</a>
  <a class="active">Menu</a>
</div>
</body>
<form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h1 class = "h1">CREATE MENU</h1>
    <label for="menu" maxlength="100">Menu Name</label>
    <input class="form-control" id= "menu1" maxlength="100">
  </div>
  <div class="form-group">
    <label for="pwd">Menu Description</label>
    <input class="form-control" id= "pwd1" maxlength="1000">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default" onclick="return validateMenuAndDescription()">Submit</button>
</form>