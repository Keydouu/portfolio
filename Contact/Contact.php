
<?php
    session_start();

    $alertmsg = "none";
    
    $conn = new mysqli("localhost", "root", "Sudo516225", "porfolio");

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send_message"])) {
        $_SESSION["username"] = htmlspecialchars($_POST["username"]);
        $message = htmlspecialchars($_POST["message"]);
        $public=1;
        //$_SESSION["isPublic"] = isset($_POST["public"]) ? 1 : 0;

        if (!empty($_SESSION["username"]) && !empty($message)) {
            $stmt = $conn->prepare("INSERT INTO messages (username, message, public) VALUES (?, ?, ?)");
            $stmt->bind_param("ssi", $_SESSION["username"], $message, $public);
            $stmt->execute();
            $stmt->close();
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["vote"])) {
        
        if (!isset($_SESSION["voted"])) {
            $_SESSION["voted"] = $_POST["vote"];
            if($_POST["vote"] == "yes"){
                $voteType ="yes_votes";
                $alertmsg = "voted-yes";
            } else {
                $voteType = "no_votes";
                $alertmsg = "voted-no";
            }
            $conn->query("UPDATE poll SET $voteType = $voteType + 1 WHERE id = 1");
        } else if($_SESSION["voted"]!=$_POST["vote"]) {
            $_SESSION["voted"] = $_POST["vote"];
            if ($_POST["vote"] == "yes"){
                $conn->query("UPDATE poll SET yes_votes = yes_votes + 1, no_votes = no_votes - 1 WHERE id = 1");
                $alertmsg = "updated";
            }else if ($_POST["vote"] == "no"){
                $conn->query("UPDATE poll SET no_votes = no_votes + 1, yes_votes = yes_votes - 1 WHERE id = 1");
                $alertmsg = "voted-no";
            }
        } else {
            $alertmsg = "voted-again";
        }
    }

    // Fetch Public Messages
    $messagesResult = $conn->query("SELECT username, message FROM messages WHERE public = 1 ORDER BY created_at ASC");

    // Fetch Poll Results
    $pollResult = $conn->query("SELECT yes_votes, no_votes FROM poll WHERE id = 1")->fetch_assoc();
    $totalVotes = $pollResult["yes_votes"] + $pollResult["no_votes"];
    $yesPercent = $totalVotes ? round(($pollResult["yes_votes"] / $totalVotes) * 100) : 0;
    $noPercent = $totalVotes ? round(($pollResult["no_votes"] / $totalVotes) * 100) : 0;

    $conn->close();
?>

<div class="alert" <?php if($alertmsg != "voted-no") echo 'style="display: none;"'; ?> id="voted-no">
  <span class="closebtn">&times;</span>  
  <strong>I hate your guts </strong> but at least you got some skills.
</div>
<div class="alert success" <?php if($alertmsg != "voted-yes") echo 'style="display: none;"'; ?> id="voted-yes">
  <span class="closebtn">&times;</span> 
  <strong>Vote submitted !</strong> thank you for voting.
</div>
<div class="alert success" <?php if($alertmsg != "updated") echo 'style="display: none;"'; ?> id="updated">
  <span class="closebtn">&times;</span> 
  <strong>Vote updated ! </strong> Wise choice !
</div>

<div class="alert info" <?php if($alertmsg != "voted-again") echo 'style="display: none;"'; ?> id="voted-again">
  <span class="closebtn">&times;</span> 
  <strong>You already voted !</strong> you can only vote once per session.
</div>
<section id="contact" style="position: relative;">
<h2>Contact Me</h2>
<p class="contact-info">📞 <a class="contact-link">+33 7 44 82 77 85</a>
📧 <a href="mailto:youness.chetouan9@gmail.com" class="contact-link">youness.chetouan9@gmail.com</a></p>

    <h3>Or leave a public message</h3>
    <img src="./assets/images/bocchi.png" id="Bocchi" alt="my favorite character"
        style="top : 75px; right: -25px; position: absolute; max-height:250px;">
    <div class="chat-container">
        <?php
        if ($messagesResult->num_rows > 0) {
            while ($row = $messagesResult->fetch_assoc()) {
                echo "<div class='message'><strong class='username'>{$row['username']} </strong> {$row['message']}</div>";
            }
        } else {
            echo "<p>No messages yet.</p>";
        }
        ?>
    </div>

    <form action="?page=Contact" method="post"  class="contact-form">
        <input type="text" name="username" placeholder="Your Name"
        <?php 
            if (isset($_SESSION['username']))
                echo 'value='.$_SESSION['username'];
        ?> required>
        <!--input type="checkbox" name="public" <?php if(isset($_SESSION["isPublic"])) echo 'checked';?>>
        <label for="public">Make Public</label><br-->
        <div class="textarea-container">
            <textarea name="message" placeholder="Type a message..." required></textarea>
            <button type="submit" name="send_message" class="send-button">➤</button>
        </div>
    </form>

    <h3>Do you like this website?</h3>
    <div class="poll">
        <form action="?page=Contact" method="post">
            <button type="submit" name="vote" value="yes" class="yes-btn">Yes</button>
            <button type="submit" name="vote" value="no" class="no-btn" id="no-button" >No</button>
        </form>
        <p>Yes: <?= $yesPercent ?>% (<?= $pollResult["yes_votes"] ?> votes)</p>
        <p>No: <?= $noPercent ?>% (<?= $pollResult["no_votes"] ?> votes)</p>
    </div>
</section>