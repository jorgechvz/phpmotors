FROM php:latest

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar archivos de la aplicación al contenedor
COPY . /var/www/html

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Exponer el puerto 80
EXPOSE 80

# Comando para ejecutar la aplicación PHP
CMD ["php", "-S", "0.0.0.0:80"]
