node[:deploy].each do |application, deploy|
  instance0 = node["opsworks"]["layers"]["php-app"]["instances"]["0"]
	Chef::Log.info(instance0)
  thisinstance = node["opsworks"]["instance"]["aws_instance_id"]
	Chef::Log.info(thisinstance)
	if instance0 == thisinstance
		Chef::Log.info("Same Isntance")
	end
end
