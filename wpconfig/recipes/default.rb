cookbook_file "/srv/www/wordpress/current/wp-config.php" do
  source "wp-config.php"
  mode '0755'
  action :create
  owner 'deploy'
  group 'www-data'
  Chef::Log.info 'Hugh HUGH hUGH huGH ahahahahaha'
end
