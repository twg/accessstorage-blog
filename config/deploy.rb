set :application, "accessstorage-blog"
set :repository,  "git@github.com:twg/#{application}.git"
set :deploy_via, :remote_cache
set :scm, "git"
set :user, "deploy"
set :use_sudo,  false

task :production do
  
  set :domain, "php5.twg.ca"  
  set :deploy_to, "/web/blog.accessstorage.ca/theme"  
  
  set :keep_releases, 5
  
  role :app, domain
  role :web, domain  
  
  after "deploy:update_code", "deploy:cleanup"
  
  namespace :deploy do
    task :start   do ; end
    task :stop    do ; end
    task :restart do ; end
    task :finalize_update do ; end
  end  

end
