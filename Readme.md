
# itrunbook Installation Guide

## Install using Docker

1. Update line 11 of `docker-compose.yml` file if you have an existing `attachment/files` folder from an old installation. Also, update docker/env based on your db configuration info.

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

2. update values.yaml based on your requerments. 

```bash
vi itrunbook/helm/itrunbook/values.yaml

```
3. if you want to see the manifest before appling, you can run below command.

```bash
helm template itrunbook  itrunbook/helm/itrunbook --create-namespace >manifest.yaml
```


4. make sure, you are logged in to your k8s cluster with required admin permission to create namespace and deploy it. 

5. Use Helm to install the application:

```bash
helm install itrunbook itrunbook/helm/itrunbook --create-namespace
```

This will deploy `itrunbook` in a new namespace in your Kubernetes cluster.


DB User creation:

you can create DB user like below (select IP/range based on your environment )

CREATE  USER 'itrunbook'@'10.%' IDENTIFIED BY 'yourxpass';

GRANT ALL PRIVILEGES ON itrunbook.* TO 'itrunbook'@'10.%';
FLUSH PRIVILEGES;
