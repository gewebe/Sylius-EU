
# Sylius EU

This is a draft for a Sylius EU compliant template for starting new projects.

### Features
- General Data Protection Regulation (GDPR)
- Terms and conditions
- Legal information
- VAT Tax

## Installation

### Docker

#### Development

Make sure you have installed [Docker](https://docs.docker.com/get-docker/) on your local machine.
Execute `docker compose up -d` in your favorite terminal and wait some time until the services will be ready. You might want to see docker logs.
Then enter `localhost` in your browser or execute `open localhost` in your terminal.

#### Production

The simplest way to deploy your Sylius store via Docker is via `docker-compose.prod.yml` configuration file.
To do that you need to install [Docker](https://docs.docker.com/get-docker/) on your VPS and define `MYSQL_PASSWORD` environment.
Then execute `docker compose -f docker-compose.prod.yml up -d` command in your terminal. The `MYSQL_PASSWORD` env will be automatically
applied to the rest of the config.

> When using a Virtual Private Server (VPS) we recommend having at least 2GB of RAM memory

**Quick deploy:**
```bash
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh

export MYSQL_PASSWORD=SLyPJLaye7

docker compose -f docker-compose.prod.yml up -d
docker compose -f docker-compose.prod.yml exec php bin/console sylius:fixtures:load --no-interaction
```

## Troubleshooting

If something goes wrong, errors & exceptions are logged at the application level:

```bash
$ tail -f var/log/prod.log
$ tail -f var/log/dev.log
```

## Contributing

Would like to help us and build the most developer-friendly eCommerce framework? Start from reading our [Contribution Guide](https://docs.sylius.com/en/latest/contributing/)!

## Stay Updated

If you want to keep up with the updates, [follow the official Sylius account on Twitter](http://twitter.com/Sylius) and [like us on Facebook](https://www.facebook.com/SyliusEcommerce/).

## Bug Tracking

If you want to report a bug or suggest an idea, please use [GitHub issues](https://github.com/Sylius/Sylius/issues).

## Community Support

Get Sylius support on [Slack](https://sylius.com/slack), [Forum](https://forum.sylius.com/) or [Stack Overflow](https://stackoverflow.com/questions/tagged/sylius).

## MIT License

Sylius is completely free and released under the [MIT License](https://github.com/Sylius/Sylius/blob/master/LICENSE).

## Authors

Sylius was originally created by [Paweł Jędrzejewski](http://pjedrzejewski.com).
See the list of [contributors from our awesome community](https://github.com/Sylius/Sylius/contributors).
