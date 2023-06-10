/* altera o modo de autenticação no MySQL para aceitar o 
   modo antigo usado pelo PHP
*/
/*
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY ''; 
*/




/* criar usuário específico para aplicação agenda */

CREATE USER 'aplicacao_curso'@'%localhost' IDENTIFIED VIA mysql_native_password USING '***';
GRANT SELECT, INSERT, UPDATE, DELETE ON *.* TO 'aplicacao_curso'@'%localhost' 
REQUIRE NONE WITH GRANT OPTION 
MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON `curso`.* TO 'aplicacao_curso'@'%localhost';