<?php

function strip_bad_chars($input) {
  $output = preg_replace('/[^a-zA-Z0-9_-]/', '', $input);
  return $output;
}

?>
