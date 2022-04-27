# DoubleNugget

![License](https://img.shields.io/static/v1?label=license&message=MIT&color=green) ![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/JustGritt/DoubleNugget) ![GitHub commit activity](https://img.shields.io/github/commit-activity/m/JustGritt/DoubleNugget)

<p align="center">
  <img alt="Double Nugget" src="https://www.brandbucket.com/sites/default/files/logo_uploads/427207/large_doublenugget.png">
</p>

<br>[DoubleNugget](#doublenugget) It is a project realized with the Laravel framework and Bootstrap, developed in two days (school project taking place over a week) with the objective of having a functional and neat application.
<br>

> 3 days were dedicated to the learning and 2 days to the realization of the website with the objective to present the goal and the objectives reached in front of a jury.
<br>

## Table of Contents

1. **Getting Started**
    - [What is DoubleNugget ?](#doublenugget)
    <br>

2. **Download & Prerequisites**
    - [Download instructions](#download)
    - Live Test (coming soon)
    <br>

3. **Contribute**
    - [Submit bugs and feature requests](#contributing)
    - [Support and donations](#contributing)
    <br>

4. **Donations**
    - [Supporting the project](#supporting-the-project)
    <br>

## Download instructions

**Installing Composer**

Make sure that you have a recent version of [PHP](https://www.php.net/downloads), this project is built on PHP 8.1.5 as it is the current latest version. You will have to run the website on [Laravel](https://laravel.com/docs/9.x/installation) and have [Composer](https://getcomposer.org/) installed on your machine.
If you want to use this project to develop your own project, you might need an IDE such as [Visual Studio Code](https://code.visualstudio.com/Download) for instance if you don't have one yet.

Depending on your installation you might also need to install [Docker](https://www.docker.com/get-started/) or a virtual machine such as [XAMPP](https://www.apachefriends.org/download.html), you can check if either are on your machine by running the commands below.

**You may check your Docker version by running**:

```bash
docker --version 
```

<br>

**Installing dependencies**

Once the container is running, you can run the following command to install the dependencies:

```bash
# to generate a new container
./vendor/bin/sail up -d 
```

<br>

Those commands will install the dependencies and generate the necessary files to run the application.

```bash
# to install breeze (login/register components)
./vendor/bin/sail composer require laravel/breeze --dev
./vendor/bin/sail artisan breeze:install
```

<br>
Once the application is running, you can run the following command to test it:

```bash
# to install dependencies & run the app
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```
<br>
Then you can migrate the database by running the command:

```bash
# to migrate the databases
./vendor/bin/sail artisan migrate
```
<br>

Note that in this repository whenever you see `./vendor/bin/sail` it will be assumed that it is the code run in a **Docker container** if you are using one.

You should be able to access the page in local using the followinf url: `http://localhost/`. If you are using a virtual machine, you can use the following url: `http://127.0.0.1/`.

## Contributing

If you want to help us improve DoubleNugget here's what you can do:

- [Submit bugs and feature requests](#), and help us verify as they are checked in
- Review [source code changes](#)

If you are interested in fixing issues and contributing directly to the code, please join our [discord](#) or join us on our social medias ✨

## Supporting the project

You may support this project via ❤️️ [GitHub](https://github.com/sponsors/JustGritt).
