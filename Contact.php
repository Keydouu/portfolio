<section id="contact"></br></br>
<?php
    session_start();

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
            $voteType = ($_POST["vote"] == "yes") ? "yes_votes" : "no_votes";
            $conn->query("UPDATE poll SET $voteType = $voteType + 1 WHERE id = 1");
            echo '<div class="alert alert-success">Vote submitted!</div>';
        } else if($_SESSION["voted"]!=$_POST["vote"]) {
            $_SESSION["voted"] = $_POST["vote"];
            if ($_POST["vote"] == "yes"){
                $conn->query("UPDATE poll SET yes_votes = yes_votes + 1, no_votes = no_votes - 1 WHERE id = 1");
                echo '<div class="alert alert-success">Vote updated ! Wise choice !</div>';
            }else if ($_POST["vote"] == "no"){
                $conn->query("UPDATE poll SET no_votes = no_votes + 1, yes_votes = yes_votes - 1 WHERE id = 1");
                echo '<div class="alert alert-danger">I hate your guts >:(</div>';
            }
        } else {
            echo '<div class="alert alert-danger">You already voted!</div>';
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


<h2>Contact Me</h2>
<p class="contact-info">📞 <a href="tel:+123456789" class="contact-link">+123456789</a>
📧 <a href="mailto:example@example.com" class="contact-link">example@example.com</a></p>

    <h3>Chat</h3>
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
            <button type="submit" name="vote" value="yes" class="yes-btn" >Yes</button>
            <button type="submit" name="vote" value="no" class="no-btn" id="no-button" >No</button>
        </form>
        <p>Yes: <?= $yesPercent ?>% (<?= $pollResult["yes_votes"] ?> votes)</p>
        <p>No: <?= $noPercent ?>% (<?= $pollResult["no_votes"] ?> votes)</p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const noBtn = document.getElementById("no-button");
            let escapeSpeed = 20;
            
            document.addEventListener("mousemove", function(event) {
                const rect = noBtn.getBoundingClientRect();
                const mouseX = event.clientX;
                const mouseY = event.clientY;
                const btnX = rect.left + rect.width / 2;
                const btnY = rect.top + rect.height / 2;
                const distance = Math.hypot(mouseX - btnX, mouseY - btnY);
                
                if (distance < 100) {
                    let newX = rect.left + (mouseX < btnX ? escapeSpeed : -escapeSpeed);
                    let newY = rect.top + (mouseY < btnY ? escapeSpeed : -escapeSpeed);
                    
                    newX = Math.max(0, Math.min(window.innerWidth - rect.width, newX));
                    newY = Math.max(0, Math.min(window.innerHeight - rect.height, newY));
                    
                    noBtn.style.left = newX + "px";
                    noBtn.style.top = newY + "px";
                }
            });
        });
    </script>

</section>