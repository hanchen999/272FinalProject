<!DOCTYPE html>
<html>
<head>
  <title>Create_user</title>
</head>
<body>
<form class="ui large form" action="create.php" method = "post">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="USERNAME" placeholder="User Name">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="PASSWORD" placeholder="Password">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="FIRSTNAME" placeholder="First Name">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="LASTNAME" placeholder="Last Name">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="mail icon"></i>
            <input type="text" name="EMAIL" placeholder="Email">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="home icon"></i>
            <input type="text" name="HOMEADDRESS" placeholder="Home Address">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="call icon"></i>
            <input type="text" name="HOMEPHONE" placeholder="Home Phone">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="call icon"></i>
            <input type="text" name="CELLPHONE" placeholder="Cell Phone">
          </div>
        </div>
        <div><a class="ui fluid large teal submit button">Create</a></div>
      </div>
       <input type = "submit" name = "Create" value = "Create"/>
    </div>

    </form>
</body>
</html>