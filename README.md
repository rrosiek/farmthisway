# Farmthisway Website

To run using Docker, build the images and run the containers:

```
docker-compose up -d
```

Install dependencies:

```
docker-compose exec app composer install
docker-compose run --rm npm i
docker-compose run --rm npm run dev
```

[MIT license](http://opensource.org/licenses/MIT).
