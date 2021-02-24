FROM mysql:8.0
LABEL maintainer="ucan-lab <yes@u-can.pro>"

ENV TZ=UTC

COPY ./infra/docker/mysql/my.cnf /etc/my.cnf

COPY ./infra/docker/mysql/DB/test.sql /docker-entrypoint-initdb.d/test.sql

CMD ["mysqld"]
