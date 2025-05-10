# Docker file
```bash
FROM mysql:8.0

# Set root password and default database via environment
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=ssc

# Copy initialization script
COPY init.sql /docker-entrypoint-initdb.d/
```
# To create 
```bash
docker build -t ssc-mysql .
docker run -d --name mysql-container -p 3306:3306 ssc-mysql
```