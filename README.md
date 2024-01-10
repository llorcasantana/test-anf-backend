
# Entrevista ANF AC

Esta es la prueba de backend para la entrevista de trabajo




## Author

- [@Jose M. Llorca](https://www.github.com/llorcasantana)


## Demo

Las llamadas api se hacen desde [URL]/api/management

### CREATE
[POST] [URL]/api/management/peoples/post

```json
{
    "user": String,
    "last_name": String,
    "age": Integer,
    "gender": String,
    "email": String
}
```

### UPDATE
[POST] [URL]/api/management/peoples/update/[id]

```json
{
    "user": String,
    "last_name": String,
    "age": Integer,
    "gender": String,
    "email": String
}
```

### INDEX
[GET] [URL]/api/management/peoples/getList


### SHOW
[GET] [URL]/api/management/peoples/get/[id]
## 

[Llorcadev](https://llorcadev.com/)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)


