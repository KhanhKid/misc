## Add user specific database
       CREATE USER 'myuser'@'localhost' IDENTIFIED BY 'some_pass';
       grant all privileges on {Db_name}.* to 'myuser'@'localhost' identified by 'some_pass';
    
## Import ingore error
       mysql -u userName -p -f -D dbName < script.sql
