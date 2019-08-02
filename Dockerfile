FROM wordpress:${WORDPRESS_VERSION:-php7.3-fpm}

# install git
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git 

WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 /var/www/html

RUN git clone --progress git@github.com:OlegMarko/wp-in-docker.git /var/www/html
