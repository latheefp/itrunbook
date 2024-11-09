
# itrunbook Installation Guide

## Install using Docker

1. Update line 11 of `docker-compose.yml` file if you have an existing `attachment/files` folder from an old installation.

```yaml
services:
  phpbb:
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
```

2. Run the Docker Compose command to bring up the services:

```bash
docker-compose up
```

## Install in Kubernetes using Helm

1. Clone the repository:

```bash
git clone https://github.com/latheefp/itrunbook.git
```

2. Use Helm to install the application:

```bash
helm install itrunbook itrunbook/helm/itrunbook --create-namespace
```

This will deploy `itrunbook` in a new namespace in your Kubernetes cluster.
