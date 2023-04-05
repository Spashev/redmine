# Redmine


```
cd existing_repo
git remote add origin git@github.com:Spashev/redmine.git
git branch -M main
git push -uf origin main
```

***

### Install docker
```
cd redmine
```
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