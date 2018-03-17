<?php

  class Controller_Player extends Controller {
    public function action_index() {
      $result = Model_Players::get_by_pk(1);
      echo $result->name;
    }
  }
?>
