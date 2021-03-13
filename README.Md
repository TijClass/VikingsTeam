# Booking app 

## Technically
 - PHP
 - MYSQL
 - JS
 - HTML/CSS
 - TAILWINDCSS
 - GULP
 - NPM

## Installation

To start working on this project first thing you need to is to install all dependencies in th `package.json` file by using: `

```bash
npm install
```
or for short just type 

```bash 
npm i
```

**NOTE** if you got any error try to install this packages

```bash
npm install --global windows-build-tools
```

for more inforatmion about how to install it please [check the npm page for this package](https://www.npmjs.com/package/windows-build-tools)

also you need to install `node-gyp` check the npm page for this package [here](https://www.npmjs.com/package/node-gyp)

**NOTE: MAKE SURE TO RUN POWERSHELL AS ROOT TO INSTALL THOSE PACKAGES**

after all that you will be okay to try run `npm i` again

**MAKE SURE YOU ARE IN THE ROOT FOLDER FOR THIS PROJECT TO RUN THE `npm i`**

## Example for installing npm dependencies:

```bash
➜  vikingsteam git:(master) ls             
app.test.js    node_modules       public     tailwind.config.js
composer.json  package.json       README.Md  yarn.lock
gulpfile.js    package-lock.json  src
➜  vikingsteam git:(master) npm i     
removed 6 packages and audited 839 packages in 4.461s

62 packages are looking for funding
  run `npm fund` for details

found 0 vulnerabilities

➜  vikingsteam git:(master) 

```


## Gulp Part

in this project we try to work with gulp for task runing [check the gulp documentation](https://gulpjs.com/docs/en/getting-started/quick-start) for more info about it

### How to run it

just run this: 
```bash
gulp
```

if you want to work with for convert tailwind  use this: `gulp styles`

check [gulpfile.js](./gulpfile.js) for more info about it

