<?php
function generateStory($singular_noun, $verb, $color){
  $story = "\nThe woods are lovely,\ndark, and deep.
\nBut I have promises to keep,
\nAnd miles to go before I sleep,
\nAnd miles to go before I sleep.\n";

return $story;
}

echo generateStory("bed", "sleep", "red");
