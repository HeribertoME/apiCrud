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

  * **Código:** 201 <br />
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

  * **Código:** 401 UNPROCESSABLE ENTRY <br />
    **Contenido:**
    `{
	      "error": "No autenticado.",
	      "code": 401
     }`

**Muestra un usuario**
----
  Retorna data con un usuario simple.

* **URL**

  /users{user}

* **Méodo:**

  `GET`
  
*  **Parametros URL**
	
   **Required:**
 
   `user=[integer]`

* **Parametros Cuerpo**
  
  No aplica

* **Success Response:**

  * **Código:** 201 <br />
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

  * **Código:** 401 UNPROCESSABLE ENTRY <br />
    **Contenido:**
    `{
	      "error": "No autenticado.",
	      "code": 401
     }`
