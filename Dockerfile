FROM php

COPY ./code/ /code
WORKDIR /code

EXPOSE 8000