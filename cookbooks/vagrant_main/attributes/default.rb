default[:app][:server_name]        = "localhost"
default[:app][:server_aliases]     = ["*.localhost"]
default[:app][:docroot]            = "/home/vagrant/web-app/public"
default[:app][:kohana_environment] = "development"
default[:app][:extra_packages]     = []

default[:mysql][:database] = "kohana-modules"
default[:mysql][:username] = "kohana-modules"
default[:mysql][:password] = "kohana-modules"
