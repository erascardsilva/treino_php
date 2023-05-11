# Imagem base do PHP com Apache
FROM php:8.0-apache

# Copia os arquivos do projeto para o diretório de trabalho do contêiner
COPY . /var/www/html

# Habilita o módulo do Apache para o PHP
RUN a2enmod rewrite

# Reinicia o servidor Apache
RUN service apache2 restart