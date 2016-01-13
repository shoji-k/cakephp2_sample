-- for main
create database cakephp_sample character set utf8;
create user 'cakephp_user'@'localhost' identified by 'password'
grant all on cakephp_sample.* to 'cakephp_user'@'localhost';

-- for test
create database test_cakephp_sample character set utf8;
grant all on test_cakephp_sample.* to 'cakephp_user'@'localhost';

flush privileges;

