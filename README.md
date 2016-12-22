## Application Structure


```
├── app                                     # Main laravel folder
|      Http                                 # Contains the functionality of the website
|       ├── Controllers                     # Holds the controllers
|       ├── Models                          # Holds the models
|       ├── Reposotories                    # Holds the database logic
|       └── Services                        # Holds the services
├── bootstrap                   
├── config             
├── database  
├── public                                  # Where the sites styles, fonts, images, js are located
|      ├── css                              # Where the sites css are located
|      └── js                               # Where the sites js are located
├── resources                               # Default storage for all pulled in files
|     └──views                              # Where the sites html files are located
├── routes                                   
|     └── web.php                           # How the sites url is formated
├── storage 
└── tests


```
