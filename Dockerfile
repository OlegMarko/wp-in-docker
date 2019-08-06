FROM wordpress:${WORDPRESS_VERSION:-php7.3-fpm}

# install git
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git 

WORKDIR /var/www/html
RUN usermod -o -u 1000 www-data && groupmod -o -g 1000 www-data
RUN chmod -R 775 /var/www/html

RUN git clone --progress https://github.com/OlegMarko/wp-theme.git /var/www/html
