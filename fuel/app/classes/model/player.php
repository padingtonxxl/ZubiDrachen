<?php
class Model_Players extends \Model_Crud {
  protected static $_table_name = 'players';
  protected static $_primary_key = 'id';
  protected static $_properties = array(
    'id',
    'name',
    'password',
    'salt',
    'created_at',
    'updated_at'
  );
  protected static $_mass_whitelist = array(
    'name',
  );
  protected static $_mass_blacklist = array(
    'id',
    'password',
    'salt',
  );
  protected static $_created_at = 'created_at';
  protected static $_updated_at = 'updated_at';
  protected static $_mysql_timestamp = true;
}
?>
