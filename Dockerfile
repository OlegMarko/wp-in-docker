FROM wordpress:${WORDPRESS_VERSION:-php7.3-fpm}

# install git
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git && \
    apt-get install -y ssh

# ssh config
WORKDIR /app
COPY ssh/id_rsa /app
RUN eval `ssh-agent -s` && \
    mkdir ~/.ssh && \
    mv id_rsa ~/.ssh/ && \
    echo "StrictHostKeyChecking no" >> /etc/ssh/ssh_config && \
    cat /etc/ssh/ssh_config && \
    chmod go-w /root && \
    chmod 700 /root/.ssh && \
    chmod 600 /root/.ssh/id_rsa && \
    ssh-add ~/.ssh/id_rsa

# web app
WORKDIR /var/www/html
RUN usermod -o -u 1000 www-data && groupmod -o -g 1000 www-data
RUN chmod -R 775 /var/www/html

RUN git clone --progress git@github.com:OlegMarko/wp-theme.git /var/www/html
