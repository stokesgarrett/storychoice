<?php
session_start();

// Continue to check for the activity choice
if (isset($_POST['activity_choice']) && !empty($_POST['activity_choice'])) {
    // Store the chosen activity in the session
    $_SESSION['activity_choice'] = $_POST['activity_choice'];
    
    // Redirect to the next page
    header('Location: crystallake.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel='stylesheet' href='styles.css'>
    <title>cunningham</title>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in3">
      <h2>Cunningham lurks in shadows deep,
        A chilling secret he does keep.
        With eyes that gleam in moon's pale light,
        He haunts the darkest depths of night.
      </h2>
    </div>
    <div class="fade-in6">
      <h1>you arrive to cunnigham on a cold, breezy night. you must decide what you want to do the following day with your friends</h1>
    </div>
    <div class="fade-in6">
    <div class="container">
      <form id="activity-form" action="" method="post">
        <label for="activity_choice">whats it gonna be</label>
        <select id="activity_choice" name="activity_choice">
          <option value="Camp Crystal Lake">visit Camp Crystal Lake</option>
        </select><br><br>
        <input type="submit" value="Continue">
      </form>
    </div>
    </div>
    <div class="footer"></div>
  </body>
</html>
