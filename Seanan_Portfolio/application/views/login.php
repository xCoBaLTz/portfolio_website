<style>
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
</style>

<div>
<?php
  echo "<h2>Admin Access</h2>";
  $this->load->helper("form");
  echo form_open("portfolio/login_validation");
  echo 'Username: ';
  echo form_input("username");
  ?>
  <br>
  <br>
  <?php
  echo 'Password: ';
  echo form_password("password");
  ?>
  <br>
  <br>
  <?php
  echo form_submit("Submit", "Login");
  echo form_close();

?>
</div>
