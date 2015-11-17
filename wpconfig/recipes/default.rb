cookbook_file "/srv/www/wordpress/current/wp-config.php" do
  source "wp-config.php"
  mode '0755'
  action :create
  owner 'deploy'
  group 'www-data'
  echo 'Hugh'
  Chef::Log.debug("Skipping deploy::nodejs application Hugh Hugh as it is not a node.js app")
end
