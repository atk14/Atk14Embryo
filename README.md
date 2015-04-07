ATK14 embryo
============

ATK14 embryo is a minimalist skeleton for a new ATK14 application.

Check out <http://embryo.atk14.net/> to see the embryo up and running (more precisely lying down and sleeping).

Installation
------------

```bash
git clone https://github.com/atk14/Atk14Embryo.git
cd Atk14Embryo
git submodule init
git submodule update
./scripts/create_database
./scripts/migrate
```
If you are experiencing a trouble make sure that all requirements are met: <http://book.atk14.net/czech/installation%3Arequirements/>

Starting the embryo
-------------------

Start the development server

```bash
./scripts/server
```

and you may find the running embryo on http://localhost:8000/

If you have Apache installed, you may want to install the application to a virtual server.
Follow instructions from the following command.

```bash
./scripts/virtual_host_configuration
```

Don't forget to list your new project on http://www.atk14sites.net/
