tracead
=======

# Download composer
git clone curl -sS https://getcomposer.org/installer | php

# Clone source
git clone https://github.com/hollodk/tracead.git

# ...
cd tracead

# Install symfony dependencies
php ../composer.phar install

# ...
chmod -R 777 app/cache app/logs

# Navigate to this in browser
-> http://localhost/tracead/web/app_dev.php/checkout -> app/Resources/views/default/checkout.html.twig
-> http://localhost/tracead/web/app_dev.php/ok -> app/Resources/views/default/ok.html.twig
-> http://localhost/tracead/web/app_dev.php/global -> app/Resources/views/default/global.html.twig

# Follow paths has custom code
src/AppBundle/Controller
app/Resources/views/
