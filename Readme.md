Install using docker container:

update line 11 of docker commpose file if you have an existing attachment/files folder from an old installation.

services:
  phpbb:
    # build:
    #   context: .
    image: latheefp/itrunbook:3.3
    ports:
      - "8088:80"
    env_file:
      - docker/env
    volumes:
     #  - /existingattachment:/var/www/html/files
       - attachment:/var/www/html/files
    networks:
        - infratool     
networks:
    infratool:
      external: true
volumes:
  attachment:




docker compose up


How Install in K8s using helm.

1. Clone the repo

https://github.com/latheefp/itrunbook.git


2. install the using the yaml.

helm install itrunbook itrunbook/helm/itrunbook --create-namespace
