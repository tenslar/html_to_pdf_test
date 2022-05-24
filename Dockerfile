FROM php

RUN apt update
RUN apt-get install -y zlib1g-dev libpng-dev 
RUN docker-php-ext-configure gd
RUN docker-php-ext-install -j$(nproc) gd

#COPY ./index.html /var/www/html/
#COPY ./sheet.css /var/www/html/
#COPY ./stamp.png /var/www/html/
#COPY ./pdf_dl.php /var/www/html/
CMD [ "php", "-S", "0.0.0.0:80", "-t", "/var/www/html/" ]
