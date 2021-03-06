# fem

Fem is a framework for makers.
Helping and guiding in building a (web) project.
A flexible one, one that adjusts to people, one that can grow.

Fem doesn't enforce a way of working.
It doesn't decide your structure, models, or internal api.
You are in control of your own code.
There's as little magic as possible.

- [Installation instructions](/README.md#install)
- [Getting started](/README.md#getting-started)
- [The components inside](/README.md#components)
- [Documentation](https://github.com/lode/fem/wiki)


## Install

[Use Composer](http://getcomposer.org/). And use require to get the latest stable version:

```
composer require alsvanzelf/fem
```


## Getting started

Fem comes with a pre-setup example project.

1. Copy the `example-project/` directory to your own project.
2. Check the `example-composer.json` and use from it what you want.
   It helps you set up your own project's namespace.
3. Change the namespace calls to your own project's name in:
   - `composer.json`
   - `application/bootstrap.php`
   - `application/routing.php`
   - `application/controllers/home.php`
4. Set up a virtual host, i.e. to `dev.projectname`.
5. Navigate to dev.projectname
6. Experiment with `application/controllers/home.php`.


## Components

See the [wiki for documentation](https://github.com/lode/fem/wiki).

#### Basics

- [routing](https://github.com/lode/fem/wiki/routing)
- [page](https://github.com/lode/fem/wiki/page)
- [mysql](https://github.com/lode/fem/wiki/mysql)
- [directory-structure](https://github.com/lode/fem/wiki/directory-structure)

#### Extras

- [request](https://github.com/lode/fem/wiki/request)
- [response](https://github.com/lode/fem/wiki/response)
- [exception](https://github.com/lode/fem/wiki/exception)
- [email](https://github.com/lode/fem/wiki/email)
- [string](https://github.com/lode/fem/wiki/string)
- [build](https://github.com/lode/fem/wiki/build)

#### Users

- [login](https://github.com/lode/fem/wiki/login) (via password, token, or oauth provider)
- [session](https://github.com/lode/fem/wiki/session)

#### Advanced

- [bootstrap](https://github.com/lode/fem/wiki/bootstrap)
- [mustache](https://github.com/lode/fem/wiki/mustache)
- [resources](https://github.com/lode/fem/wiki/resources)


## Contribute

Pull Requests or issues are welcome!


## License

[MIT](/LICENSE)
