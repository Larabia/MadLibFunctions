<?php
function generateStory($singular_noun, $verb, $color, $distance_unit){
  $story = "\nThe {$singular_noun}s are lovely,\n{$color}, and deep.
\nBut I have promises to keep,
\nAnd {$distance_unit}s to go before I {$verb},
\nAnd {$distance_unit}s to go before I {$verb}.\n";

return $story;
}

echo generateStory("bed", "sleep", "red", "mile");

echo generateStory("card", "take", "blue", "mile");

echo generateStory("leaf", "shake", "green", "kilometer");
