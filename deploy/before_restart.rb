node[:deploy].each do |application, deploy|
	execute "chown" do
	  command "chown -R deploy:deploy #{node[:deploy][application][:deploy_to]}/current/config"
	  user "root"
	  action :run
	end

	execute "chmod" do
	  command "chmod -R 777 #{node[:deploy][application][:deploy_to]}/current/config"
	  user "root"
	  action :run
	end
end