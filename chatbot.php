<?php
header("Content-Type: text/plain");

if (!isset($_GET['q'])) {
  echo "Please ask a question.";
  exit;
}

$question = strtolower(trim($_GET['q']));

// Simple keyword matching logic
if (strpos($question, 'time') !== false || strpos($question, 'start') !== false) {
  echo "The event starts at 9:00 AM.";
} elseif (strpos($question, 'location') !== false || strpos($question, 'venue') !== false) {
  echo "The event will be held at Kigali Conference Centre.";
} elseif (strpos($question, 'register') !== false) {
  echo "You can register using the 'Register' button above.";
} elseif (strpos($question, 'speakers') !== false) {
  echo "We have speakers from the tech and business industries. Visit the 'Speakers' page for more.";
} elseif (strpos($question, 'contact') !== false) {
  echo "You can contact us through the Contact page or email: info@eventconf.rw";
} else {
  echo "Sorry, I didn't understand that. Can you ask differently?";
}
?>
