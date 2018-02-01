* Configuração utilizada:

- NodeJS (https://nodejs.org/en/)
- Mariadb-server-10.2
- PHP >= 7.0 (https://secure.php.net/downloads.php)
	- sudo apt install php7.0 php7.0-xml php7.0-mbstring php7.0-mysql
- Apache 2.4
- Composer (getcomposer.org/download) 

* Execute os seguintes comandos para instalar o composer

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/bin  --filename=composer

* Vá na pasta do projeto e execute 
- compose install
- npm install
- copie o arquivo .env.example para .env (cp .env.example .env)

* Configuração das chaves
- Execute o comando 'php artisan key:generate'
- Verifique no arquivo .env se a chave foi inserida, caso não tenha sido, copie a chave gerada no campo APP_KEY do arquivo .env
- npm run dev

* Para testar o envio de e-mails, recomendamos o serviço mailtrap.io
- Após criar a conta gratuita, copie os valores de username e password nos parâmetros MAIL_USERNAME, MAIL_PASSWORD do arquivo .env
- Configure o parâmetro MAIL_ENCRYPTION do .env para 'cram-md5'

* Criando e configurando banco de dados
- mysql -u root -p (Informe a senha escolhida na instalação do MariaDB)

** Na interface do MariaDB execute os comandos abaixo:
- create DATABASE defcivil;
- create USER 'defcivil'@'localhost' identified by 'defcivil#123';
- grant all privileges on defcivil.* to 'defcivil'@'localhost';
- flush privileges;
- exit

** Altere os parâmetros DB_DATABASE, DB_USERNAME e DB_PASSWORD com os parâmetros 'defcivil', 'defcivil' e 'defcivil#123' respectivamente

** Para criar as tabelas execute 'php artisan migrate'

* Para executar o projeto execute 'php artisan serve'
