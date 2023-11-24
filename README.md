# Project Title

This is a test project for Tech Care Bd. The project is a Twitter clone with Frontend & Backend.

## Folder Structure

- **Backend**: A Laravel project with APIs.
- **Frontend**: A Vue.js project.
- **APIs**: Postman collection and environment file shared for local testing.

## Build

The project is dockerized. There is a `docker-compose` file in the Parent directory.

To Build The Project Run:

```docker-compose up -d --build```

**Frontend Port**: 9010  
**Backend Port**: 9009
**Mysql Port**: 33069


## Seed
UserSeeder Can Be Found In Backend Project. To Seed the project run 

```docker-compose exec laravel-app php artisan db:seed```

## Note
I couldn't complete the frontend part (40% done). I wanted to structure everything and craft carefully. However, there was a time issue for me. Nevertheless, I have enjoyed the task. Will finish this repository soon.

## Additional Resources

- Learn more about [Laravel](https://laravel.com/).
- Explore [Vue.js](https://vuejs.org/).
- Docker documentation: [Docker](https://docs.docker.com/).
