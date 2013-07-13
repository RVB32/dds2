<?php include('header.php'); ?>
<div class="container">
  <div class="span5">
    <h1>Sign in, please</h1>
    <p>To access the Digital Display System, please login using your CCIS credentials. If you need assistance, contact crew@ccs.neu.edu.</p>
  </div>
  <div class="span6 login-span">
    <form class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="username">Username</label>
        <div class="controls">
          <input type="text" id="username" placeholder="Username">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="password">Password</label>
        <div class="controls">
          <input type="password" id="password" placeholder="Password">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button type="submit" class="btn">Sign in</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php include('footer.php'); ?>