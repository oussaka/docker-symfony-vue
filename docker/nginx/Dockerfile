FROM alpine:3.8

RUN apk add --update nginx
RUN rm -rf /var/cache/apk/* && rm -rf /tmp/*
RUN rm -f /etc/nginx/nginx.conf /etc/nginx/conf.d/*

ADD nginx.conf /etc/nginx/
ADD upstream.conf /etc/nginx/conf.d/upstream.conf
ADD symfony.conf /etc/nginx/conf.d/

RUN adduser -D -g '' -G www-data www-data

CMD ["nginx"]

EXPOSE 80
EXPOSE 443