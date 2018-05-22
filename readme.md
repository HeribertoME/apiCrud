## API User basic CRUD
API C.R.U.D. (Create, Read, Update and Delete) básico para un usuario.

Endpoints:

**Lista de Usuarios**
----
  Retorna data con los usuarios registrados.

* **URL**

  /users

* **Méodo:**

  `GET`
  
*  **Parametros URL**
	
  No aplica

* **Parametros Cuerpo**
  
  No aplica

* **Success Response:**

  * **Código:** 200 OK <br />
    **Contenido:** 
    `{
	    "data": [
		    {
			    "id": 2,
			    "name": "Anabelle klocko",
			    "email": "ybeer@example.net",
			    "genre": "Man",
			    "verified": "0",
			    "admin": "true",
			    "created_at": "2018-05-22 19:01:20",
			    "updated_at": "2018-05-22 19:01:20",
			    "deleted_at": null
		    },
		    {
			    "id": 3,
			    "name": "Mandy roob md",
			    "email": "anderson.barney@example.com",
			    "genre": "Man",
			    "verified": "1",
			    "admin": "true",
			    "created_at": "2018-05-22 19:01:20",
			    "updated_at": "2018-05-22 19:01:20",
			    "deleted_at": null
		    },
        {...}
	    ]
    }`
 
* **Error Response:**
  * **Código:** 403 UNAUTHORIZED <br />
    **Contenido:** 
    `{
	      "error": "No posee permisos para ejecutar esta acción.",
	      "code": 403
     }`
     
     Ó

  * **Código:** 401 UNAUTHENTICATED <br />
    **Contenido:**
    `{
	      "error": "No autenticado.",
	      "code": 401
     }`

**Muestra un usuario**
----
  Retorna data con un usuario simple.

* **URL**

  /users/{user}

* **Méodo:**

  `GET`
  
*  **Parametros URL**
	
   **Required:**
 
   `user=[integer]`

* **Parametros Cuerpo**
  
  No aplica

* **Success Response:**

  * **Código:** 200 OK <br />
    **Contenido:** 
    `{
	"data": {
		"id": 2,
		"name": "Anabelle klocko",
		"email": "ybeer@example.net",
		"genre": "Man",
		"verified": "0",
		"admin": "true",
		"created_at": "2018-05-22 19:01:20",
		"updated_at": "2018-05-22 19:01:20",
		"deleted_at": null
	}
}`
 
* **Error Response:**
  * **Código:** 404 NOT FOUND <br />
    **Contenido:** 
    `{
	"error": "No existe ninguna instancia de user con el id especificado",
	"code": 404
}`
     
     Ó

  * **Código:** 401 UNAUTHENTICATED <br />
    **Contenido:**
    `{
	      "error": "No autenticado.",
	      "code": 401
     }`


**Crea un usuario**
----
  Retorna data con el usuario creado.

* **URL**

  /users

* **Méodo:**

  `POST`
  
*  **Parametros URL**
	
  No aplica
  
* **Parametros Cuerpo**
  
  **Required:**
 
   `{
	"name":"User name",
	"email":"email@user.com",
	"password":"secret",
	"password_confirmation":"secret",
	"genre":"man"
}`

* **Success Response:**

  * **Código:** 201 CREATED <br />
    **Contenido:** 
    `{
	"data": {
		"name": "User name",
		"email": "email@user.com",
		"genre": "Man",
		"verified": "0",
		"admin": "false",
		"updated_at": "2018-05-22 19:32:50",
		"created_at": "2018-05-22 19:32:50",
		"id": 11
	}
}`
 
* **Error Response:**
  * **Código:** 422 UNPROCESSABLE ENTRY <br />
    **Contenido:** 
    `{
	"error": {
		"name": [
			"The name field is required."
		],
		"email": [
			"The email field is required."
		],
		"password": [
			"The password field is required."
		],
		"genre": [
			"The genre field is required."
		]
	},
	"code": 422
}`
     
     O

  * **Código:** 401 UNAUTHENTICATED <br />
    **Contenido:**
    `{
	      "error": "No autenticado.",
	      "code": 401
     }`
     
**Actualiza un usuario**
----
  Retorna data con el usuario actualizado.

* **URL**

  /users/{user}

* **Méodo:**

  `PUT`
  
*  **Parametros URL**
	
  **Required:**
 
   `user=[integer]`
  
* **Parametros Cuerpo**

   `{
	"name":"User name",
	"email":"email@user.com",
	"password":"secret",
	"password_confirmation":"secret",
	"genre":"man"
}`

* **Success Response:**

  * **Código:** 200 OK <br />
    **Contenido:** 
    `{
	"data": {
		"name": "User name",
		"email": "email@user.com",
		"genre": "Man",
		"verified": "0",
		"admin": "false",
		"updated_at": "2018-05-22 19:32:50",
		"created_at": "2018-05-22 19:32:50",
		"id": 11
	}
}`
 
* **Error Response:**
  * **Código:** 422 UNPROCESSABLE ENTRY <br />
    **Contenido:** 
    `{
	"error": "Se debe especificar al menos un valor diferente para actualizar",
	"code": 422
}`
     
	Ó
     
     * **Código:** 404 NOT FOUND <br />
    **Contenido:** 
    `{
	"error": "No existe ninguna instancia de user con el id especificado",
	"code": 404
}`

	Ó
     
  * **Código:** 401 UNAUTHENTICATED <br />
    **Contenido:**
    `{
	      "error": "No autenticado.",
	      "code": 401
    }`

**Elimina un usuario**
----
  Retorna data con el usuario actualizado.

* **URL**

  /users/{user}

* **Méodo:**

  `DELTE`
  
*  **Parametros URL**
	
  **Required:**
 
   `user=[integer]`
  
* **Parametros Cuerpo**
No aplica

* **Success Response:**

  * **Código:** 200 OK <br />
    **Contenido:** 
    `	"data": {
		"id": 1,
		"name": "Shirley gaylord i",
		"email": "federico.ledner@example.net",
		"genre": "Man",
		"verified": "1",
		"admin": "false",
		"created_at": "2018-05-22 19:01:20",
		"updated_at": "2018-05-22 19:03:37",
		"deleted_at": "2018-05-22 19:03:37"
	}
}`
 
* **Error Response:**
  * **Código:** 422 UNPROCESSABLE ENTRY <br />
    **Contenido:** 
     
     * **Código:** 404 NOT FOUND <br />
    **Contenido:** 
    `{
	"error": "No existe ninguna instancia de user con el id especificado",
	"code": 404
}`

	Ó
     
  * **Código:** 401 UNAUTHENTICATED <br />
    **Contenido:**
    `{
	      "error": "No autenticado.",
	      "code": 401
    }`
