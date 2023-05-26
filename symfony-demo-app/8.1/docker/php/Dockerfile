FROM php:8.1-fpm-buster
ARG TIMEZONE

COPY docker/php/php.ini /usr/local/etc/php/conf.d/docker-php-config.ini
COPY docker/php/xhprof.ini /usr/local/etc/php/conf.d/xhprof.ini

RUN apt-get update && apt-get install -y \
    gnupg \
    g++ \
    procps \
    openssl \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libpng-dev \
    libjpeg-dev \
    libicu-dev  \
    libonig-dev \
    libxslt1-dev \
    acl \
    && echo 'alias sf="php bin/console"' >> ~/.bashrc

RUN docker-php-ext-configure gd --with-jpeg --with-freetype

RUN docker-php-ext-install \
    pdo pdo_mysql zip xsl gd intl opcache exif mbstring

RUN curl "http://pecl.php.net/get/xhprof-2.3.2.tgz" -fsL -o ./xhprof-2.3.2.tgz && \
    mkdir /var/xhprof && tar xf ./xhprof-2.3.2.tgz -C /var/xhprof && \
    cd /var/xhprof/xhprof-2.3.2/extension && \
    phpize && \
    ./configure && \
    make && \
    make install

# custom settings for xhprof


RUN docker-php-ext-enable xhprof

#folder for xhprof profiles (same as in file xhprof.ini)
RUN mkdir -m 777 /profiles

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

WORKDIR /var/www/symfony
RUN /usr/bin/composer install \
        --no-progress \
        --no-interaction \
        --no-dev \
        --optimize-autoloader \
        --prefer-dist \
	&& chmod -R 777 /var \
	&& rm -rf /var/cache/* \
	&& rm -rf /var/logs/*
