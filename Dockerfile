FROM wordpress:${WORDPRESS_VERSION:-php7.3-fpm}

# install git
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git 

WORKDIR /var/www/html

# RUN git clone --progress https://github.com/WordPress/WordPress.git /var/www/html
