<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = Article::create([
            'name'        => 'How to set up homestead on Ubuntu',
            'description' => 'I quick step by step guide to installing homestead.',
            'cover_image' => '/images/homestead.jpg',
            'body'        => <<<'Homestead'
                <div class="column is-10 is-offset-1">
                    <h1 class="title article--title">How to set up homestead on Ubuntu</h1>
                </div>

                <div class="column is-10 is-offset-1">
                    <img src="/images/homestead.jpg" alt="">
                </div>

                <div class="column is-10 is-offset-1">
                    <p>Hello there my name is Tomas, In this article I want to show you how to set up homestead for
                        Ubuntu. The version I am using is 16.04 but these steps should be the same for other releases of
                        Ubuntu. First off we need to install a few things. The first thing we need is Virtual box. Paste
                        these commands in your terminal to install Virtual box</p>
                </div>

                <div class="column is-10 is-offset-1">
                    <pre><code>
sudo sh -c 'echo "deb http://download.virtualbox.org/virtualbox/debian xenial contrib" >> /etc/apt/sources.list.d/virtualbox.list'

wget -q https://www.virtualbox.org/download/oracle_vbox_2016.asc -O- | sudo apt-key add -

sudo apt update

sudo apt install virtualbox-5.1
                        </code></pre>
                </div>

                <div class="column is-10 is-offset-1">
                    <p>The next thing we will need is Vagrant, do the same with these commands.</p>
                </div>

                <div class="column is-10 is-offset-1">
                    <pre><code>
sudo apt-get update

sudo apt-get install vagrant
                        </code></pre>
                </div>

                <div class="column is-10 is-offset-1">
                    <p>Next we need to add the laravel homestead virtual box to Vagrant box.</p>
                </div>

                <div class="column is-10 is-offset-1">
                    <pre><code>
vagrant box add laravel/homestead
                        </code></pre>
                </div>

                <div class="column is-10 is-offset-1">
                    <p>Now if you dont have git installed we wont be able to move on to the next step so lets install
                        it.</p>
                </div>

                <div class="column is-10 is-offset-1">
                    <pre><code>
sudo apt-get update

sudo apt-get install git
                        </code></pre>
                </div>

                <div class="column is-10 is-offset-1">
                    <p>Now that we have git installed the next step is to clone the homestead repository</p>
                </div>

                <div class="column is-10 is-offset-1">
                    <pre><code>
cd ~

git clone https://github.com/laravel/homestead.git Homestead
                        </code></pre>
                </div>

                <div class="column is-10 is-offset-1">
                    <p>Once homestead is done downloading from github we need to change directories into that folder to
                        initialize the homestead files</p>
                </div>

                <div class="column is-10 is-offset-1">
                    <pre><code>
cd ~/Homestead

bash init.sh
                        </code></pre>
                </div>

                <div class="column is-10 is-offset-1">
                    <p>Once that command is finished it makes a new directory at ~/.homestead and inside of there we
                        have a file called Homestead.yaml. This file is how we tell homestead the path to our projects
                        and the database the projects will use. So to set it up lets open it up in your editor. The file
                        should look like this:</p>
                </div>

                <div class="column is-10 is-offset-1">
                    <pre><code>
ip: "192.168.10.10"
memory: 2048
cpus: 1
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    // Change this to whatever folder name you want
    // make sure to change all places to that folder name
    // you have 3 places, in map:, to:, and under sites: to:
    - map: ~/projects
      to: /home/vagrant/projects

sites:
    - map: your_project_name.dev
      to: /home/vagrant/projects/your_project_name.dev/public

    - map: blog.dev
      to: /home/vagrant/projects/blog.dev/public

databases:
    - homestead
    - your_data_base
                        </code></pre>
                </div>

                <div class="column is-10 is-offset-1">
                    <p> Once you have changed the folder name to the path of your projects and added a few projects
                        under sites and updated the databases to match your projects databases, the next thing we need
                        to do is update your /etc/hosts file. To make any changes to this file make sure you open up
                        your editor with sudo, this example will use vim.</p>
                </div>

                <div class="column is-10 is-offset-1">
                    <pre><code>
sudo vim /etc/hosts
                        </code></pre>
                </div>

                <div class="column is-10 is-offset-1">
                    <p>Once the file opens we want to copy the name that you put in the Homestead.yaml file under sites
                        into this file and give it the same IP as the first line of your homestead file, these lines of
                        code can go anywere in the hosts file but I suggest keeping it tidy so you can find all your
                        homestead sites fast like so</p>
                </div>

                <div class="column is-10 is-offset-1">
                    <pre><code>
### Homestead sites

192.168.10.10 your_project_name.dev

192.168.10.10 blog.dev

                        </code></pre>
                </div>

                <div class="column is-10 is-offset-1">
                    <p> Once your done and you save that file the last step is to change directories back into Homestead
                        and run vagrant up</p>
                </div>

                <div class="column is-10 is-offset-1">
                    <pre><code>
cd ~/Homestead

vagrant up --provision
                        </code></pre>
                </div>

                <div class="column is-10 is-offset-1">
                    <p>Once that is finished pat your self on the back as you just installed homestead, now just a few
                        pointers: whenever running anything from your homestead I suggest running the command vagrant
                        ssh from inside your Homestead directory and changing into you correct directory inside of
                        Homestead. As if you run it from your computer you could get some funny errors. Also if you need
                        to create a new site just run vagrant halt then vagrant up --provision</p>
                </div>
Homestead
,
            'author'      => 'Tomas Leffew',
            'slug' => 'how-to-set-up-homestead-on-ubuntu',
        ]);
        $article->keywords()->sync([1]);
        $article->images()->sync([6]);

        $article = Article::create([
            'name'        => 'Making laravel easy!',
            'description' => 'This is a simple description filler, dummy text for layout purposes',
            'cover_image' => '/images/laravel.png',
            'body'        => '<div><p>This is a P tag</p></div>',
            'author'      => 'Tomas Leffew',
            'slug' => 'makeing-larevl-easy!',
        ]);
        $article->keywords()->sync([1, 3, 5]);
        $article->images()->sync([1, 2, 3]);

// new article--------------------
        $article = Article::create([
            'name'        => 'Learning React',
            'description' => 'This is a simple description filler, dummy text for layout purposes',
            'cover_image' => '/images/react.png',
            'body'        => '<div><p>This is a P tag</p></div>',
            'author'      => 'CJ Sampson',
            'slug' => 'learning-react',
        ]);
        $article->keywords()->sync([2, 4]);
        $article->images()->sync([1, 2, 4]);

// new article--------------------
        $article = Article::create([
            'name'        => 'Mapping over arrays',
            'description' => 'This is a simple description filler, dummy text for layout purposes',
            'cover_image' => '/images/jquery.png',
            'body'        => '<div><p>This is a P tag</p></div>',
            'author'      => 'CJ Sampson',
            'slug' => 'mapping-over-arrays',
        ]);
        $article->keywords()->sync([2, 5]);
        $article->images()->sync([1, 3, 4]);

// new article--------------------
        $article = Article::create([
            'name'        => 'Setting href for a Button Tag',
            'description' => 'Here\'s a quick hack for dynamically setting a location property for a button tag',
            'cover_image' => '/images/javascript.png',
            'body'        => '<div><p>This is a P tag</p></div>',
            'author'      => 'CJ Sampson',
            'slug' => 'setting-href-for-a-button-tag',
        ]);
        $article->keywords()->sync([2, 5]);
        $article->images()->sync([1, 3, 4]);        
    }
}
