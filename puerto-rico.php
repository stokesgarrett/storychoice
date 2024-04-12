<?php
session_start();

// Continue to check for the activity choice
if (isset($_POST['activity_choice']) && !empty($_POST['activity_choice'])) {
    // Store the chosen activity in the session
    $_SESSION['activity_choice'] = $_POST['activity_choice'];
    
    // Redirect to the next page 
    header('Location: pelyunque.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel='stylesheet' href='styles.css'>
    <title>puerto rico</title>
  </head>
  <body>
    <ul style="position: fixed; left: 0px; top: 0px;"></ul>
    <div class="fade-in3">
      <h2>In the land of Puerto Rico so fair,
        Beneath the moon's soft and silver glare,
        Roams a creature with eyes of fiery red,
        The Chupacabra, a name that fills with dread.
      </h2>
    </div>
    <div class="fade-in6">
      <h1>peurto rico is so nice! what can go wrong? you and friends decide on a forest to visit.</h1>
    </div>
    <div class="fade-in6">
    <div class="container">
      <form id="activity-form" action="" method="post">
        <label for="activity_choice">"what forest we going to guys?" your choice...</label>
        <select id="activity_choice" name="activity_choice">
          <option value="Visit El Yunque National Forest">Visit El Yunque National Forest</option>
        </select><br><br>
        <input type="submit" value="Continue">
      </form>
    </div>
    </div>
    <div class="footer"></div>
  </body>
</html>