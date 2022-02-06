<?php
  $DBUSER = filter_var(trim(shell_exec('aws ssm get-parameters --name DBuser --region eu-central-1 --output text --query Parameters[].Value')),
  FILTER_SANITIZE_STRING);
  $DBNAME = filter_var(trim(shell_exec('aws ssm get-parameters --name DBdb --region eu-central-1 --output text --query Parameters[].Value')),
  FILTER_SANITIZE_STRING);
  $DBHOST = filter_var(trim(shell_exec('aws ssm get-parameters --name DBhost --region eu-central-1 --output text --query Parameters[].Value')),
  FILTER_SANITIZE_STRING);
  $DBPASS = filter_var(trim(shell_exec('aws ssm get-parameters --name DBpass --region eu-central-1 --with-decryption --output text --query Parameters[].Value')),
  FILTER_SANITIZE_STRING);
 ?>
