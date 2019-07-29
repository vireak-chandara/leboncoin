# Installation

## Cloner le repository :
```
git clone https://github.com/vireak-chandara/leboncoin.git
```


## Entrer dans le dossier et installer les dépendances
```
composer install
```

## Créer le host dans le fichier : C:\Windows\System32\drivers\etc\hosts :
```
127.0.0.1 leboncoin.local
    ::1 leboncoin.local
```

## Wamp : ajouter le host dans la config apache : C:\wamp64\bin\apache\apache2.4.35\conf\extra\httpd-vhosts.conf
```
<VirtualHost leboncoin.local:80>
  ServerName leboncoin.local
  ServerAlias leboncoin.local
  DocumentRoot "${INSTALL_DIR}/www/leboncoin"
  <Directory "${INSTALL_DIR}/www/leboncoin">
      Options Indexes FollowSymLinks MultiViews
     Require all granted
     <IfModule mod_rewrite.c>
       RewriteEngine On
       RewriteCond %{REQUEST_FILENAME} !-f
       RewriteRule ^(.*)$ /index.php [QSA,L]
     </IfModule>
  </Directory>
</VirtualHost>
```
#### Wamp : Importer la base de données dans une base de données appelée crm à partir du fichier upgrade.sql ou modifier le fichier app/Config.php
```
    /**
     * Config constructor.
     */
    public function __construct()
    {
        $this->settings = [
            "db_user" => "root",
            "db_pass" => "",
            "db_host" => "localhost",
            "db_name" => "crm" 
        ];
    }
```
