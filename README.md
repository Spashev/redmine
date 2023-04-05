# Redmine


```
cd existing_repo
git remote add origin https://gitlab.com/edtchhq/workers-ng.git
git branch -M main
git push -uf origin main
```

***

### Install docker
```
make install
```
### Install all packages
```
cd src
composer install
```
### Start docker
```
make start
```
### Stop docker
```
make stop
```